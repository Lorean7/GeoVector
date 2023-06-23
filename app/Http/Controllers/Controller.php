<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;
use App\Notifications\NewMessage;
use App\Http\Requests\Validation;
use App\Models\Category;
use App\Models\Offer;
use App\Models\product;
use Intervention\Image\Facades\Image;
// use Illuminate\Support\Facades\Notification;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // рендер страниц начало 
    public function get_offers(Request $request) {
        $query = $request->input('query');
        $offer = new Offer();
        $offers = $offer->where('name', 'LIKE', "%$query%")->limit(10)->get();

        header('Content-Type: application/json');
        echo json_encode($offers);
    }
    public function get_offers_for_header(){
        $offer = new Offer();
        $offers = $offer->all();
        $offersData = $offers->map(function($item) {
            return $item->toArray(); // Преобразуем каждый объект категории в ассоциативный массив
        });

        return $offersData;
    }
    public function home(){
        $category = new Category();
        $categories = $category->all();
        $categoriesData = $categories->map(function($item) {
            return $item->toArray(); // Преобразуем каждый объект категории в ассоциативный массив
        });
        $offersData = $this->get_offers_for_header();

        return view('pages/home', compact('categoriesData', 'offersData'));
    }
    public function delivery(){
        $category = new Category();
        $categories = $category->all();
        $categoriesData = $categories->map(function($item) {
            return $item->toArray(); // Преобразуем каждый объект категории в ассоциативный массив
        });
        $offersData = $this->get_offers_for_header();

        return view('pages/delivery', compact('categoriesData', 'offersData'));
    }
    public function productCard(){
        $category = new Category();
        $categories = $category->all();
        $categoriesData = $categories->map(function($item) {
            return $item->toArray(); // Преобразуем каждый объект категории в ассоциативный массив
        });
        $offersData = $this->get_offers_for_header();
        $offer = new Offer();
        $id_offer = $_GET['id'];
        $offer = Offer::where('id',$id_offer)->first()->toArray();

        $category_id_offer = $offer['category_id'];

        $childCategories = $this->getChildCategories($id_offer);

        
        $list_category = $this->get_category_offer($category_id_offer);

        return view('pages/product-card',compact('categoriesData', 'offersData', 'offer', 'list_category','childCategories'));
    }
    public function get_category_offer($category_id_offers)
    {
        $category = new Category();
        $categories = $category->all();
        $categoriesData = $categories->map(function($item) {
            return $item->toArray();
        });

        $list_category = $this->getParentCategories($category_id_offers, $categoriesData);

        return $list_category;
    }
    public function catalog(){
        $category = new Category();
        $categories = $category->all();
        $categoriesData = $categories->map(function($item) {
            return $item->toArray(); // Преобразуем каждый объект категории в ассоциативный массив
        });

        $offersData = $this->get_offers_for_header();
        $id_category = $_GET['category_id'];

        $childCategories = $this->getChildCategories($id_category);

        $list_category = $this->getParentCategories($id_category, $categoriesData);

        return view('pages/catalog', compact('categoriesData', 'offersData', 'list_category','childCategories'));
    }
    function getChildCategories($categoryId)
    {
        $childCategories = [];
    
        $categories = Category::where('parent_id', $categoryId)->get();
    
        foreach ($categories as $category) {
            $childCategories[] = $category;
    
            $childCategories = array_merge($childCategories, $this->getChildCategories($category->id));
        }
    
        return $childCategories;
    }
    
    private function getParentCategories($category_id, $categoriesData)
    {
        $list_category = [];

        foreach ($categoriesData as $category) {
            if ($category['id'] == $category_id) {
                $list_category[] = $category;

                if ($category['parent_id'] == 0) {
                    break;
                }

                $parent_categories = $this->getParentCategories($category['parent_id'], $categoriesData);

                $list_category = array_merge($parent_categories, $list_category);
                break;
            }
        }

        return $list_category;
    }
    public function product($alias){
        $product = product::where('alias',$alias)->first();
        return view('pages/product', [
            'product'=>$product
        ]);
    }
    // рендер страниц конец 

    public function SendMessage(Validation $request)
    {
        $user = new User();
        $user->id = 1;
        $user->email = 'oleglone7@gmail.com';
        $user->name = 'Морозов Сергей';
        $validated = $request->validated();
        if ($validated) {
            $letter = new \stdClass();
            $letter->name = $request->name;
            $letter->email = $request->email;
            $letter->message = $request->message;
            $user->notify(new NewMessage($letter));
        }
        
        return view('pages/contacts', [
            'message'=>'Ваше сообщение отправлено. Спасибо за обращение!'
        ]);
    }
    public function SendOrder(Validation $request){
        $user = new User();    
        $user->id = 1;
        $user->email = 'it@aquazond.ru';
        $user->name = 'Морозов Сергей';
        $validated = $request->validated();
        if ($validated) {
            $letter = new \stdClass();
            $letter->name = $request->name;
            $letter->email = $request->email;
            $letter->message = $request->message;
            $letter->title = $request->title;
            $user->notify(new NewMessage($letter));
        }
        return view('pages/contacts', [
            'message'=>'Ваше сообщение отправлено. Спасибо за обращение!'
        ]);
    }
   
    public function Dashboard ()
    {
        return view('admin/dashboard', [
            // 'message'=>'Ваше сообщение отправлено. Спасибо за обращение!'
        ]);
    }    
    public function Login ()
    {
        return view('auth/login', [
            // 'message'=>'Ваше сообщение отправлено. Спасибо за обращение!'
        ]);
    }    


    public function LoadImage(Request $request)
    {
        $data = '';
        if ($request->file('img') !== NULL) {
            $file = $request->file('img');
            $path = $file->store('uploads', 'public');
            $data = $path;

            $image = Image::make($file);
            $image->resize(350, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $filename = pathinfo($path, PATHINFO_FILENAME) . '_350.' . pathinfo($path, PATHINFO_EXTENSION);
            $path_350 = $image->save(public_path('storage/uploads/' . $filename));

            // $data['small'] = 'uploads/' . $filename;
        }
        return $data;
    }
    

    // public function GetClients (){
    //     $clients = Client::get();
    //     $vip = Price::get();
    //     $vips = array();
    //     foreach($vip as $price){
    //         $vips[$price->id] = $price->name;
    //     }
    //     return Inertia::render('Clients', [
    //         'clients' => $clients,
    //         'vip' => $vips
    //     ]);
    // }

    // public function ClientDetail ($id){
    //     $client = Client::where('id', $id)->first();
    //     $price = Price::get();
    //     $orders = Order::where('client_id', $id)->Paginate(20)->withQueryString();
    //     $orderIds = $orders->pluck('id');
    //     $order_items = Order_item::whereIn('order_id',$orderIds)->get();
    //     $orders->appends(['sort' => 'to_date']);
    //     return Inertia::render('Clients/ClientDetail', [
    //         'client' => $client,
    //         'vip'=>$price,
    //         'orders'=>$orders,
    //         'order_items'=>$order_items
    //     ]);
    // }

    // public function AddClient (Request $request){
    //     $request->validate([
    //         'phone' => ['required', 'digits_between:7,15',],
    //         'name' => ['required', 'max:50'],
    //     ]);
    //     $clients = Client::firstOrCreate(
    //         ['phone' => $request->phone],
    //         [
    //             'name' => $request->name,
    //             'instagram' => $request->instagram,
    //             'adress' => $request->adress,
    //             'vip' => $request->vip,
    //             'type' => $request->type
    //         ]
    //     );
    //     return redirect('/clients');
    // }


}

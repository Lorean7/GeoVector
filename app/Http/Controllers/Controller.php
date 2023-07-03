<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
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
    public function get_offers(Request $request)
    {
        $query = $request->input('query');
        $offers = Offer::where('name', 'LIKE', "%$query%")->limit(10)->get();
        
        return response()->json($offers);
    }
    
    public function get_offers_for_header()
    {
        return Offer::orderBy('name', 'asc')->get()->toArray();
    }
    
    
    public function get_category_offer($category_id_offers)
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $list_category = $this->getParentCategories($category_id_offers, $categoriesData);

        return $list_category;
    }

    public function get_hits_offers(){
        $hits = Offer::where('hit',1)->get()->toArray();
        return $hits;
    }

    public function get_new_offers(){
        $newOffers = $latestOffers = Offer::latest()->limit(10)->get()->toArray();

        return $newOffers;
    }
    // Рендер страницы
    
    public function home()
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();
        $hits = $this->get_hits_offers();
        $newOffers = $this->get_new_offers(); 

        return view('pages/home', compact('categoriesData', 'offersData','hits','newOffers'));
    }
    public function about()
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();
        $hits = $this->get_hits_offers();
        $newOffers = $this->get_new_offers(); 

        return view('pages/about', compact('categoriesData', 'offersData','hits','newOffers'));
    }

    public function delivery()
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();

        return view('pages/delivery', compact('categoriesData', 'offersData'));
    }

    public function getOffer(){
        $id_offer = $_GET['id'];
        $offer = Offer::findOrFail($id_offer)->toArray();
        return response()->json($offer);
    }

    public function productCard()
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();
        $id_offer = $_GET['id'];
        $offer = Offer::findOrFail($id_offer)->toArray();
        $category_id_offer = $offer['category_id'];
        $childCategories = $this->getChildCategories($id_offer);
        $list_category = $this->get_category_offer($category_id_offer);

        return view('pages/product-card', compact('categoriesData', 'offersData', 'offer', 'list_category', 'childCategories'));
    }
    public function rent()
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();
        $genName = 'Геодезическое оборудование';

        $dataGenCategory = array_filter($categoriesData, function ($category) use ($genName) {
            return $category['name'] === $genName;

        });

        $dataGenCategory = reset($dataGenCategory);
        $subCategories =[];
        $blockName = 'Аксессуары';

        foreach ($categoriesData as $category){
            if ($category['parent_id'] == $dataGenCategory['id'] && $category['name'] != $blockName){
                $sub_category[] = $category;
            }
        }
        return view('pages/rent', compact('categoriesData', 'offersData', 'sub_category'));
    }

    public function repair()
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();
        $genName = 'Геодезическое оборудование';

        $dataGenCategory = array_filter($categoriesData, function ($category) use ($genName) {
            return $category['name'] === $genName;

        });

        $dataGenCategory = reset($dataGenCategory);
        $subCategories =[];
        $blockName = 'Аксессуары';

        foreach ($categoriesData as $category){
            if ($category['parent_id'] == $dataGenCategory['id'] && $category['name'] != $blockName){
                $sub_category[] = $category;
            }
        }
        return view('pages/repair', compact('categoriesData', 'offersData', 'sub_category'));
    }

    public function rentDetail()
    {
        $id_category = $_GET['id_category'];
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();
        $currentCategory = Category::where('id', $id_category)->get()->toArray();

        return view('pages/rent-detail', compact('categoriesData', 'offersData', 'currentCategory'));
    }

    public function repairDetail()
    {
        $id_category = $_GET['id_category'];
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();
        $currentCategory = Category::where('id', $id_category)->get()->toArray();

        return view('pages/repair-detail', compact('categoriesData', 'offersData', 'currentCategory'));
    }



    public function serviceCenter()
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();

        return view('pages/service-center', compact('categoriesData', 'offersData'));
    }

    public function uslugi()
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();

        return view('pages/uslugi', compact('categoriesData', 'offersData'));
    }

    public function catalog()
    {
        $categoriesData = Category::orderBy('name', 'asc')->get()->toArray();
        $offersData = $this->get_offers_for_header();
        $id_category = $_GET['category_id'];
        if (isset($id_category)){
            $validate_id_category = Category::where('id', $id_category)->first();
            if ($validate_id_category == null){
                return("категория не найдена");
            }
        }else{
            return("Произошла ошибка в указание уникального идентификатора категории");
        }
        $childCategories = $this->getChildCategories($id_category);
        $list_category = $this->getParentCategories($id_category, $categoriesData);
        $currentCategory = end($list_category); // получение текущей категории

        return view('pages/catalog', compact('categoriesData', 'offersData', 'list_category', 'childCategories'));
    }

    // end Рендер страницы
    public function getOffersOnlyCategory($offersData,$childCategories,$id_category){
        $currentOffers = [];

        // фильтруем товары и ищем только те которые относятся к текущему уровню
        foreach ($offersData as $offer) {
            if (count($childCategories) > 0){
                foreach ($childCategories as $childCateg) {
                    if ($childCateg['id'] == $offer['category_id']) {
                        $currentOffers[] = $offer;
                    }
                }
            }else {
                //если нет дочерней категории просматриваем только текущию ( последний уровень)
                if($id_category == $offer['category_id']) {
                    $currentOffers[] = $offer;
                }
            }
        }
        return $currentOffers;
    }
        public function rentAjaxDetail(Request $request) {
            $id_category = $request->input('id_category');
            $offersData = $this->get_offers_for_header();

            $page = $request->input('page', 1); // Номер страницы
            $perPage = $request->input('perPage', 12); // Размер страницы

            $childCategories = $this->getChildCategories($id_category);
            $offersCategory = $this->getOffersOnlyCategory($offersData, $childCategories, $id_category);
            $offersRent = [];
    
            foreach($offersCategory as $of_cat) {
                if($of_cat['rent'] > 0 && $of_cat['rent'] != null) {
                    $offersRent[] = $of_cat;
                }
            }
            $paginatedOffers = array_slice($offersRent, ($page - 1) * $perPage, $perPage);
            return response()->json([
                'data' => $paginatedOffers,
                'total' => count($offersRent),
                'perPage' => $perPage,
                'currentPage' => $page,
                'currentIdCategory' => $id_category
            ]);
        }

        public function getGeoDataAjax()
        {
            $mainCity = array(
                "Moscow" => "Москва",
                "Rostov-on-Don" => "Ростов-на-Дону",
                "Yekaterinburg" => "Екатеринбург",
                "Krasnodar" => "Краснодар",
                "Samara" => "Самара",
                "Saint Petersburg" => "Санкт-Петербург",
                "Ufa" => "Уфа",
                "Chelyabinsk" => "Челябинск"
            );
            // получение других городов для заказа
            $path = public_path('src/json/russia.json');
            $data = file_get_contents($path);
            $otherCity = json_decode($data, true);

            // Извлечение названий городов с помощью array_column()
            $cityNames = array_column($otherCity, 'city');

            // Сортировка названий городов в алфавитном порядке
            sort($cityNames);

            // Создание нового массива с индексами и отсортированными городами
            $otherFilterCity = array_combine(range(1, count($cityNames)), $cityNames);

            $data = [
                'mainCity' => $mainCity, 
                'otherCity' => $otherFilterCity
            ];

            return response()->json($data);
        }

            public function catalogAjax(Request $request)
        {
            // Все продукты из БД
            if (isset($_GET['id_category'])){
                $sort = $request->input('sort');
                
                $offersData = $this->get_offers_for_header();
                // все дочернии категории
                $idCategory = $request->input('id_category');
                $childCategories = $this->getChildCategories($idCategory);
                //
                $page = $request->input('page', 1); // Номер страницы
                $perPage = $request->input('perPage', 12); // Размер страницы
                // Получите данные для текущей страницы
                $currentOffers = $this->getOffersOnlyCategory($offersData, $childCategories, $idCategory);
                // фильтрация по цене всех офферов
                // проверяем атрибут sort  и сортируем
                $prices = array_column($currentOffers, 'price');
                if ($sort == 'asc'){
                    array_multisort($prices, SORT_ASC, $currentOffers);
                }else if($sort == 'desc'){
                    array_multisort($prices, SORT_DESC, $currentOffers);
                }else if ($sort == 'alphabet') {
                    usort($currentOffers, function($a, $b) {
                        return strcmp($a['name'], $b['name']);
                    });
                }else if($sort == 'hitdown'){
                    usort($currentOffers, function($a, $b) {
                      
                        if ($a['hit'] == 1 && $b['hit'] != 1) {
                            return -1;
                        } elseif ($a['hit'] != 1 && $b['hit'] == 1) {
                            return 1; 
                        } else {
                            return 0; 
                        }
                    });
                }else if ($sort == 'hitup'){
                    usort($currentOffers, function($a, $b) {
                        if ($a['hit'] == 1 && $b['hit'] != 1) {
                            return 1; 
                        } elseif ($a['hit'] != 1 && $b['hit'] == 1) {
                            return -1; 
                        } else {
                            return 0; 
                        }
                    });
                }

                $paginatedOffers = array_slice($currentOffers, ($page - 1) * $perPage, $perPage);
                return response()->json([
                    'data' => $paginatedOffers,
                    'total' => count($currentOffers),
                    'perPage' => $perPage,
                    'currentPage' => $page,
                    'currentIdCategory' => $idCategory
                ]);
            }
        }

    
    public function getChildCategories($categoryId)
    {
        $childCategories = [];

        $categories = Category::where('parent_id', $categoryId)->get();

        foreach ($categories as $category) {
            $childCategories[] = $category;

            $childCategories = array_merge($childCategories, $this->getChildCategories($category->id));
        }

        return $childCategories;
    }

    public function getParentCategories($category_id, $categoriesData)
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

    public function product($alias)
    {
        $product = Product::where('alias', $alias)->first();

        return view('pages/product', compact('product'));
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
    // public function SendOrder(Request $request){

    //     $user = new User();    
    //     $user->id = 1;
    //     $user->email = 'it@aquazond.ru';
    //     $user->name = 'Морозов Сергей';
    //     $validated = $request->validated();
    //     if ($validated) {
    //         $letter = new \stdClass();
    //         $letter->name = $request->name;
    //         $letter->email = $request->email;
    //         $letter->message = $request->message;
    //         $letter->title = $request->title;
    //         $user->notify(new NewMessage($letter));
    //     }
    //     return view('pages/contacts', [
    //         'message'=>'Ваше сообщение отправлено. Спасибо за обращение!'
    //     ]);
    // }
    public function sendOrder(Request $request)
    {
        $titleProduct = $request->input('titleProduct');
        $quantityValue = $request->input('quantityValue');
        $priceValue = $request->input('priceValue');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $comment = $request->input('comment');
        

        $user = new User();    
        $user->id = 1;
        $user->email = 'oleglone7@gmail.com';
        $user->name = 'Морозов Сергей';

            $letter = new \stdClass();
            $letter->title = "Заказ:" . $titleProduct;
            $letter->name = $name;
            $letter->quantityValue = $quantityValue;
            $letter->priceValue = $priceValue;
            $letter->phone = $phone;
            $letter->message = $comment;
            $user->notify(new NewMessage($letter));
 

        // Дальнейшая обработка полученных данных

        return response()->json(['message' => 'Order received successfully']);
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

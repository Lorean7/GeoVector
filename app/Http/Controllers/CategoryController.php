<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xmlString = file_get_contents('https://www.rusgeocom.ru/market/wholesaler/www-RGK.xml');
        $xmlObject = simplexml_load_string($xmlString);

        foreach ($xmlObject->shop->categories->category as $category) {
            $id = (string) $category['id'];
            $parentId = (string) $category['parentId'];
            $name = (string) $category;

            $product = Category::updateOrCreate(['id' => $id],[
                
                'parent_id' => $parentId,
                'name' => $name
            ]);

            $categoryData = [
                'id' => $id,
                'parentId' => $parentId,
                'name' => $name
            ];

            $categories[] = $categoryData;
        }
        $goods = [];
        foreach ($xmlObject->shop->offers->offer as $offer) {
            $id = (string) $offer['id'];
            // $parentId = (string) $offer['parentId'];
            $name = (string) $offer->name;
            $category_id = (string) $offer->categoryId;
            $price = (string) $offer->price;
            $vendor = (string) $offer->vendor;
            $currencyId = (string) $offer->currencyId;
            $description = (string) $offer->description;
            $specifications = (string) $offer->specifications;
            $vendorCode = (string) $offer->vendorCode;
            $width = (string) $offer->width;
            $length = (string) $offer->length;
            $height = (string) $offer->height;
            $weight = (string) $offer->weight;
            $quantity = (string) $offer->quantity;
            $pictures = [];
            foreach ($offer->children() as $child) {
                if (strpos($child->getName(), 'picture') === 0) {
                    $pictures[] = (string) $child;
                }
            }
            $pictures = $pictures;
            
            $product = Offer::updateOrCreate(['id' => $id],[
                
                'category_id' => $category_id,
                'name' => $name,
                'price' => $price,
                'vendor' => $vendor,
                'currency_id' => $currencyId,
                'description' => $description,
                'specifications' => $specifications,
                'vendorCode' => $vendorCode,
                'width' => $width,
                'length' => $length,
                'height' => $height,
                'weight' => $weight,
                'quantity' => $quantity,
                'pictures' => $pictures
            ]);
           

            $categoryData = [
                'id' => $id,
                'parentId' => $parentId,
                'name' => $name,
                'pictures'=> $pictures
            ];

            $goods[] = $categoryData;
        }
        return view('admin/category', [
            'phpArray'=> $goods
            // 'message'=>'Ваше сообщение отправлено. Спасибо за обращение!'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

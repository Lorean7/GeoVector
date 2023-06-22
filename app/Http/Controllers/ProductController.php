<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use App\Models\product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =product::get();
        return view('admin/product_list', [
            'products'=>$products
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
        return view('admin/product_create', [
            // 'message'=>'Ваше сообщение отправлено. Спасибо за обращение!'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'alias' => [
                'required',
                // Rule::unique('products')->ignore($product->id),
                Rule::unique('products')
            ],
        ]);
        if ($validator) {
            $product = Product::create([
                'shot_name' => $request->shot_name,
                'full_name' => $request->full_name,
                'shot_desc' => $request->shot_desc,
                'title' => $request->title,
                'desc' => $request->desc,
                'keywords' => $request->keywords,
                'material' => $request->material,
                'voltag' => $request->voltag,
                'power' => $request->power,
                'interface' => $request->interface,
                'protokol' => $request->protokol,
                'main_img' => $request->main_img,
                'small_img' => $request->small_img,
                'gabarit_img' => $request->gabarit_img,
                'functions' => $request->functions,
                'title_gallery' => $request->title_gallery,
                'tth' => $request->tth,
                'publish' => $request->publish,
                'alias' => $request->alias
            ]);
            return redirect('/admin/product');
        }
        else {
            return back()->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        // $product->functions = json_decode($product->functions);
        return view('admin/product_edit', [
            'product'=>$product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        if (isset($request->ispublish)) {
            $publish=0;
            if ($request->publish) {
                $publish=1;
            }
            $product->publish = $publish;
            $product->save();
            return $publish;
        }
        else {
            foreach ($request->all() as $key => $value) {
                if ($key!='_token'&&$key!='_method') {
                    // if ($key=='functions') {
                    //     $product->{$key} =  json_encode($value);
                    // }
                    // else{
                        $product->{$key} = $value;
                    // }
                    
                }
               
            }
            $validator = $request->validate([
                'alias' => [
                    'required',
                    // Rule::unique('products')->ignore($product->id),
                    Rule::unique('products')->ignore($product->id)
                ],
            ]);
            if ($validator) {
                if ($request->file('main_img') !== NULL) {
                    $file = $request->file('main_img');
                    $path = $file->store('uploads', 'public');
                    $product->main_img = $path;
                }
                if ($request->file('small_img') !== NULL) {
                    $file = $request->file('small_img');
                    $path = $file->store('uploads', 'public');
                    $product->small_img = $path;
                }
                if ($request->file('gabarit_big_img') !== NULL) {
                    $file = $request->file('gabarit_big_img');
                    $path = $file->store('uploads', 'public');
                    $product->gabarit_big_img = $path;

                    $image = Image::make($file);
                    $image->resize(520, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $filename = pathinfo($path, PATHINFO_FILENAME) . '_520.' . pathinfo($path, PATHINFO_EXTENSION);
                    $path_520 = $image->save(public_path('storage/uploads/' . $filename));

                    $product->gabarit_img = 'uploads/' . $filename;
                }
                $product->save();
                return back();
            }
            else {
                return back()->withInput();
            }
           
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
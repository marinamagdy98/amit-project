<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories=Category::all();
        $products=Product::all();
        return view('Admin.index',compact('products','categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories=Category::all();
          return view('Admin.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request->product_photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'upload_product';
        $request->product_photo->move($path, $file_name);
        //return $file_name;
        Product::create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_category' => $request->category_name,
            'product_photo' => $file_name,
        ]);
        return redirect()->back()->with('add', 'product Uploaded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::findOrFail($id);
        return view('admin.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product=Product::find($id);
        return view ("Admin.edit",compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        //return $request;
        $new_price=$request->new_price;
        $new_price==null ? $store=$product->product_price : $store=$new_price ;
        $product->update([
            "product_price"=>$new_price,
        ]);
        return redirect()->back()->with('status' , 'product edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      //  return "done";
      $Product = Product::find($id);
      $img_destination = 'upload_Product/' . $Product->product_photo;
      
      if (File::exists($img_destination)) {
          File::delete($img_destination);
      }
      $Product->delete();
      return redirect()->back();
    }
}

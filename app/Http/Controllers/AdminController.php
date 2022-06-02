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
        $product=Product::findOrFail($id);
        $file_extension = $request->new_image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'upload_product';
        $request->new_image->move($path, $file_name);

        $product->update([
            'product_name' => $request->new_name,
            'product_price' => $request->new_price,
            'product_photo' => $file_name,
        ]);
        return redirect()->back()->with('status' , 'thank you for edit');

    }

    public function remove($id)
    {
        return redirect()->back()->with('confirm' ,$id);
        //return "done";
        // if($request->id) {
        //     $cart = session()->get('cart');
        //     if(isset($cart[$request->id])) {
        //         unset($cart[$request->id]);
        //         session()->put('cart', $cart);
        //     }
        //     session()->flash('success', 'Product removed successfully');
        // }
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
     // return redirect()->back()->with('confirm', 'Are you sure !');

      $Product = Product::find($id);
      $img_destination = 'upload_Product/' . $Product->product_photo;
      
      if (File::exists($img_destination)) {
          File::delete($img_destination);
      }
      $Product->delete();
      return redirect()->back();
    }
    public function confirm(){
      //  return redirect()->back()->with('confirm', 'Are you sure !');
      return "done";
    }
}

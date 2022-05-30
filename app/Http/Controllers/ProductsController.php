<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('products',compact('products'));
    }
    public function search(){
        $search_text= $_GET['query'];
        $products=Product::where('product_name','LIKE','%'. $search_text .'%')->get();
        return view('search',compact('products'));
    }
}

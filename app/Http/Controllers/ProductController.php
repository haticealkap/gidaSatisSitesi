<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at','DESC')->get();
        Log::info(auth()->user()->id);
        return view('dashboard.products',['products'=>$products]);
    }
    public function add(){
        return view('dashboard.product-add');
    }
    public function store(Request $request){
        if ($request->id) {
          $product = Product::find($request->id);
        } else {
           $product = new Product();
        }
        
        $product->name = $request->name;
        $product->regular_price = $request->regular_price;
        $product->promotion_price = $request->promotion_price;
        $product->currency = $request->currency;
        $product->content = $request->content;
        $product->stok = $request->stok;
        if ($request->file('image')) {
            $name = date('YmdHi').$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('public/images'), $name);
            $product->image = $name;
        } 

        $product->save();

        return redirect('/admin/products');
    }
    public function edit2($id){
        $product = Product::find($id);
        return view('dashboard.product-edit',['product'=>$product]);
    }
    public function edit(){

    }
    public function destroy($id){
        $slider = Product::find($id);
        $slider->delete();
        return redirect()->back();
    }
}
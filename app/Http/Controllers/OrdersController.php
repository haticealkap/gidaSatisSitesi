<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Product;
use App\Models\Sepet;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        $orders = Orders::with('get_products')->orderBy('created_at','DESC')->get();

        return view('dashboard.orders',['orders'=>$orders]);
    }
    public function store($user_id){
        $sepettekiler = Sepet::with('get_products','get_user')->where('user_id',$user_id)->get();

        foreach($sepettekiler as $sepet){
            $order  = new Orders();

            $order->user_id = $user_id;
            $order->product_id = $sepet->product_id;
            $order->piece = $sepet->piece;
            $order->confirm = "0";
            $order->save();

        }
      return redirect()->back()->withErrors('message','Siparişiniz Başarıyla Alında');
    }
    public function onay($id){
        $urun = Orders::with('get_products','get_user')->find($id);

        if ($urun->status) {
            return redirect()->back();
        } else {
            $urun->status = 1;
            $urun->save();

            $product= Product::find($urun->product_id);
            $product->stok = $product->stok - $urun->piece;
            $product->save();
        }
        
        return redirect()->back();
    }
    public function edit(){

    }
    public function destroy(){

    }
}

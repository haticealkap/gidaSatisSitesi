<?php

namespace App\Http\Controllers;

use App\Models\Sepet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SepetController extends Controller
{
    public function get_data($user){
        $sepet = Sepet::with('get_products')->where('user_id',$user)->get();

        return $sepet;
    }
    public function index($user){
        $sepet = Sepet::with('get_products')->where('user_id','=',$user)->get();

        return view('client.sepet',['sepet'=>$sepet]);
    }
    public function store($id,$user){

        $sepet_is = Sepet::where('product_id',$id)->where('user_id',$user)->get();
        if (count($sepet_is)>0) {
            $sepet = $sepet_is[0];
            $sepet->piece = $sepet->piece +1 ;
            $sepet->save();
        } else {
            $sepet = new Sepet();
            $sepet->user_id = $user;
            $sepet->product_id = $id;
            $sepet->piece = 1;
            $sepet->save();
        }
        return redirect()->back();
    }
    public function destroy( $id){
        $sepet = Sepet::find($id);
        $sepet->delete();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at','DESC')->get();
        $sliders = Slider::orderBy('created_at','DESC')->get();
            $user = auth()->user();
 
        Log::info($user);

        return view('client.home',['sliders'=>$sliders,'products'=>$products,'user'=>$user]);
    }
    public function product(){
        $products = Product::orderBy('created_at','DESC')->get();
        return view('client.products',['products'=>$products]);

    }
}

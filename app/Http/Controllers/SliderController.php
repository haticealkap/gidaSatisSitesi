<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::orderBy('created_at','DESC')->get();
        return view('dashboard.sliders',['sliders'=>$sliders]);
    }
    public function add(){
        return view('dashboard.slider-add');
    }
    public function store(Request $request){
        $slider = new Slider();

        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->content = $request->content;
        $slider->button_text = $request->button_text;
        if ($request->file('image')) {
            $name = date('YmdHi').$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('public/images'), $name);
            $slider->image = $name;
        } 

        $slider->save();

        return redirect('/admin/slider');
    }
    public function edit2($id){
        $slider = Slider::find($id);
        return view('dashboard.slider-edit',['slider'=>$slider]);
    }
    public function edit($id, Request $request){
        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->content = $request->content;
        $slider->button_text = $request->button_text;
        if ($request->file('image')) {
            $name = date('YmdHi').$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('public/images'), $name);
            $slider->image = $name;
        } 

        $slider->save();
        return redirect('/admin/slider');
    }
    public function destroy($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back();
    }
}

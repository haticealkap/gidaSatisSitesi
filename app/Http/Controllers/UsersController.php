<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    public function account($user_id){
        $user =User::find($user_id);
        $orders = Orders::with('get_products')->where('user_id',$user_id)->orderBy('created_at','DESC')->get();
        return view('client.account',['user'=>$user,'orders'=>$orders]);
    }
    public function index(){
        $users  = User::orderBy('created_at','DESC')->get();
        return view('dashboard.users',['users'=>$users]);
    }
    public function dondurma($id){
        $users = User::find($id);

        if ($users->status) {
            $users->status = 0;
            $users->save();
        } else {
            $users->status = 1;
            $users->save();
        }
        
        return redirect()->back();
    }
    public function store(Request $request){
        if ($request->id) {
            $user = User::find($request->id);
        } else {
            $user = new User();
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->state = $request->state;
        $user->phone = $request->phone;
        $user->country = $request->country;
        if ($request->file('image')) {
            $name = date('YmdHi').$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $name);
            $user->image = $name;
        } 
        $user->save();
        return redirect()->back()->withErrors(['İşlem Başarılı Giriş Yapınız']);
    }
    public function update(Request $request){

        $user = User::find($request->id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->state = $request->state;
        $user->phone = $request->phone;
        $user->country = $request->country;
        if ($request->file('image')) {
            $name = date('YmdHi').$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $name);
            $user->image = $name;
        } 
        $user->save();
        return redirect()->back()->withErrors(['İşlem Başarılı Giriş Yapınız']);
    }
    public function edit($id){
        $user  = User::find($id);
        return view('dashboard.users-edit',['user'=>$user]);
    }
    public function add(){
        return view('dashboard.users-add');
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/');
        }
        
        return redirect()->intended('/login');
    }
    
    public function loginAdmin(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/admin');
        }
        
        return redirect()->intended('/admin/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}

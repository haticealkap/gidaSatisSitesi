@extends('dashboard.layouts.default')
@section('content')
<section class="content-main">
    <div class="content-header">
        <h2 class="content-title">Kullanıcılar</h2>
        <div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Hesap Detayları</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="/user-update/"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="form-group col-md-6">
                        <label>Mevcut Görsel <span class="required">*</span></label>
                        <img src="{{asset('images/'.$user->image)}}"  class="img-fluid" style="width: 200px; height:200px; border-radius: 50%" alt="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Yeni Görsel <span class="required">*</span></label>
                        <input class="form-control square"  type="file" name="image" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>First Name <span class="required">*</span></label>
                        <input class="form-control square"  value="{{$user->first_name}}" type="text"  name="first_name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Last Name <span class="required">*</span></label>
                        <input class="form-control square" value="{{$user->last_name}}" name="last_name" >
                    </div>
                    <div class="form-group col-md-12">
                        <label>Email Address <span class="required">*</span></label>
                        <input class="form-control square" name="email" value="{{$user->email}}" type="email" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Adres1 <span class="required">*</span></label>
                        <input class="form-control square" value="{{$user->state}}" name="state" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ülke <span class="required">*</span></label>
                        <input class="form-control square" value="{{$user->country}}" name="country" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telefon <span class="required">*</span></label>
                        <input class="form-control square" value="{{$user->phone}}" name="phone" >
                    </div>
                    <div class="form-group col-md-12">
                        <label>Password <span class="required">*</span></label>
                        <input class="form-control square" name="password" value="{{bcrypt($user->password)}}" type="password">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-fill-out submit bg-primary" name="submit" value="Submit" >Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section> <!-- content-main end// -->
@endsection
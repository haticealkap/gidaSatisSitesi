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
            <h5>Yeni Kullanıcı Ekle</h5>
        </div>
        <div class="card-body">
            @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
            <form method="POST" action="/api/v1/users/"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Yeni Görsel <span class="required">*</span></label>
                        <input class="form-control square"  type="file" name="image" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>First Name <span class="required">*</span></label>
                        <input class="form-control square"   type="text"  name="first_name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Last Name <span class="required">*</span></label>
                        <input class="form-control square" name="last_name" >
                    </div>
                    <div class="form-group col-md-12">
                        <label>Email Address <span class="required">*</span></label>
                        <input class="form-control square" name="email"  type="email" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Adres1 <span class="required">*</span></label>
                        <input class="form-control square"  name="state" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ülke <span class="required">*</span></label>
                        <input class="form-control square"  name="country" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telefon <span class="required">*</span></label>
                        <input class="form-control square" name="phone" >
                    </div>
                    <div class="form-group col-md-12">
                        <label>Password <span class="required">*</span></label>
                        <input class="form-control square" name="password"  type="password">
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
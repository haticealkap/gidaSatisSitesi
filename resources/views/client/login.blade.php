@extends('client.layouts.default')
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Anasayfa</a>
                <span></span> Sayfalar
                <span></span> Giriş Yap / Kayıt Ol
            </div>
        </div>
    </div>
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-5">
                         
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Hesap Oluştur</h3>
                                    </div>
                                    @isset($errors)
                                        @foreach ($errors as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    @endisset
                                    <form method="post" action="/api/v1/users">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" required="" name="first_name" placeholder="İsim">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" name="last_name" placeholder="Soyisim">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password" placeholder="Şifre">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password" placeholder="Şifre Tekrar">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="text" name="state" placeholder="Adres">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="text" name="country" placeholder="Ülke">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="text" name="phone" placeholder="Telefon">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                                name="login">Kaydol &amp; </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

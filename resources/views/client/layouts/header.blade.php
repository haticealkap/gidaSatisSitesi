<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-frontend/  by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:20:36 GMT -->
<head>
    <meta charset="utf-8">
    <title>Evara - eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href=" {{ asset('evara-frontend/assets/css/main.css')}}">
   
    
</head>

<body>
    <header class="header-area header-style-1 header-height-2" id="app">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><i class="fi-rs-marker"></i><a  href="">@{{api1.name}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li style="text-transform: capitalize">@{{api1.weather[0].description}} @{{api1.weather[0].icon}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                @auth
                                <li><i class="fi-rs-user"></i><a href="/logout">Çıkış Yap</a></li>
                                @else
                                <li><i class="fi-rs-user"></i><a href="/admin/login">Log In /</a><a href="/login"> Sign Up</a></li>

                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href=" "><img src="{{asset('evara-frontend/assets/imgs/theme/logo.svg')}}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <div class="header-bottom header-bottom-bg-color sticky-bar">
                                <div class="container">
                                    <div class="header-wrap header-space-between position-relative">
                                        <div class="logo logo-width-1 d-block d-lg-none">
                                            <a href=" "><img src="{{asset('evara-frontend/assets/imgs/theme/logo.svg')}}" alt="logo"></a>
                                        </div>
                                        <div class="header-nav d-none d-lg-flex">
                    
                                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                                                <nav>
                                                    <ul>
                                                        <li><a class="active" href="/">ANASAYFA</a></li>
                                                        <li>
                                                            <a href="/products">ÜRÜNLER</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                    
                             
                                    </div>
                                </div>
                            </div>
                        </div>
                        @auth
                            
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2"  style="margin-right: 10px;">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Evara" src="{{asset('evara-frontend/assets/imgs/theme/icons/icon-pinterest.svg')}}">
                                        
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="">{{auth()->user()->first_name. ' ' .auth()->user()->last_name . ' '}}</a></h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="/account/{{auth()->user()->id}}">Profilim</a></h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="">Siparişlerim</a></h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-2" >
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="">
                                        <img alt="Evara" src="{{asset('evara-frontend/assets/imgs/theme/icons/icon-cart.svg')}}">
                                        <span class="pro-count blue">@{{shoping.length}}</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li v-for="(item,index) in shoping" :key="item.id" :index="index">
                                                <div class="shopping-cart-img">
                                                    <a href=""><img alt="Evara" :src="'/public/images/'+item.get_products[0].image"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="">@{{item.get_products[0].name}}</a></h4>
                                                    <h4><span>@{{item.piece}} × </span>@{{item.get_products[0].promotion_price}} ₺</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a :href="'/api/v1/sepet-del/'+item.id"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                       
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>@{{price}} ₺</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="{{url('/sepet/'.auth()->user()->id)}}" class="outline">Görüntüle</a>
                                                <a href=""> Tamamla</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main class="main">     
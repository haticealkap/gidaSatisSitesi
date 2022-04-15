@extends('client.layouts.default')
@section('content')
<section class="home-slider position-relative pt-50">
    <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
        
        @isset($sliders)
        @foreach ($sliders as  $slider)
        <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row align-items-center slider-animated-1">
                    <div class="col-lg-5 col-md-6">
                        <div class="hero-slider-content-2">
                            <h4 class="animated">{{$slider['subtitle']}}</h4>
                            <h2 class="animated fw-900">{{$slider['title']}}</h2>
                            <p class="animated">{{$slider['content']}}</p>
                            <a class="animated btn btn-brush btn-brush-3"> {{$slider['button_text']}} </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="single-slider-img single-slider-img-1">
                            <img class="animated slider-1-1" src="{{ asset('public/images/'.$slider['image'])}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endisset

    </div>
    <div class="slider-arrow hero-slider-1-arrow"></div>
</section>
@auth
<section class="featured section-padding position-relative">            
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                <div class="banner-features wow fadeIn animated hover-up">
                    <img src="{{ asset('evara-frontend/assets/imgs/theme/icons/feature-1.png')}}" alt="">
                <a href="/account/{{auth()->user()->id}}"> <h4 class="bg-1">Siparişlerim</h4></a>   
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                <div class="banner-features wow fadeIn animated hover-up">
                    <img src="{{ asset('evara-frontend/assets/imgs/theme/icons/feature-2.png')}}" alt="">
                    <a href="/account/{{auth()->user()->id}}">    <h4 class="bg-3">Profil Bilgilerim</h4></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                <div class="banner-features wow fadeIn animated hover-up">
                    <img src="{{ asset('evara-frontend/assets/imgs/theme/icons/feature-3.png')}}" alt="">
                    <h4 class="bg-2 text-danger">Yakında</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                <div class="banner-features wow fadeIn animated hover-up">
                    <img src="{{ asset('evara-frontend/assets/imgs/theme/icons/feature-4.png')}}" alt="">
                    <h4 class="bg-2 text-danger">Yakında</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                <div class="banner-features wow fadeIn animated hover-up">
                    <img src="{{ asset('evara-frontend/assets/imgs/theme/icons/feature-5.png')}}" alt="">
                    <h4 class="bg-2 text-danger">Yakında</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                <div class="banner-features wow fadeIn animated hover-up">
                    <img src="{{ asset('evara-frontend/assets/imgs/theme/icons/feature-6.png')}}" alt="">
                    <h4 class="bg-2 text-danger">Yakında</h4>
                </div>
            </div>
        </div>
    </div>
</section>  
@endauth



<section class="product-tabs section-padding position-relative wow fadeIn animated">
    <div class="bg-square"></div>
    <div class="container">
        <div class="tab-header">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Ürünler</button>
                </li>
            </ul>
            <a href="/products" class="view-more d-none d-md-flex">Tüm Ürünleri Gör<i class="fi-rs-angle-double-small-right"></i></a>
        </div>
        <!--End nav-tabs-->
        <div class="tab-content wow fadeIn animated" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                    @isset($products)
                    @foreach ($products as  $product)
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('public/images/'.$product['image'])}}" alt="">
                                        <img class="hover-img" src="{{ asset('public/images/'.$product['image'])}}" alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Ürünü Görüntüle" class="action-btn hover-up" href="/product-details/{{$product['id']}}"><i class="fi-rs-eye"></i></a>
                                </div>
                             
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html"></a>
                                </div>
                                <h2><a href="shop-product-right.html">{{$product['name']}}</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>98%</span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>{{$product['promotion_price']}} ₺< </span>
                                    <span class="old-price">{{$product['regular_price']}} ₺</span>
                                </div>
                                @auth
                                <div class="product-action-1 show">
                                    <a aria-label="Sepete Ekle" class="action-btn hover-up" href="{{url('/api/v1/sepet/'.$product['id'].'/'.auth()->user()->id)}}"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div>
                                @endauth
                             
                            </div>
                        </div>
                    </div>
                    @endforeach
                 
                    @endisset
                   
                
                </div>
                <!--End product-grid-4-->
            </div>
        </div>
        <!--End tab-content-->
    </div>
</section>
@endsection
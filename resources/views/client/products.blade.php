@extends('client.layouts.default')
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <span></span> Shop
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">

                    <div class="row product-grid-4">
                        @isset($products)
                        @foreach ($products as  $product)
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                            <img class="default-img" src="{{ asset('images/'.$product['image'])}}" alt="">
                                            <img class="hover-img" src="{{ asset('images/'.$product['image'])}}" alt="">
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
                </div>

            </div>
        </div>
    </section>
@endsection

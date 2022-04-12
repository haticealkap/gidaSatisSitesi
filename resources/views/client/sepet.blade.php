@extends('client.layouts.default')
@section('content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow">Anasyafa</a>
            <span></span> Alışveriş
            <span></span> Sepet
        </div>
    </div>
</div>
<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table shopping-summery text-center clean">
                        <thead>
                            <tr class="main-heading">
                                <th scope="col">Görsel</th>
                                <th scope="col">İsim</th>
                                <th scope="col">Ücret</th>
                                <th scope="col">Adet</th>
                                <th scope="col">Toplam Fİyat</th>
                                <th scope="col">Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif                            @isset($sepet)
                                @foreach ($sepet as $sep)
                                <tr>
                                    <td class="image product-thumbnail"><img src="{{asset('public/images/'.$sep->get_products[0]->image)}}" alt="#"></td>
                                    <td class="product-des product-name">
                                        <h5 class="product-name"><a href="shop-product-right.html">{{$sep->get_products[0]->name}}</a></h5>
                                        <p class="font-xs">{{$sep->get_products[0]->content}}
                                        </p>
                                    </td>
                                    <td class="price" data-title="Price"><span>₺ {{$sep->get_products[0]->promotion_price}} </span></td>
                                    <td class="text-center" data-title="Stock">
                                        <div class="detail-qty border radius  m-auto">
                                            <span class="qty-val">{{$sep->piece}}</span>
                                        </div>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <span>{{$sep->get_products[0]->promotion_price * $sep->piece}} ₺</span>
                                    </td>
                                    <td class="action" data-title="Remove"><a href="{{url('/api/v1/sepet-del/'.$sep->id)}}" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                </tr>
                                @endforeach
                            @endisset
                        

                        </tbody>
                    </table>
                </div>
                <div class="cart-action text-end">
                    <a href="/products" class="btn  mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Alışverişe Devam Et</a>
                    <a href="{{url('/api/v1/orders/'.auth()->user()->id)}}" class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Şiparişi Ver</a>
                </div>
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
            </div>
        </div>
    </div>
</section>
@endsection
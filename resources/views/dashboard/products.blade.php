@extends('dashboard.layouts.default')
@section('content')
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Tüm Ürünler</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div>
            <a href="/admin/product-add" class="btn btn-primary btn-sm rounded">Create new</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5">
                @isset($products)
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="{{asset('images/'.$product['image'])}}" alt="Product"> </a>
                            <div class="info-wrap">
                                <a href="#" class="title text-truncate">{{$product['name']}}</a>
                                <div class="price mb-2">{{$product['promotion_price']}}</div> <!-- price.// -->
                                <div class="price mb-2"><b>Toplam Adet : </b>{{$product['stok']}}</div> <!-- price.// -->
                                <a href="{{ url('/admin/product-edit/'.$product['id'])}}" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="{{ url('/api/v1/product-del/'.$product['id'])}}" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- card-product  end// -->
                    </div> <!-- col.// -->
                @endforeach
            @endisset
            </div> <!-- row.// -->
        </div> <!-- card-body end// -->
    </div> <!-- card end// -->
</section> <!-- content-main end// -->
@endsection
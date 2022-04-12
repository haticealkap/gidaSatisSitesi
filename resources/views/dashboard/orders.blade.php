@extends('dashboard.layouts.default')
@section('content')
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Şiparişler </h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div>
            <input type="text" placeholder="Search order ID" class="form-control bg-white">
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 me-auto">
                    <input type="text" placeholder="Search..." class="form-control">
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>Status</option>
                        <option>Active</option>
                        <option>Disabled</option>
                        <option>Show all</option>
                    </select>
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>Show 20</option>
                        <option>Show 30</option>
                        <option>Show 40</option>
                    </select>
                </div>
            </div>
        </header> <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th scope="col">İsim</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ürün Resmi</th>
                            <th scope="col">Ürün</th>
                            <th scope="col">Adet</th>
                            <th scope="col">Fiyat</th>
                            <th scope="col">Durum</th>
                            <th scope="col">Sipariş Tarihi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($orders)
                            @foreach ($orders as  $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td><b>{{$order->get_user->first_name.' '.$order->get_user->last_name}}</b></td>
                                <td>
                                    {{$order->get_user->email}}
                                </td>
                                <td>
                                   <img src="{{asset('public/images/'.$order->get_products[0]->image)}}" alt="" width="100">
                                </td>
                               
                                <td>
                                    {{$order->get_products[0]->name }} ₺
                                </td>
                                <td>
                                    {{$order->piece}} 
                                </td>
                                <td>
                                    {{$order->get_products[0]->promotion_price * $order->piece}} ₺
                                </td>
                                <td><a href="/admin/order/{{$order->id}}" title="durumunu değiştirmek için Tıklayınız" class="badge rounded-pill {{$order->status ? 'alert-success' : 'alert-danger'}}"> {{$order->status ? 'Onaylandı' : 'Beklemede'}}</a></td>
                                <td>{{$order->created_at}}</td>
                            </tr>
                            @endforeach
                        @endisset
                      
                    </tbody>
                </table>
            </div> <!-- table-responsive //end -->
        </div> <!-- card-body end// -->
    </div> <!-- card end// -->
</section> <!-- content-main end// -->
@endsection
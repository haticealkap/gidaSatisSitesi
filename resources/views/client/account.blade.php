@extends('client.layouts.default')
@section('content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href=" " rel="nofollow">Home</a>
            <span></span> Pages
            <span></span>
        </div>
    </div>
</div>
<section class="pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="col-md-4">
                        <div class="dashboard-menu">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Şiparişler</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/logout"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content dashboard-content">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Merhaba {{$user->first_name.' '.$user->last_name}} </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Hesabınız ile ilgili tüm işlemleri yandaki menü aracılığıyla yönetebilirsiniz</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Siparişleriniz</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Şipariş No</th>
                                                        <th>Tarih</th>
                                                        <th>Durumu</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($orders)
                                                    @if (count($orders) == 0)
                                                        Henüz Siparişiniz Bulunmamaktadır
                                                    @else
                                                    @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{rand(10000,200000).'-'.$order->id}}</td>
                                                        <td>{{$order->created_at}}</td>
                                                        <td>{{$order->status ? 'Onaylandı' : 'Beklemede'}}</td>
                                                        <td>{{$order->piece * $order->get_products[0]->promotion_price}} ₺</td>
                                                    </tr> 
                                                    @endforeach
                                                   
                                                    @endif
                                                   
                                                    @endisset
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                          
                            <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Hesap Detayları</h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" name="enq">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input required="" class="form-control square" name="name" value="{{$user->first_name}}" type="text" disabled >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input required="" class="form-control square" value="{{$user->last_name}}" name="phone" disabled>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input required="" class="form-control square" name="email" value="{{$user->email}}" type="email" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Adres1 <span class="required">*</span></label>
                                                    <input required="" class="form-control square" value="{{$user->state}}" name="phone" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Ülke <span class="required">*</span></label>
                                                    <input required="" class="form-control square" value="{{$user->country}}" name="phone" disabled>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Confirm Password <span class="required">*</span></label>
                                                    <input required="" class="form-control square" name="cpassword" type="password">
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill-out submit" name="submit" value="Submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
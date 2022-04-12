@extends('dashboard.layouts.default')
@section('content')
<section class="content-main">
    <div class="content-header">
        <h2 class="content-title">Kullanıcılar</h2>
        <div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
               @isset($users)
                   @foreach ($users as $user)
                   <div class="col">
                    <div class="card card-user">
                        <div class="card-header">
                            <img class="img-md img-avatar" src="{{asset('evara-backend/assets/imgs/people/avatar1.jpg')}}" alt="User pic">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mt-50">{{$user['first_name'].' '.$user['last_name']}}</h5>
                            <div class="card-text text-muted">
                                <p class="m-0">{{$user['type']}}</p>
                                <p><template class="__cf_email__" data-cfemail="cea3afbcb7f7fe8eabb6afa3bea2abe0ada1a3">[email&#160;protected]</template></p>
                                <a href="/admin/user/{{$user->id}}" class="btn btn-sm btn-brand rounded font-sm mt-15 {{$user['status'] ? 'bg-success' : 'bg-danger'}}">{{$user['status'] ? 'Aktif Hesap' : 'Dondurulmuş Hesap'}}</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- col.// -->
                   @endforeach
               @endisset
               
            </div> <!-- row.// -->
        </div> <!-- card-body end// -->
    </div> <!-- card end// -->
</section> <!-- content-main end// -->
@endsection
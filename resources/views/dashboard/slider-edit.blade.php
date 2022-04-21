@extends('dashboard.layouts.default')
@section('content')
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Slider Düzenleme</h4>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{url('/api/v1/slider/'.$slider['id'])}}">
                        @csrf
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Slider Başlık</label>
                            <input type="text" placeholder="Type here" value="{{$slider['title']}}" name="title" class="form-control" required >
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Alt Başlık</label>
                            <input type="text" placeholder="Type here" value="{{$slider['subtitle']}}" name="subtitle" class="form-control" required >
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Button Yazısı</label>
                            <input type="text" placeholder="Type here" value="{{$slider['button_text']}}" name="button_text" class="form-control" required >
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Button Linki</label>
                            <input type="text" placeholder="Type here" name="button_link"  class="form-control" required >
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Açıklama</label>
                            <textarea placeholder="Type here" class="form-control" name="content" required rows="4">{{$slider['content']}}</textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4>Mevcut Görsel</h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-upload">
                                        <img src="{{asset('images/'.$slider['image'])}}" alt="">
                                    </div>
                                </div>
                            </div> <!-- card end// -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4>Görsel</h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-upload">
                                        <img src="assets/imgs/theme/upload.svg" alt="">
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div>
                            </div> <!-- card end// -->
                        </div>
                        <button  type="submit" class="btn btn-md rounded font-sm hover-up">Ekle</button>

                    </form>
                    
                </div>
            </div> <!-- card end// -->
        </div>
    
    </div>
</section> <!-- content-main end// -->
@endsection
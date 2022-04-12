@extends('dashboard.layouts.default')
@section('content')
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Yeni Slider Ekleme</h2>
                <div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Slider</h4>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/api/v1/slider">
                        @csrf
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Slider Başlık</label>
                            <input type="text" placeholder="Type here" name="title" class="form-control" required >
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Alt Başlık</label>
                            <input type="text" placeholder="Type here" name="subtitle" class="form-control" required >
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Button Yazısı</label>
                            <input type="text" placeholder="Type here" name="button_text" class="form-control" required >
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Button Linki</label>
                            <input type="text" placeholder="Type here" name="button_link"  class="form-control" required >
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Açıklama</label>
                            <textarea placeholder="Type here" class="form-control" name="content" required rows="4"></textarea>
                        </div>
                        <div class="col-lg-12">
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
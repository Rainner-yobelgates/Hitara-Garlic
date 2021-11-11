@extends('admin.layouts.index')
@section('title', 'Setting')
@section('link')
<!-- SummerNote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@stop
@section('route')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Setting</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/backend-panel/setting">Setting</a></li>
            </ol>
        </div>
    </div>
</div>
@stop
@section('content')
@if(session('updatecontact'))
<script>
    iziToast.success({
        title: 'Success',
        message: "{{session('updatecontact')}}",
    });
</script>
@endif
@if(session('updatestore'))
<script>
    iziToast.success({
        title: 'Success',
        message: "{{session('updatestore')}}",
    });
</script>
@endif
@if(session('updatebanner'))
<script>
    iziToast.success({
        title: 'Success',
        message: "{{session('updatebanner')}}",
    });
</script>
@endif
@if(session('updatevideo'))
<script>
    iziToast.success({
        title: 'Success',
        message: "{{session('updatevideo')}}",
    });
</script>
@endif
@if(session('updateaboutgarlic'))
<script>
    iziToast.success({
        title: 'Success',
        message: "{{session('updateaboutgarlic')}}",
    });
</script>
@endif

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fas fa-images"></i> Banner</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="/img/banner/{{$banner->image}}" class="img-fluid img-thumbnail shadow mb-3" style="object-fit: cover; width: 70%; height: 250px; border-radius: 20px;" alt="">
                        </div>
                        <form action="/backend-panel/setbanner/{{$banner->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="ml-2">
                                    <label>Banner Image</label><br>
                                    @error('img') <div class="text-danger">{{$message}}</div>@enderror
                                    <input name="img" type="file">
                                    <p class="font-italic text-info m-0">Save To Change Image</p>
                                    <div class="my-2">
                                        <button class="btn btn-dark"><i class="fas fa-edit"></i> Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fab fa-youtube"></i> Youtube</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/backend-panel/setvideo/{{$video->id}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 ml-2">
                                    <label>Youtube Video</label><br>
                                    <input name="link" class="form-control" type="text" value="{{$video->link}}">
                                    @error('link') <div class="text-danger">{{$message}}</div>@enderror
                                    <p class="font-italic text-info m-0">Input your youtube video link</p>
                                    <p class="font-italic text-info m-0">Example: FD6b12v1JXc</p>
                                    <div class="my-2">
                                        <button class="btn btn-dark"><i class="fas fa-edit"></i> Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fas fa-globe"></i> About Black Garlic</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/backend-panel/about/garlic/{{$aboutgarlic->id}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Title Column 1</label>
                                    <input name="title1" class="form-control" type="text" value="{{$aboutgarlic->title1}}">
                                    @error('title1') <div class="text-danger">The title column 1 is required</div>@enderror

                                    <label>Description</label>
                                    <textarea class="summernote" name="description1">{{$aboutgarlic->description1}}</textarea>
                                    @error('description1') <div class="text-danger">The description column 1 is required</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Title Column 2</label>
                                    <input name="title2" class="form-control" type="text" value="{{$aboutgarlic->title2}}">
                                    @error('title2') <div class="text-danger">The title column 2 is required</div>@enderror

                                    <label>Description</label>
                                    <textarea class="summernote" name="description2">{{$aboutgarlic->description2}}</textarea>
                                    @error('description2') <div class="text-danger">The description column 2 is required</div>@enderror
                                </div>

                                <div class="m-2">
                                    <button class="btn btn-dark"><i class="fas fa-edit"></i> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fas fa-address-book"></i> Contact</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/backend-panel/setcontact/{{$contact->id}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Facebook</label>
                                    <input name="facebook" class="form-control" type="text" value="{{$contact->facebook}}">
                                    @error('facebook') <div class="text-danger">{{$message}}</div>@enderror

                                    <label>Instagram</label>
                                    <input name="instagram" class="form-control" type="text" value="{{$contact->instagram}}">
                                    @error('instagram') <div class="text-danger">{{$message}}</div>@enderror

                                    <label>Email</label>
                                    <input name="email" class="form-control" type="email" value="{{$contact->email}}">
                                    @error('email') <div class="text-danger">{{$message}}</div>@enderror
                                    <p class="font-italic text-info m-0">Input your social media link</p>

                                </div>
                                <div class="col-md-6">
                                    <label>Twitter</label>
                                    <input name="twitter" class="form-control" type="text" value="{{$contact->twitter}}">
                                    @error('twitter') <div class="text-danger">{{$message}}</div>@enderror

                                    <label>Whatsapp</label>
                                    <input name="whatsapp" class="form-control" type="text" value="{{$contact->whatsapp}}">
                                    @error('whatsapp') <div class="text-danger">{{$message}}</div>@enderror
                                    <p class="font-italic text-info m-0">example: 6287878000543</p>
                                </div>

                                <div class="m-2">
                                    <button class="btn btn-dark"><i class="fas fa-edit"></i> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fas fa-store"></i> Store</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/backend-panel/setstore/{{$store->id}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Shopee</label>
                                    <input name="shopee" class="form-control" type="text" value="{{$store->shopee}}">
                                    @error('shopee') <div class="text-danger">{{$message}}</div>@enderror

                                    <label>Tokopedia</label>
                                    <input name="tokopedia" class="form-control" type="text" value="{{$store->tokopedia}}">
                                    @error('tokopedia') <div class="text-danger">{{$message}}</div>@enderror
                                    <p class="font-italic text-info m-0">Input your market place link</p>

                                </div>
                                <div class="col-md-6">
                                    <label>Alibaba</label>
                                    <input name="alibaba" class="form-control" type="text" value="{{$store->alibaba}}">
                                    @error('alibaba') <div class="text-danger">{{$message}}</div>@enderror

                                    <label>Blibli</label>
                                    <input name="blibli" class="form-control" type="text" value="{{$store->blibli}}">
                                    @error('blibli') <div class="text-danger">{{$message}}</div>@enderror
                                </div>
                                <div class="m-2">
                                    <button class="btn btn-dark"><i class="fas fa-edit"></i> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
</section>
@stop
@section('script')
<!-- SummerNote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('.summernote').summernote({
        placeholder: 'Recipe Description',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['view', ['codeview', 'help']]
        ]
    });
</script>
@stop
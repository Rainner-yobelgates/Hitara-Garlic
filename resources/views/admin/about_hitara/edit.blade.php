@extends('admin.layouts.index')
@section('title', 'Edit About Hitara')
@section('link')
<!-- SummerNote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@stop
@section('route')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Recipe</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/backend-panel/about/hitara">About Hitara</a></li>
                <li class="breadcrumb-item active"><a href="#">Edit About Hitara</a></li>
            </ol>
        </div>
    </div>
</div>
@stop
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fas fa-edit"></i> Edit About Hitara</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/backend-panel/about/hitara/{{$aboutHitara->id}}/update" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Title About</label>
                                    <input name="title" class="form-control" type="text" value="{{$aboutHitara->title}}">
                                    @error('title') <div class="text-danger">{{$message}}</div>@enderror

                                </div>
                                <div class="col-md-6">
                                    <label>Image About</label>
                                    <input name="img" class="form-control-file" type="file">
                                    @error('img') <div class="text-danger">{{$message}}</div>@enderror
                                </div>
                                <div class="col-md-12">
                                    <Label>Description</Label>
                                    @error('description') <div class="text-danger">{{$message}}</div>@enderror
                                    <textarea id="summernote" name="description">{{$aboutHitara->description}}</textarea>
                                </div>
                                <div class="m-2">
                                    <button class="btn btn-dark"><i class="fas fa-edit"></i> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('script')
<!-- SummerNote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
      $('#summernote').summernote({
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
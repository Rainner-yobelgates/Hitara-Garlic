@extends('admin.layouts.index')
@section('title', 'Recipe')
@section('link')
<!-- SummerNote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<!-- DataTables -->
<link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@stop
@section('route')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Recipe</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/backend-panel/recipe">Recipe</a></li>
            </ol>
        </div>
    </div>
</div>
@stop
@section('content')
@if(session('add'))
<script>
    iziToast.success({
        title: 'Success',
        message: "{{session('add')}}",
    });
</script>
@endif
@if(session('delete'))
<script>
    iziToast.success({
        title: 'Success',
        message: "{{session('delete')}}",
    });
</script>
@endif
@if(session('update'))
<script>
    iziToast.success({
        title: 'Success',
        message: "{{session('update')}}",
    });
</script>
@endif

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fas fa-plus"></i> Add Recipe</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/backend-panel/postrecipe" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Recipe Name</label>
                                    <input name="name" placeholder="Recipe Name" class="form-control" type="text">
                                    @error('name') <div class="text-danger">{{$message}}</div>@enderror

                                </div>
                                <div class="col-md-6">
                                    <label>Recipe Image</label>
                                    <input name="img" class="form-control-file" type="file">
                                    @error('img') <div class="text-danger">{{$message}}</div>@enderror

                                </div>
                                <div class="col-md-12 mt-3">
                                    <Label>Description</Label>
                                    @error('description') <div class="text-danger">{{$message}}</div>@enderror
                                    <textarea id="summernote" name="description"></textarea>
                                </div>
                                <div class="m-2">
                                    <button class="btn btn-dark"><i class="fas fa-plus"></i> Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Recipe In Your Website</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recipes as $recipe)
                                <tr>
                                    <td>
                                        <img class="img-thumbnail" src="/img/recipe/{{$recipe->image}}" style="height: 70px; object-fit: cover;" alt="">
                                    </td>
                                    <td>{{Str::limit($recipe->name, '30', '')}}</td>
                                    <td>{!!Str::limit($recipe->description,'45', '')!!}</td>
                                    <td>
                                        <form method="post" action="/backend-panel/recipe/{{$recipe->id}}/delete">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger mb-1"><i class="fas fa-trash"></i> Delete</button>                                        
                                        </form>
                                        <a href="/backend-panel/recipe/{{$recipe->id}}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="/backend-panel/recipe/{{$recipe->id}}/detail" class="btn btn-info"><i class="fas fa-info-circle"></i> Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
<!-- DataTables  & Plugins -->
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin/plugins/jszip/jszip.min.js"></script>
<script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@stop
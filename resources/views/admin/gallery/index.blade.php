@extends('admin.layouts.index')
@section('title', 'Gallery')
@section('link')
<!-- DataTables -->
<link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@stop
@section('route')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Gallery</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/backend-panel/gallery">Gallery</a></li>
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
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fas fa-plus"></i> Add Image</h3><br>
                    </div>
                    <div class="card-body">
                        <form action="/backend-panel/postgallery" method="post" enctype="multipart/form-data">
                            @csrf
                            <input name="img" type="file">
                            @error('img') <div class="text-danger">{{$message}}</div>@enderror
                            <div class="mt-2">
                                <button class="btn btn-dark"><i class="fas fa-plus"></i> Add</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Image In Your Website</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>File Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($galleries as $gallery)
                                <tr>
                                    <td>
                                        <img class="img-thumbnail" src="/img/gallery/{{$gallery->image}}" style="height: 70px; object-fit: cover;" alt="">
                                    </td>
                                    <td>{{$gallery->image}}</td>
                                    <td>
                                        <form action="/backend-panel/gallery/{{$gallery->id}}/delete" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@stop
@section('script')
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
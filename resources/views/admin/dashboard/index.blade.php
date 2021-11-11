@extends('admin.layouts.index')
@section('title', 'Dashboard')
@section('route')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="">Dashboard</a></li>
            </ol>
        </div>
    </div>
</div>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$visitor}}</h3>

                        <p>Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion">
                            <ion-icon name="people-sharp"></ion-icon>
                        </i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$gallery}}</h3>

                        <p>Gallery</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-images"></i>
                    </div>
                    <a href="/backend-panel/gallery" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$recipe}}</h3>

                        <p>Recipe</p>
                    </div>
                    <div class="icon">
                        <i class="ion">
                            <ion-icon name="receipt-sharp"></ion-icon>
                        </i>
                    </div>
                    <a href="/backend-panel/recipe" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3>{{$contactUs}}</h3>

                        <p>Inbox</p>
                    </div>
                    <div class="icon">
                        <i class="ion">
                            <ion-icon name="mail-sharp"></ion-icon>
                        </i>
                    </div>
                    <a href="/backend-panel/contactUs" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <canvas id="myChart" width="400" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@stop
@section('script')
<!-- ChartJS -->
<script src="/admin/plugins/chartjs/dist/chart.min.js"></script>
  @include('admin.parts.chart')
@stop
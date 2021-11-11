@extends('admin.layouts.index')
@section('title', 'Detail Event')
@section('route')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Detail Event</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/backend-panel/event">Event</a></li>
                <li class="breadcrumb-item active"><a href="#">Detail Event</a></li>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid shadow img-thumbnail" src="/img/event/{{$event->image}}" style="border-radius: 25px; height: 450px; object-fit: cover;" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-bold">{{Str::limit($event->name, '50', '')}}</h3>
                                <hr>
                                <h5>{!!$event->description!!}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
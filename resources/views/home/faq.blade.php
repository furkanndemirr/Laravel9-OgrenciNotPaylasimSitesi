@extends('layouts.frontbase')

@section('title' , 'Frequently Asked Questions ' . $setting->title)
@section('description' ,$setting->description)
@section('keywords' ,$setting->keywords)
@section('icon' , Storage::url($setting->icon))
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Frequently Asked Questions</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="{{route('home')}}">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Frequently Asked Questions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
<!-- About Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                <h3 class="text-primary font-weight-normal text-uppercase mb-3" ><font color="black">Frequently Asked Questions</h3>
<br>
                <div id="accordion">
                    @foreach($datalist as $rs)
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">{{$rs->question}}</a>
                            </div>
                            <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                <div class="card-body">
                                    <p>{!! $rs->answer !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection


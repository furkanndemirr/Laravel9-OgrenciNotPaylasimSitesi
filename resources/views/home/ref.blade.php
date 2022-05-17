@extends('layouts.frontbase')

@section('title' , 'References ' . $setting->title)
@section('description' ,$setting->description)
@section('keywords' ,$setting->keywords)
@section('icon' , Storage::url($setting->icon))


@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">References</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="{{route('home')}}">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="{{route('references')}}">References</a>
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
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn References</h6>
                <h1 class="mb-4 section-title">{!! $setting->references !!}</h1>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection

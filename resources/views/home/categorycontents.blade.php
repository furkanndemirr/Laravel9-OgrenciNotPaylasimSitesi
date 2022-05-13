@extends('layouts.frontbase')

@section('title' ,$category->title .  ' Contents')


@section('content')
    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h1 class="mb-4">Our Contents</h1>
                </div>
            </div>
            <div class="row pb-3">@foreach($contents as $rs)
                <div class="col-md-4 mb-4">

                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="{{Storage::url($rs->image)}}" alt="" style="width: 350px;height: 275px">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href="{{route('content',['id'=>$rs->id])}}"><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">{{$rs->course_name}}</h5>
                            </div>
                            <p>{{$rs->description}}</p>

                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection

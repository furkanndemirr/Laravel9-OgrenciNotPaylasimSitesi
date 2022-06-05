@extends('layouts.frontbase')

@section('title' , 'User Comments & Reviews')


@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase" style="font-size: 40px">User Comment</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="{{route('home')}}">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">User Comment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <!-- Contact Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex flex-column  bg-primary p-3"><br>
                        <h4 style="text-align: center;font-size: 25px">User Menu</h4><br>
                        @include('home.user.usermenu')
                    </div>

                </div>
                <div class="col-lg-9 mb-5 my-lg-5 py-0 pl-lg-5">

                    <div class="contact-form">
                        <div class="col-lg-12">
                            <div class="d-flex flex-column">
                                <h4 style="text-align: center;font-size: 25px">User Comments & Reviews</h4><br>

                            </div>
                        <div>
                            <table class="table mb-none">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Content</th>
                                    <th>Subject</th>
                                    <th>Reviews</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td><a href="{{route('content',['id'=>$rs->content_id])}}">{{$rs->content->title}}</td>

                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>


                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-danger" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>


                                    </tr>

                                @endforeach
                            </table>
                        </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection

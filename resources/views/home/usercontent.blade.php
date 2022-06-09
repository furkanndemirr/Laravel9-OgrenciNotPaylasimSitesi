@extends('layouts.frontbase')

@section('title' , 'User Content')


@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">User Content</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="{{route('home')}}">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="{{route('references')}}">User Content</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
<!-- About Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex flex-column  bg-primary p-3"><br>
                        <h4 style="text-align: center;font-size: 25px">User Menu</h4><br>
                        @include('home.user.usermenu')
                    </div>

                </div>
            <div class="col-lg-9 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">User Content</h6>

                        &nbsp&nbsp&nbsp
                        <button type="button" class="mb-xs mt-xs mr-xs btn btn-light" style="width: 200px;"><a href="{{route('usercontent.create')}}">Add Content</a></button>

                    <!-- start: page -->
                    <div class="col-md-12">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table mb-none">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">Id</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>School Name</th>
                                            <th>Course Name</th>
                                            <th>Image</th>
                                            <th>Image Gallery</th>
                                            <th>File</th>
                                            <th>Status</th>
                                            <th style="width: 40px">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>

                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->school_name}}</td>
                                                <td>{{$rs->course_name}}</td>

                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('userimage.index',['cid'=>$rs->id])}}"
                                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100 height=700')">
                                                        <img src="{{asset('assets')}}/images/galleryicon.jpg" style="width: 50px"></a>
                                                </td>
                                                <td>@if($rs->file)
                                                        <img src="{{Storage::url('pdf1.png')}}" style="height:50px">

                                                    @endif</td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('usercontent.destroy',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-danger" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>

                                            </tr>

                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- end: page -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection

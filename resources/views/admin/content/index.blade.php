@extends('layouts.adminbase')
@section('title' ,'Content List')

@section('content')

    <section role="main" class="content-body">

        <header class="page-header">

            &nbsp&nbsp&nbsp
            <button type="button" class="mb-xs mt-xs mr-xs btn btn-default" style="width: 200px;"><a href="{{route('admin.content.create')}}">Add Content</a></button>
            <div class="right-wrapper pull-right">

                <ol class="breadcrumbs">

                    <li>

                        <a href="{{route('admin.index')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Content List</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Content List</h2>
                </header>
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
                                <th>File</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->school_name}}</td>
                                    <td>{{$rs->course_name}}</td>

                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td>@if($rs->file)
                                            <img src="{{Storage::url('pdf1.png')}}" style="height:50px">

                                        @endif</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.content.edit',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-info">Edit</a></td>
                                    <td><a href="{{route('admin.content.destroy',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-danger" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                    <td><a href="{{route('admin.content.show',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-success">Show</a></td>


                                </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <!-- end: page -->
    </section>
@endsection

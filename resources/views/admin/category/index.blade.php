@extends('layouts.adminbase')
@section('title' ,'Category List')

@section('content')

    <section role="main" class="content-body">

        <header class="page-header">

            &nbsp&nbsp&nbsp
            <button type="button" class="mb-xs mt-xs mr-xs btn btn-default" style="width: 200px;"><a href="{{route('admin.category.create')}}">Add Category</a></button>
            <div class="right-wrapper pull-right">

                <ol class="breadcrumbs">

                    <li>

                        <a href="{{route('admin.index')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Category List</span></li>
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

                    <h2 class="panel-title">Category List</h2>
                </header>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table mb-none">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Image</th>
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
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-info">Edit</a></td>
                                    <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-danger" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                    <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-success">Show</a></td>


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

@extends('layouts.adminbase')
@section('title' ,'Comment & Reviews List')

@section('content')

    <section role="main" class="content-body">

        <header class="page-header">

            &nbsp&nbsp&nbsp
            <div class="right-wrapper pull-right">

                <ol class="breadcrumbs">

                    <li>

                        <a href="{{route('admin.index')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Comment List</span></li>
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

                    <h2 class="panel-title">Comment List</h2>
                </header>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table mb-none">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Name</th>
                                <th>Content</th>
                                <th>Subject</th>
                                <th>Reviews</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th style="width: 40px">Show</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('admin.content.show',['id'=>$rs->content_id])}}">{{$rs->content->title}}</td>
                                    <td>{{$rs->user->name}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>


                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-success" onclick="return !window.open(this.href, '','top=50 left=100 width=1100 height=700')">Show</a></td>
                                    <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-danger" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>


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

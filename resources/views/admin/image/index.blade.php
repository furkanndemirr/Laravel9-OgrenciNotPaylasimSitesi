@extends('layouts.adminwindow')
@section('title' ,'Content Image Gallery')

@section('content')

<h3>{{$content->title}}</h3>
    <form class="form-horizontal form-bordered" method="post" action="{{route('admin.image.store',['cid'=>$content->id])}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label class="col-md-3 control-label" for="inputDefault">Title</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="title">
            </div>

            <div  class="col-md-3">
                <input type="file" class="form-control" name="image">

            </div>
            <div class="col-md-3" >

                <input style="height :32px" type="submit" value="Upload">
            </div>
        </div>

<br><br>
    </form>
    <!-- start: page -->
                <header class="panel-heading">
                    <h2 class="panel-title">Content Image List</h2>
                </header>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table mb-none">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th style="width: 40px">Update</th>
                                <th style="width: 40px">Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.destroy',['cid'=>$content->id,'id'=>$rs->id])}}" class="mb-xs mt-xs mr-xs btn btn-danger" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
        <!-- end: page -->

@endsection

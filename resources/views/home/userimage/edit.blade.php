@extends('layouts.adminbase')
@section('title' ,'Edit Category : '.$data->title)

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit Category : {{$data->title}}</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{route('admin.index')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Edit Category</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <!-- start: page -->

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Category Elements</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered" method="post" action="{{route('admin.category.update',['id'=>$data->id])}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Parent Category</label>
                        <div class="col-md-6">
                            <select  class="form-control" name="parent_id">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if($rs->id==$data->parent_id) selected="selected" @endif>
                                        {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Title</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" value="{{$data->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Keywords</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Description</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="description" value="{{$data->description}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Image</label>

                        <div  class="col-md-6">
                            <input class="form-control" type="file" name="image" value="{{$data->image}}">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Status</label>
                        <div class="col-md-6">
                            <select class="form-control" name="status">
                                <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-5 control-label" for="inputDefault"></label>

                        <div class="col-md-6">
                            <input type="submit"  value="Update Data">
                        </div>
                    </div>


                </form>
            </div>
        </section>


        <!-- end: page -->


    </section>
@endsection

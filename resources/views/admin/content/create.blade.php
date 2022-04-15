@extends('layouts.adminbase')
@section('title' ,'Add Content')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Content</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{route('admin.index')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Add Content</span></li>
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

                <h2 class="panel-title">Content Elements</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered" method="post" action="{{route('admin.content.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Parent Content</label>
                        <div class="col-md-6">
                        <select  class="form-control" name="category_id">

                            @foreach($data as $rs)
                                <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Title</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Keywords</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="keywords">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Description</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="description">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">School Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="school_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Course Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="course_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Detail</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="detail">
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Image</label>

                        <div  class="col-md-6">
                            <input type="file" class="form-control" name="image">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">File</label>

                        <div  class="col-md-6">
                            <input type="file" class="form-control" name="file">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Status</label>
                        <div class="col-md-6">
                            <select  class="form-control" name="status">
                            <option>True</option>
                            <option>False</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group" >
                        <label class="col-md-5 control-label" for="inputDefault" ></label>

                        <div class="col-md-3" >

                            <input style="width: 90px" type="submit" class="mb-xs mt-xs mr-xs btn btn-success" value="SAVE">
                        </div>
                    </div>


                </form>
            </div>
        </section>


        <!-- end: page -->


    </section>
@endsection

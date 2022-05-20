@extends('layouts.adminbase')
@section('title' ,'Edit FAQ : '.$data->id)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit FAQ : {{$data->title}}</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{route('admin.index')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Edit FAQ</span></li>
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

                <h2 class="panel-title">FAQ Elements</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered" method="post" action="{{route('admin.faq.update',['id'=>$data->id])}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Question</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="question" value="{{$data->question}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Answer</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="answer" name="answer">
                                {{$data->answer}}
                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
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

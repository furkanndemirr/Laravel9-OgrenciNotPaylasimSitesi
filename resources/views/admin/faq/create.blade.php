@extends('layouts.adminbase')
@section('title' ,'Add FAQ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add FAQ</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{route('admin.index')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Add FAQ</span></li>
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
                <form class="form-horizontal form-bordered" method="post" action="{{route('admin.faq.store')}}" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Question</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="question" placeholder="Question">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Answer</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="answer" name="answer">
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


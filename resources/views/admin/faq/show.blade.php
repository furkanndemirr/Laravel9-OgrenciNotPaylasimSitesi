@extends('layouts.adminbase')
@section('title' ,'Show FAQ: '.$data->id)

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            &nbsp;
            <button type="button" class="mb-xs mt-xs mr-xs btn btn-default" style="width: 200px;"><a href="{{route('admin.faq.edit',['id'=>$data->id])}}">Edit</a></button>&nbsp;&nbsp;&nbsp;
            <button type="button" class="mb-xs mt-xs mr-xs btn btn-default" onclick="return confirm('Deleting !! Are you sure?')" style="width: 200px;"><a href="{{route('admin.faq.destroy',['id'=>$data->id])}}">Delete</a></button>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{route('admin.index')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Show FAQ</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <!-- start: page -->

        <section class="panel">

            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">FAQ Data</h2>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped mb-none">
                                <tr>
                                    <th>Id</th>
                                    <th>{{$data->id}}</th>
                                </tr>
                                <tr>
                                    <th>Question</th>
                                    <th>{{$data->question}}</th>
                                </tr>
                                <tr>
                                    <th>Answer</th>
                                    <th>{!!$data->answer!!}</th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>{{$data->status}}</th>
                                </tr>
                                <tr>
                                    <th>Created_at</th>
                                    <th>{{$data->created_at}}</th>
                                </tr>
                                <tr>
                                    <th>Updated_at</th>
                                    <th>{{$data->updated_at}}</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </section>


        <!-- end: page -->


    </section>
@endsection

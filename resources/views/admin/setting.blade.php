@extends('layouts.adminbase')
@section('title' ,'Settings')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"></link>
@endsection
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Settings</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/admin">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Settings</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <form class="form-horizontal form-bordered" method="post" action="{{route('admin.setting.update')}}" enctype="multipart/form-data">
            @csrf
        <div class="col-md-12">
            <div class="tabs tabs-primary">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#popular1" data-toggle="tab" aria-expanded="false"> General</a>
                    </li>
                    <li>
                        <a href="#recent1" data-toggle="tab" aria-expanded="true">Smtp Email</a>
                    </li>
                    <li>
                        <a href="#recent2" data-toggle="tab" aria-expanded="true">Social Media</a>
                    </li>
                    <li>
                        <a href="#recent3" data-toggle="tab" aria-expanded="true">About Us</a>
                    </li>
                    <li>
                        <a href="#recent4" data-toggle="tab" aria-expanded="true">Concact Page</a>
                    </li>
                    <li>
                        <a href="#recent5" data-toggle="tab" aria-expanded="true">References</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="popular1" class="tab-pane active">
                        <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>

                            <br><br>

                            <label class="col-md-3 control-label" for="inputDefault">Keywords</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>

                            <br><br>

                            <label class="col-md-3 control-label" for="inputDefault">Description</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Company</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company" value="{{$data->company}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" value="{{$data->address}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">E-mail</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" value="{{$data->email}}">
                            </div>
                            <br><br>
                                <label class="col-md-3 control-label" for="inputDefault">Status</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Icon</label>

                            <div  class="col-md-6">
                                <input class="form-control" type="file" name="icon" value="{{$data->icon}}">

                            </div>

                        </div>

                    </div>

                    <div id="recent1" class="tab-pane">
                        <div class="form-group">

                            <label class="col-md-3 control-label" for="inputDefault">Smtp Server</label>
                            <div  class="col-md-6">
                                <input class="form-control" type="text" name="smtpserver" value="{{$data->smtpserver}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Smtp Email</label>
                            <div  class="col-md-6">
                                <input class="form-control" type="text" name="smtpemail" value="{{$data->smtpemail}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Smtp Password</label>
                            <div  class="col-md-6">
                                <input class="form-control" type="password" name="smtppassword" value="{{$data->smtppassword}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Smtp Port</label>
                            <div  class="col-md-6">
                                <input class="form-control" type="number" name="smtpport" value="{{$data->smtpport}}">
                            </div>
                        </div>
                    </div>

                    <div id="recent2" class="tab-pane">
                        <div class="form-group">

                            <label class="col-md-3 control-label" for="inputDefault">Fax</label>
                            <div  class="col-md-6">
                                <input class="form-control" type="text" name="fax" value="{{$data->fax}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Facebook</label>
                            <div  class="col-md-6">
                                <input class="form-control" type="text" name="facebook" value="{{$data->facebook}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Instagram</label>
                            <div  class="col-md-6">
                                <input class="form-control" type="text" name="instagram" value="{{$data->instagram}}">
                            </div>
                            <br><br>
                            <label class="col-md-3 control-label" for="inputDefault">Twitter</label>
                            <div  class="col-md-6">
                                <input class="form-control" type="text" name="twitter" value="{{$data->twitter}}">
                            </div>
                        </div>
                    </div>

                    <div id="recent3" class="tab-pane">
                        <div class="form-group">

                            <label class="col-md-1 control-label" for="inputDefault">About_Us</label>
                            <div  class="col-md-12">
                                <textarea class="form-control" id="aboutus" name="aboutus" value="{{$data->aboutus}}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="recent4" class="tab-pane">
                        <div class="form-group">

                            <label class="col-md-1 control-label" for="inputDefault">Contact</label>
                            <div  class="col-md-12">
                                <textarea class="form-control" id="contact" name="contact" value="{{$data->contact}}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="recent5" class="tab-pane">
                        <div class="form-group">

                            <label class="col-md-1 control-label" for="inputDefault">References</label>
                            <div  class="col-md-12">
                                <textarea class="form-control" id="references" name="references" value="{{$data->references}}"></textarea>
                            </div>
                            <br>
                            <script>
                                $(document).ready(function(){
                                    $('#aboutus').summernote();
                                    $('#contact').summernote();
                                    $('#references').summernote();
                                });
                            </script>


                        </div>



                    </div>
                    <br>
                    <div class="form-group">

                        <label class="col-md-5 control-label" for="inputDefault"></label>

                        <div class="col-md-6">
                            <input type="submit"  value="Update Setting">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- end: page -->
    </section>
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js">
    </script>

    <script>
        $(document).ready (function ()
        {
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        });
    </script>
@endsection

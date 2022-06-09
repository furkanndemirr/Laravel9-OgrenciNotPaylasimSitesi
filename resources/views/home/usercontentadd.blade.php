@extends('layouts.frontbase')

@section('title' , 'User Content Add')
@section('head1')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">User Content Add</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="{{route('home')}}">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="{{route('references')}}">User Content Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
<!-- About Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">User Content</h6>
                <form class="form-horizontal form-bordered" method="post" action="{{route('usercontent.store')}}" enctype="multipart/form-data">
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
                        <div class="col-md-6">
                            <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
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
                            <textarea class="form-control" id="detail" name="detail">
                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#detail' ) )
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
                    <div class="form-group" >
                        <label class="col-md-5 control-label" for="inputDefault" ></label>

                        <div class="col-md-3" >

                            <input style="width: 90px" type="submit" class="mb-xs mt-xs mr-xs btn btn-success" value="SAVE">
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection

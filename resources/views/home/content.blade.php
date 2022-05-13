@extends('layouts.frontbase')

@section('title' ,$data->title)


@section('content')
    <!-- Detail Start -->

    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">

                    <h1 class="mb-4 section-title">{{$data->title}}</h1>
                </div>

                <div class="mb-5">
                    <img class="img-fluid mb-4"  src="{{Storage::url($data->image)}}" alt="Image" style="height: 500px;width: 500px;margin-left: 300px ">
                    <p><b><u>Açıklama :</u></b></p>
                    {{$data->description}}<br><br><br>
                    <div class="mb-5 mx-n3">
                        <h3 class="mb-4 ml-3 section-title">Image Gallery</h3><br>
                        <div class="owl-carousel service-carousel position-relative"  style="margin-left: 190px ">
                            @foreach($images as $rs)
                    <div class="card border-0 mx-3">

                        <img class="card-img-top" src="{{Storage::url($rs->image)}}" alt="" style="height: 300px;width: 349px; " >
                        <div class="card-body bg-light p-4" style="text-align: center">
                            <p><b>{{$rs->title}}</b></p>
                        </div>

                    </div>@endforeach
                        </div></div>
                    <b><u>Detay :</u></b><br><br>
                    <p>{!!$data->detail!!}</p>
                    <p></p>

                </div>



                <div class="mb-5">
                    <h3 class="mb-4 section-title">3 Comments</h3>
                    <div class="media mb-4">
                        <img src="{{asset('assets')}}/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <img src="{{asset('assets')}}/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                            <div class="media mt-4">
                                <img src="{{asset('assets')}}/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-light p-5">
                    <h3 class="mb-4 section-title">Leave a comment</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <!-- Detail End -->
@endsection



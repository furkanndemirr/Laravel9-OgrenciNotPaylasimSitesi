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
                    <img class="img-fluid mb-4"  src="{{Storage::url($data->image)}}" alt="Image" style="height: 300px;width: 500px;margin-left: 300px ">
                    <p><b><u>Açıklama :</u></b></p>
                    {{$data->description}}<br><br><br>
                    <div class="mb-5 mx-n3">
                        <h3 class="mb-4 ml-3 section-title">Notes</h3>
                        <div class="row mx-1 portfolio-container">
                            @foreach($images as $rs)
                                <div class="col-lg-4 col-md-6 col-sm-12 p-2 portfolio-item first">
                                    <div class="position-relative overflow-hidden">
                                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                                            <img class="img-fluid" src="{{Storage::url($rs->image)}}" style="height: 300px; width: 400px">
                                        </div>
                                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                            <h4 class="text-white mb-4">{{$rs->title}}</h4>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <a class="btn btn-outline-primary m-1"  href="{{route('content',['id'=>$rs->id])}}">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                                <a class="btn btn-outline-primary m-1" href="{{Storage::url($rs->image)}}  " data-lightbox="portfolio">
                                                    <i class="fa fa-eye" ></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                    @if($data->file!=null)
                        <img src="{{Storage::url('pdf1.png')}}" style="height:50px">
                        <a class="btn btn-action" href="{{Storage::url($data->file)}} " onclick="return !window.open(this.href, '','top=50 left=100 width=1100 height=700')">
                            <i class="fa fa-download"></i>
                            İndirme işlemini başlat
                        </a>
                    @endif

                    @if($data->detail!=null)
                    <b><u>Detay :</u></b><br><br>
                    <p>{!!$data->detail!!}</p>
                    @endif

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



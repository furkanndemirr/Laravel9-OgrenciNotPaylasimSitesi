@extends('layouts.frontbase')

@section('title' ,$data->title)


@section('content')
    <!-- Detail Start -->

    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                @include('home.messages')
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
                    <h3 class="mb-4 section-title">Comments</h3>
                    @foreach($reviews as $rs)
                        <div class="media mb-4">
                            <div class="media-body">
                                <div>
                                    <h5><i class="fa fa-user-md"></i> {{$rs->user->name}} <small>{{$rs->created_at}}</small></h5>
                                </div>
                            @for($i=1;$i<=$rs->rate ;$i++)
                                <i class="fa fa-star"></i>
                                @endfor

                                <h5>{{$rs->subject}}</h5>
                                <p>{{$rs->review}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="bg-light p-5">

                    <h3 class="mb-4 section-title">Leave a comment</h3>
                    <form action="{{route('storecomment')}}" method="post">
                        @csrf
                        <input type="hidden" class="input" name="content_id" value="{{$data->id}}">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" class="form-control" id="name" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label>Review *</label>
                            <textarea type="text" class="form-control" id="email" name="review" placeholder="Your review"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Rate *</label>

                                <select class="form-control" name="rate">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>


                        </div>

                        <div class="form-group mb-0">
                            @auth
                            <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                            @else
                            <a href="/login" class="btn btn-primary px-3">For Submit Your Review, Please Login</a>
                            @endauth
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <!-- Detail End -->
@endsection



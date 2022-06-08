<!-- Projects Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Contents</h6>
                <h1 class="mb-4">Some Of Our Awesome Contents</h1>
            </div>
        </div>

        <div class="row mx-1 portfolio-container">
            @foreach($contentlist1 as $rs)
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="{{Storage::url($rs->image)}}" style="height: 300px; width: 400px">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">{{$rs->title}}</h4>
                        @php
                            $average=$rs->comment->average('rate');
                        @endphp

                        <div>
                            @for($i=1;$i<=$average ;$i++)
                                <i style='font-size:17px' class='fas'>&#xf005;</i>
                            @endfor
                            @for($i=$average;$i<5;$i++)
                                <i style='font-size:17px' class='far'>&#xf005;</i>
                            @endfor
                                {{$rs->comment->count('id')}}
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1"  href="{{route('content',['id'=>$rs->id])}}">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="btn btn-outline-primary m-1" href="{{Storage::url($rs->image)}} " data-lightbox="portfolio">
                                <i class="fa fa-eye" ></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Projects End -->


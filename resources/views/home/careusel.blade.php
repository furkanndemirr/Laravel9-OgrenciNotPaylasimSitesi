<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('assets')}}/images/anaslider.jpg" alt="Image" style="width: 1000px;height: 350px">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 800px;">
                        <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                        <h3 class="display-3 text-white mb-md-4">NOTLAR</h3>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                    </div>
                </div>
            </div>

            @foreach($sliderdata as $rs)
            <div class="carousel-item ">
                <img class="w-100" src="{{Storage::url($rs->image)}}" alt="Image" style="width: 1000px;height: 350px">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 800px;">
                        <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                        <h3 class="display-3 text-white mb-md-4">{{$rs->title}}</h3>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


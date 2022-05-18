@extends('layouts.frontbase')

@section('title' , 'Contact ' . $setting->title)
@section('description' ,$setting->description)
@section('keywords' ,$setting->keywords)
@section('icon' , Storage::url($setting->icon))


@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Contact Us</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <!-- Contact Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column  bg-primary h-100 p-5">
                        <h4 style="text-align: center">Contact Information</h4>

                            {!! $setting->contact !!}


                    </div>

                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-0 pl-lg-5">

                    <div class="contact-form">
                        <div class="col-lg-5">
                            <div class="d-flex flex-column">
                                <h4 style="text-align: center">Contact Form</h4>

                            </div>

                        </div>
                        <br>
                        @include('home.messages')
                        <br>

                        <form action="{{route("storemessage")}}" method="post">
                           @csrf
                            <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Name & Surname" name="name" required="required" data-validation-required-message="Please enter your name">

                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control p-4" placeholder="Phone Number" name="phone" required="required" data-validation-required-message="Please enter your phone">

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Email" name="email" required="required" data-validation-required-message="Please enter a email">

                            </div>
                            <div class="form-group">
                                <input class="form-control p-4" rows="6" placeholder="Subject" name="subject" required="required" data-validation-required-message="Please enter your subject">

                            </div>
                            <div class="form-group">
                                <textarea class="form-control p-4" rows="6"  name="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter your message"></textarea>

                            </div>
                            <div style="margin-left:200px">
                                <button class="btn btn-primary py-3 px-5" type="submit" >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection

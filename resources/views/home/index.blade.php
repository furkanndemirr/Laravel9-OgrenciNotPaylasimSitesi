@extends('layouts.frontbase')

@section('title' ,'NOT PAYLASİM')

@section('slider')
    @include('home.careusel')
@endsection

@section('content')
    @include('home.about')
    @include('home.service')
    @include('home.features')
    @include('home.projects')
    @include('home.team')
    @include('home.testimonial')
    @include('home.blog')
@endsection



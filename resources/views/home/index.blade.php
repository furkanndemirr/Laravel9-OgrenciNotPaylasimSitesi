@extends('layouts.frontbase')

@section('title' ,$setting->title)
@section('description' ,$setting->description)
@section('keywords' ,$setting->keywords)
@section('icon' , Storage::url($setting->icon))

@section('slider')
    @include('home.careusel')
@endsection

@section('content')
    @include('home.projects')
@endsection



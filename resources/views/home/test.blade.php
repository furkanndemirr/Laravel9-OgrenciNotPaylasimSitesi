@extends('layouts.mainlayout')

@section('title', 'TEST LAYOUT PAGE')

@section('header')
    <p>HEADERdas.</p>
@endsection

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar2.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

@extends('layouts.mainlayout')

@section('title', 'TEST LAYOUT PAGE')

@section('header')
    <p>HEADER.</p>
@endsection

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar2.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

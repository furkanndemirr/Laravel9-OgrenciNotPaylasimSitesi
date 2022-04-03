//masterpage
@extends('layouts.frontbase')

@section('title', 'TITLE FROM SUB FILE')


@section('sidebar')
    @parent

    <p>This is appended from sub file</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

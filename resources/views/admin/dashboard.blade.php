@extends('admin.layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{ url('admin') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Blank</span>
        </h2>
    </div>
    <!--//banner-->
    <!--faq-->
    <div class="blank">


        <div class="blank-page">
            <h1>{{ $admin->user()->name }}</h1>
        </div>
    </div>

    <!--//faq-->
    <!---->
    <div class="copy">
        <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
    </div>
@stop
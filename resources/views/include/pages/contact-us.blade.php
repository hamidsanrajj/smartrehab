@extends('../../include/layout/master')

@section('title','- Contact Us')

@section('content')

<div style="padding-top: 200px;">
    <div class="container">
        @include('../../include/backbtn')
        <div class="row">
        @include('../../include/contact-us')
        </div>
    </div>
</div>


    <div class="container" style="display: none;">
        <div class="row">
            <h1 style="margin-top: 200px;">Contact Us</h1>
            <h4 style="margin-top: 50px;">Phone: +923277860111</h4>
            <h4>Address: E11/4 Markaz Islamabad</h4></a>
            <h4 style="margin-bottom: 50px;">Email: info@sms.com</h4>
        </div>
    </div>

@stop
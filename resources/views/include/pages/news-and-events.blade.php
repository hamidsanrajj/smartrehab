@extends('../../include/layout/master')

@section('title','- News & Events')

@section('content')


<div style="padding-top: 200px;">
    <div class="container">
        @include('../../include/backbtn')
        <div class="row">
        @include('../../include/news')
        </div>
    </div>
</div>


@stop
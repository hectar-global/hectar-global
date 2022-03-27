@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


 <!-- wrapper  -->	
 <div id="wrapper">
    <!-- content -->	
    <div class="content">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md-3">Variant: {{$variant}}</div>
        <div class="col-md-3">Type: {{$type}}</div>
        <div class="col-md-3">Quality: {{$quality}}</div>
        <div class="col-md-3">Packaging: {{$packaging}}</div>
    </div>
    <div class="row">
        <div class="col-md-3">Country: {{$country}}</div>
        <div class="col-md-3">Port: {{$port}}</div>
        <div class="col-md-3">Loadability: {{$loada}}</div>
        <div class="col-md-3">Quantity: {{$quantity}}</div>
    </div>
    </div>
    <!-- content end -->
 </div>
 <!-- wrapper end -->


@stop
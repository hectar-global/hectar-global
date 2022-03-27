@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


 <!-- wrapper  -->	
 <div id="wrapper">
    <!-- content -->	
    <div class="content">
        <div class="breadcrumbs fw-breadcrumbs top-smpar smpar fl-wrap">
            <div class="container">
                <div class="breadcrumbs-list">
                    <a href="#">Home</a><a href="#">Products</a><span>{{$product->name}}</span>
                </div>
                <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                <div class="show-more-snopt-tooltip">
                    <a href="#sec15" class="custom-scroll-link"> <i class="fas fa-comment-alt"></i> Contact Support</a>
                    <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                </div>
               
               
                <div class="like-btn"><i class="fas fa-weight"></i>Mandi Price List</div>
            </div>
        </div>
        <div class="gray-bg small-padding fl-wrap ">
            <div class="container">
                <div class="row">
                    <!--  listing-single content -->
                    <div class="col-md-8">
                        <div class=" fl-wrap">
                            <!--  list-single-header-item-->
                            <div class="list-single-header-item  fl-wrap "">
                            <form method="post"  action="{{url('/generate-quote/'.request()->route()->prod_id)}}" name="mortgage-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8" style="padding-bottom: 15px;">
                                        Step - 2/2 | Enter details to generate your quote
                                    </div>
                                </div>
                                <div class="row" style="padding-bottom: 10px;">
                                    <div class="col-md-4">
                                            <label for="country">Select Country </label>   
                                            <select name="country" id="country" data-placeholder="" class="chosen-select on-radius no-search-select" style="margin-bottom:8px;" >
                                                <option value="">Select</option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                
                                                @endforeach  
                                            </select>  
                                    </div>
                                    <div class="col-md-4">
                                        <label for="port">Select Port </label>   
                                        <select name="port" id="port" class="" style="margin-bottom:8px;" >
                                            
                                            {{-- @foreach($ports as $port)
                                                    <option value="{{$port->id}}">{{$port->name}}</option>
                                                
                                                @endforeach   --}}
                                        </select>  
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                            <label for="loada">Select Loadability</label>   
                                            <select name="loada" data-placeholder="" class="chosen-select on-radius no-search-select" style="margin-bottom:8px;" >
                                                @foreach($product->freight as $freight)
                                                    <option value="{{$freight->id}}">{{$freight->container}}</option>
                                                
                                                @endforeach  
                                            </select>  
                                    </div>
                                    <div class="col-md-4">
                                        <label for="quantity">Quantity</label>   
                                        <select name="quantity" data-placeholder="" class="chosen-select on-radius no-search-select" style="margin-bottom:8px;" >
                                            {{-- @foreach($product->freight as $freight)
                                                <option value="{{$freight->id}}">{{$freight->volume}}</option>
                                            @endforeach   --}}
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>  
                                    </div>
                                </div>

                                <div><button type="submit" id="sbt" class="color2-bg">Generate Quote</button></div>
                                <input type="hidden" name="variant" value="{{$variant}}">
                                <input type="hidden" name="type" value="{{$type}}">
                                <input type="hidden" name="quality" value="{{$quality}}">
                                <input type="hidden" name="packaging" value="{{$packaging}}">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div> 
    
    
@stop




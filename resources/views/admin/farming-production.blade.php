



{{-- @extends('layout.admin.adminmain') --}}

{{-- @extends('layout.admin.admin-main-home') --}}
@extends('layout.admin.product-dashboard-main')


@section('title', 'Amar Asom')

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active">{{$product->name}}</li>
          </ol>
        </div><!-- /.col -->
        {{-- <div class="col-md-12 text-right mb-3">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Certificate</button>
        </div><!-- /.col --> --}}
        <div id="status" class="alert alert-success" style="display: none;"></div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="row">
        <div class="col-lg-6 col-6"><p style="padding-left: 10px; font-size: 24px;">Product Farming & Production Details</p></div>
    </div>
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
      <form action="{{url('/update-farming-production/'.request()->route()->prod_id)}}" method="POST" name="update_product_details" id="update_product_details" enctype="multipart/form-data">
        @csrf
      <div class="row">
       
        <div class="col-lg-6 col-12">
            
           <div class="row">
            <div class="col-lg-12 col-12">
                <div class="form-group purple-border">
                    <label for="exampleFormControlTextarea4">Enter Details</label>
                    <textarea class="form-control" id="farming_details" name="farming_details" rows="3">{{$products_details !="" ? $products_details->farming_details:""}}</textarea>
                    {{-- <textarea class="form-control" id="certificate_description" name="certificate_description" rows="3"></textarea> --}}
                </div>
            </div>
           </div>  <!-- /.row -->
           <div class="row">
                <div class="col-lg-6 col-6">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
                <div class="col-lg-6 col-6">
                    <button type="button" class="btn btn-light">Cancel</button>
                </div>
           </div>
        </div>
    
         <!-- ./col -->
      </div>
      <!-- /.row -->
    </form>
    
      <!-- Main row -->

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
@endsection


<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
$(function() {
  $( "#datepicker" ).datepicker();
  
});
$(function () {
      $('.select2').select2()
});
</script>


{{-- MODAL AREA START --}}


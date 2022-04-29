



{{-- @extends('layout.admin.adminmain') --}}

{{-- @extends('layout.admin.admin-main-home') --}}
@extends('layout.admin.product-dashboard-main')


@section('title', 'Amar Asom')

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 600px;
    padding: 40px 10px;
    background: rgb(255, 255, 255);
    border-radius: 4px;
    margin-left: 0px;
    width: 80%; overflow:scroll;">
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
        <div class="col-lg-3 col-6"><p style="padding-left: 10px; font-size: 24px;">Product Description</p></div>
    </div>
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
      <form action="{{url('/update-product-description/'.request()->route()->prod_id)}}" method="POST" name="update_product_details" id="update_product_details" enctype="multipart/form-data">
        @csrf
      <div class="row" style="min-height: 600px; overflow:auto;">
        <div class="col-lg-12 col-12">
            <?php $selected = explode(",", $product->category_id); ?>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="selectpicker form-control" name="category" id="category">
                              <option value="">-- Select --</option>
                                  
                                  @foreach($categories as $category)
                                  <option value="{{$category->id}}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                  @endforeach
                        </select>                      
                       <span style="color: red;">@error('category'){{@'category is required'}}@enderror</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="form-group">
                        <label>Country</label>
                        <select class="selectpicker form-control" name="country" id="country">
                              <option value="">-- Select --</option>
                                  
                                  @foreach($countries as $key => $val)
                                  <option value="{{$val}}" {{ $val == $product->country ? 'selected' : '' }}>{{$val}}</option>
                                  @endforeach
                                  
                        </select>                      
                       <span style="color: red;">@error('country'){{@'Country is required'}}@enderror</span>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-6 col-12">
            
           <div class="row">
            <div class="col-lg-12 col-12">
                <div class="form-group purple-border">
                    <label for="exampleFormControlTextarea4">Product Description</label>
                    <textarea class="textarea form-control" id="product_description" name="product_description" rows="3">{{$products_details !="" ? $products_details->product_description:""}}</textarea>
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

<script type="text/javascript">

	$(document).ready(function() {

	$("#product_description").Editor();                   

});

</script>


{{-- MODAL AREA START --}}


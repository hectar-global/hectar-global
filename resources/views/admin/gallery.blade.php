



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
        <div class="col-lg-6 col-6"><p style="padding-left: 10px; font-size: 24px;">Gallery</p></div>
    </div>
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
      <form action="{{url('/upload-images/'.request()->route()->prod_id)}}" method="POST" name="update_product_details" id="update_product_details" enctype="multipart/form-data">
        @csrf
      <div class="row">
       
        <div class="col-lg-6 col-12">
            
           <div class="row">
             <div><p style="color:red;">(1) Image max size 1 MB (2) Max number of images 5 at once</p></div>
            <div class="col-lg-4 col-12">
              
                <div class="form-group">
                    {{-- <label for="exampleInputFile">Image</label> --}}
                   
                      <input type="file" name="images[]" id="images" multiple="true">
                   
                  </div>
            </div>
           </div>  <!-- /.row -->
           <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Upload">
                        <input type="reset" class="btn btn-info" value="Cancel">
                    </div>
                </div>
           </div>  <!-- /.row -->
           
        </div>
         <!-- ./col -->
      </div>
      <!-- /.row -->
    </form>

    <form action="{{url('/delete-image/'.request()->route()->prod_id.'/'.request()->route()->prod_id)}}" method="POST" name="delete_image" id="delete_image" enctype="multipart/form-data">
      @csrf
    <div class="row">
       @foreach($images as $image)
          <div class="col-lg-3 col-12">
            <img src="{{asset('uploads/gallery/'.$image->name)}}" style="width: 150px; heght:150px;">
            <div style="padding-top: 10px;">
              <a class="btn btn-primary" href="#" onclick="deleteGallery({{$image->id}})">Delete</a>
            </div> 
          </div>
      @endforeach
    </div>
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

<script type="text/javascript">

    function deleteGallery(id){
      if(confirm('Are you sure you want to delete?')){
        window.location.href='{{url('/delete-image/')}}/'+id;
      }
    }
  
  
  </script>
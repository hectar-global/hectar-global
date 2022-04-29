


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
    width: 80%;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active">{{$products->name}}</li>
          </ol>
        </div><!-- /.col -->
        <div class="col-sm-6">
          {{-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol> --}}
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><span style="text-align: left; font-weight:bold;">Overview</span> <span style="padding-left:50px; font-weight:bold;">{{$products->status =="0"? "inactive": "Active"}}</span></li>
              
              <li class="list-group-item">
                <div>
                  <div style="float: left;"> 
                    Created on :
                  </div>
                  <div style="float: left; padding-left:10px;">{{$products->created_at->format('M d Y')}}</div>
                </div>
              </li>

              <li class="list-group-item">
                <div>
                  <div style="float: left;"> 
                    Updated on :
                  </div>
                  <div style="float: left; padding-left:10px;">{{$products->updated_at->format('M d Y')}}</div>
                </div>
              </li>

              <li class="list-group-item" style="text-align: center; font-weight:bold;"><a href="{{ url('/product-details/').'/'.$products->id }}" target="_blank">Visit Page</a></li>
            </ul>
          </div>
        </div>
        <!-- ./col -->
        <div>  <span style="display:inline-block;margin-left:50px"></span>  </div>

        <div class="col-lg-3 col-6">
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><span style="text-align: left; font-weight:bold;">Page Setup</span></li>
              <li class="list-group-item">
                <div>
                  <div style="float: left;"> 
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </div>
                  <div style="float: left; padding-left:10px;">Production description</div>
                </div>
              </li>

              <li class="list-group-item">
                <div>
                  <div style="float: left;"> 
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </div>
                  <div style="float: left; padding-left:10px;">Certification</div>
                </div>
              </li>

              <li class="list-group-item">
                <div>
                  <div style="float: left;"> 
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </div>
                  <div style="float: left; padding-left:10px;">Farming/Production</div>
                </div>
              </li>

              <li class="list-group-item">
                <div>
                  <div style="float: left;"> 
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </div>
                  <div style="float: left; padding-left:10px;">Product Status</div>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
        <!-- ./col -->




        <div>  <span style="display:inline-block;margin-left:50px"></span>  </div>
        <form action="{{url('/update-product/'.$products->id)}}" method="POST" name="editNews" id="editNews" enctype="multipart/form-data">
          @csrf
        <div class="col-lg-3 col-6">
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
               @if($products->image)
                <img src="{{asset('uploads/posts/'.$products->image)}}" style="width: 250px; heght:400px;">
                @else
                <img src="{{asset('uploads/posts/no-image-available.jpg')}}" style="width: 250px; heght:400px;">
                @endif

                <div class="form-group">
                  {{-- <label for="exampleInputFile">Image</label> --}}
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image1" id="image1">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <input type="hidden" name="image" id="image" value="{{old('image', $products->image)}}">
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div style="float: left; padding-left:10px;">
                  
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="exampleInputpTitle">Product Name</label>
                        <input type="text" value="{{old('name', $products->name)}}" name="name" id="name" aria-describedby="pnameHelp" placeholder="Enter Name" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}">
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
    
                      <div class="col-md-4 col-sm-12">
                        <button type="reset" class="btn btn-primary">Cancel</button>
                      </div>
                    </div>
                    <!-- /.col -->
                  
                </div>
              </li>

              {{-- <li class="list-group-item">
                <div class="row">
                  <div class="col-md-4 col-sm-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>

                  <div class="col-md-4 col-sm-12">
                    <button type="button" class="btn btn-primary">Cancel</button>
                  </div>
                </div>
              </li> --}}
              
            </ul>
          </div>
        </div>
      </form>
        <!-- ./col -->


      </div>
      <!-- /.row -->
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
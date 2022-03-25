


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
            <li class="breadcrumb-item"><a href="#">Quality</a></li>
            <li class="breadcrumb-item active">Edit</li>
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
       

        <div id="status" class="alert alert-success" style="display: none;"></div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
    </div>
      <div class="row">
        <div class="col-lg-12 col-6">
          

            <form action="{{url('/update-quality/'.request()->route()->id)}}" method="POST" name="updateQuality" id="updateQuality" enctype="multipart/form-data">
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" value="{{old('title', $quality->title)}}" name="title" id="title" aria-describedby="ptitleHelp" placeholder="Type Title" class="form-control {{($errors->any() && $errors->first('title')) ? 'is-invalid' : ''}}">
                         <span style="color: red;">@error('title'){{@'Quality title is required'}}@enderror</span>
                        </div>
                    </div>
                      <!-- /.col -->
    
                      <div class="col-sm-4">
                        
                          <div><label>Status</label></div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" {{ $quality->status == '1' ? 'checked' : ''}}>
                            <label class="form-check-label" for="inlineRadio1">Active</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" {{ $quality->status == '0' ? 'checked' : ''}}>
                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                          </div>
                        
                    </div>
                      <!-- /.col -->     
                  </div>
                  <!-- /.row -->

    
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea4">Quality Description</label>
                            <textarea class="form-control" id="quality_description" name="quality_description" rows="3">{{$quality !="" ? $quality->quality_description:""}}</textarea>
                            <span style="color: red;">@error('quality_description'){{@'Description is required'}}@enderror</span>
                        </div>
                    </div>
                      <!-- /.col --> 
                  </div>
                  <!-- /.row -->
    
                  <div class="row">
                    <div class="col-md-3 col-sm-12">
                      <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <button type="button" class="btn btn-light">Cancel</button>
                      </div>
                  </div>
              
            </div>
            <!-- /.card-body -->
            
          </div>
          <!-- /.card -->
            </form>


        </div>

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

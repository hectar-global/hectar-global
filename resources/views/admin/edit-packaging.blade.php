


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
            <li class="breadcrumb-item"><a href="#">Packaging</a></li>
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
          

            <form action="{{url('/update-packaging/'.request()->route()->id)}}" method="POST" name="addProduct" id="addProduct" enctype="multipart/form-data">
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                          <label>Packaging Name</label>
                          <input type="text" class="form-control" value="{{old('name', $packaging->name)}}" name="name" id="name" aria-describedby="pnameHelp" placeholder="Packaging Name" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}">
                         <span style="color: red;">@error('name'){{@'Packaging name is required'}}@enderror</span>
                        </div>
                    </div>
                      <!-- /.col -->
    
                      <div class="col-sm-4">
                        
                          <div><label>Status</label></div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" {{ $packaging->status == '1' ? 'checked' : ''}}>
                            <label class="form-check-label" for="inlineRadio1">Active</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" {{ $packaging->status == '0' ? 'checked' : ''}}>
                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                          </div>
                        
                    </div>
                      <!-- /.col -->     
                  </div>
                  <!-- /.row -->


                  <div class="row">
                    <div class="col-sm-4">
                        <label>Volume</label>
                          <input type="text" class="form-control" value="{{old('volume', $packaging->volume)}}" name="volume" id="volume" aria-describedby="pvolumeHelp" placeholder="Volume" class="form-control {{($errors->any() && $errors->first('volume')) ? 'is-invalid' : ''}}">
                         <span style="color: red;">@error('volume'){{@'Volume is required'}}@enderror</span>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Unit</label>
                            <select class="selectpicker form-control" name="unit" id="unit">
                                  <option value="">-- Select --</option>
                                      
                                      @foreach($units as $key => $val)
                                      <option value="{{$val}}" {{ $val == $packaging->unit ? 'selected' : '' }}>{{$val}}</option>
                                      @endforeach
                            </select>                      
                           <span style="color: red;">@error('unit'){{@'Unit is required'}}@enderror</span>
                          </div>
                    </div>
    
    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Cost per packet ($)</label>
                            <input type="text" class="form-control" value="{{old('cost', $packaging->cost)}}" name="cost" id="cost" aria-describedby="pcostHelp" placeholder="Cost" class="form-control {{($errors->any() && $errors->first('Cost')) ? 'is-invalid' : ''}}">                    
                           <span style="color: red;">@error('cost'){{@'Cost is required'}}@enderror</span>
                          </div>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label>Add short description</label>
                          <input type="text" class="form-control" value="{{old('description', $packaging->description)}}" name="description" id="description" aria-describedby="pdescriptionHelp" placeholder="Description" class="form-control {{($errors->any() && $errors->first('notes')) ? 'is-invalid' : ''}}">
                         <span style="color: red;">@error('description'){{@'Description is required'}}@enderror</span>
                        </div>
                    </div>
                      <!-- /.col --> 
                  </div>
                  <!-- /.row -->
    
                  <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            {{-- <input type="file" class="image-input" name="image" id="image">
                            <label class="image-label" for="image">Choose file</label> --}}
                            

                            <input type="file" class="custom-file-input" name="image1" id="image1">
                            <label class="custom-file-label" for="customFile">Upload Cover Image</label>
                            <input type="hidden" name="image" id="image" value="{{old('image', $packaging->image)}}">
                        </div>
                    </div>
                  </div>
    
    
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





 
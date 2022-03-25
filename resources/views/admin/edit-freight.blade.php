


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
            <li class="breadcrumb-item"><a href="#">Freight</a></li>
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
          

            <form action="{{url('/update-freight/'.request()->route()->id)}}" method="POST" name="addProduct" id="addProduct" enctype="multipart/form-data">
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Country</label>
                      <select class="selectpicker form-control" name="country" id="country">
                            <option value="">-- Select --</option>

                                @foreach($country as $country_res)
                        <option value="{{$country_res->id}}" {{ $country_res->id == $freight->country ? 'selected' : '' }}>{{$country_res->name}}</option>
                                @endforeach
                      </select>                      
                     <span style="color: red;">@error('name'){{@'Country name is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Port</label>
                      <select class="selectpicker form-control" name="port" id="port">
                        <option value="">-- Select --</option>

                                @foreach($port as $port_res)
                        <option value="{{$port_res->id}}" {{ $port_res->id == $freight->port ? 'selected' : '' }}>{{$port_res->name}}</option>
                                @endforeach
                      </select>  
                     <span style="color: red;">@error('name'){{@'Port name is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Container</label>
                      <select class="selectpicker form-control" name="container" id="container">
                        <option value="">-- Select --</option>
                                
                                @foreach($containers as $key => $val)
                        <option value="{{$val}}" {{ $val == $freight->container ? 'selected' : '' }}>{{$val}}</option>
                                @endforeach
                      </select>  
                     <span style="color: red;">@error('name'){{@'Container is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->        
              </div>
              <!-- /.row -->


              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Volume (MT)</label>
                      <input type="text" class="form-control" value="{{old('volume', $freight->volume)}}" name="volume" id="volume" aria-describedby="pvolumeHelp" placeholder="Volume" class="form-control {{($errors->any() && $errors->first('volume')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'Volume is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Cost ($)</label>
                      <input type="text" class="form-control" value="{{old('cost', $freight->cost)}}" name="cost" id="cost" aria-describedby="pcostHelp" placeholder="Cost" class="form-control {{($errors->any() && $errors->first('cost')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'Cost is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->     
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                      <label>Notes</label>
                      <input type="text" class="form-control" value="{{old('notes', $freight->notes)}}" name="notes" id="notes" aria-describedby="pnotesHelp" placeholder="Notes" class="form-control {{($errors->any() && $errors->first('notes')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'Notes is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col --> 
              </div>
              <!-- /.row -->


              <div class="row">
                <div class="col-md-3 col-sm-12">
                    <input type="hidden" name="prod_id" value="{{$freight->product_id}}">
                  <button type="submit" class="btn btn-success">Update Changes</button>
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





 
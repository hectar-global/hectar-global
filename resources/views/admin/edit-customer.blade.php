


@extends('layout.admin.admin-main-home')


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
            <li class="breadcrumb-item"><a href="#">Customer</a></li>
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
          

            <form action="{{url('/customer-update/'.request()->route()->id)}}" method="POST" name="updateCustomer" id="updateCustomer" enctype="multipart/form-data">
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" value="{{old('name', $customer->name)}}" name="name" id="name" aria-describedby="pnameHelp" placeholder="Packaging Name" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}">
                         <span style="color: red;">@error('name'){{@'Name is required'}}@enderror</span>
                        </div>
                    </div>
                      <!-- /.col -->
                      <div class="col-sm-4">
                        <label>Company</label>
                          <input type="text" class="form-control" value="{{old('company', $customer->company)}}" name="company" id="company" aria-describedby="pcompanyHelp" placeholder="company" class="form-control {{($errors->any() && $errors->first('company')) ? 'is-invalid' : ''}}">
                         <span style="color: red;">@error('company'){{@'Company is required'}}@enderror</span>
                    </div>
                      <!-- /.col -->     
                  </div>
                  <!-- /.row -->


                  <div class="row">
                    <div class="col-sm-4">
                        <label>Email</label>
                          <input type="text" class="form-control" value="{{old('email', $customer->email)}}" name="email" id="email" aria-describedby="pemailHelp" placeholder="email" class="form-control {{($errors->any() && $errors->first('email')) ? 'is-invalid' : ''}}">
                         <span style="color: red;">@error('volume'){{@'Volume is required'}}@enderror</span>
                    </div>
    
    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" value="{{old('mobile', $customer->mobile)}}" name="mobile" id="mobile" aria-describedby="pmobileHelp" placeholder="Mobile" class="form-control {{($errors->any() && $errors->first('Mobile')) ? 'is-invalid' : ''}}">                    
                           <span style="color: red;">@error('cost'){{@'Mobile is required'}}@enderror</span>
                          </div>
                    </div>
                  </div>
    
                  {{-- <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label>Add short description</label>
                          <input type="text" class="form-control" value="{{old('description', $packaging->description)}}" name="description" id="description" aria-describedby="pdescriptionHelp" placeholder="Description" class="form-control {{($errors->any() && $errors->first('notes')) ? 'is-invalid' : ''}}">
                         <span style="color: red;">@error('description'){{@'Description is required'}}@enderror</span>
                        </div>
                    </div>
                      <!-- /.col --> 
                  </div> --}}
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





 
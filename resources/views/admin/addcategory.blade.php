
@extends('layout.admin.adminmain')


@section('title', 'Hectar')




@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1 class="m-0 text-dark">Add Category</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Variant</a></li>
            <li class="breadcrumb-item active">Add</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
        <form action="{{url('/save-category')}}" method="POST" name="addCategory" id="addCategory" enctype="multipart/form-data">
            @csrf
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Add Variant</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label>Variant Name</label>
                  <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" aria-describedby="pnameHelp" placeholder="Product Name" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}">
                </div>
              </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <div class="form-group">
                <label>Status</label>
                <select name="home" id="home" class="form-control select2 {{($errors->any() && $errors->first('home')) ? 'is-invalid' : ''}}" style="width: 100%;">
                  <option>-- Select --</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
                @if($errors->any())
                <p class="invalid-feedback">{{$errors->first('home')}}</p>
              @endif
              </div>
              </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div>
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          {{-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin. --}}
        </div>
      </div>
      <!-- /.card -->
        </form>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
@endsection



{{-- @extends('layout.admin.adminmain') --}}

@extends('layout.admin.admin-main-home')


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
          {{-- <h1 class="m-0 text-dark">Add Category</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
        <form action="{{url('/update-product/'.$products->id)}}" method="POST" name="editNews" id="editNews" enctype="multipart/form-data">
            @csrf
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Edit Product</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="exampleInputpTitle">Product Name</label>
                <input type="text" value="{{old('name', $products->name)}}" name="name" id="name" aria-describedby="pnameHelp" placeholder="Enter Name" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}">
                </div>
              </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <?php $selected = explode(",", $products->category_id); ?>
          <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Category</label>
                    <select name="category[]" multiple="multiple" id="category_id" class="form-control select2 {{($errors->any() && $errors->first('category_id')) ? 'is-invalid' : ''}}" style="width: 100%;">
                        <option value="">-- Select Product Category --</option>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}"  {{ (in_array($category->id, $selected)) ? 'selected' : '' }}>{{$category['name']}}</option>
                        @endforeach
                    </select>
                        @if($errors->any())
                            <p class="invalid-feedback">{{$errors->first('category')}}</p>
                        @endif
                </div>
            </div>
                <!-- /.col -->

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputpCountry">Country</label>
                    <input type="text" value="{{old('country', $products->country)}}" name="country" id="country" aria-describedby="pcountryHelp" placeholder="Enter Country" class="form-control {{($errors->any() && $errors->first('country')) ? 'is-invalid' : ''}}">
                  </div>
                </div>
                    <!-- /.col -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" value="{{old('price', $products->price)}}" name="price" id="price" aria-describedby="priceHelp" placeholder="Enter Price" class="form-control {{($errors->any() && $errors->first('price')) ? 'is-invalid' : ''}}">
                    </div>
                </div>
                    <!-- /.col -->
          </div>
          <!-- /.row -->


          <div class="row">
           

            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image1" id="image1">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <input type="hidden" name="image" id="image" value="{{old('image', $products->image)}}">
                  </div>
                </div>
              </div>


            <div class="col-sm-3">
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" id="status" class="form-control select2 {{($errors->any() && $errors->first('status')) ? 'is-invalid' : ''}}" style="width: 100%;">
                        <option>-- Select --</option>
                        <option value="1"  {{ $products->status == 1 ? 'selected="selected"' : '' }}" >Active</option>
                        <option value="0"  {{ $products->status == 0 ? 'selected="selected"' : '' }}" >Diactive</option>
                    </select>
                        @if($errors->any())
                            <p class="invalid-feedback">{{$errors->first('status')}}</p>
                        @endif
                </div>
            </div>

          </div>
        
          <!-- /.row -->

          <div class="row">
            <div class="col-md-4 col-sm-12">
              <button type="submit" class="btn btn-primary">Update</button>
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
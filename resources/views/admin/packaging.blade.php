


{{-- @extends('layout.admin.adminmain') --}}

{{-- @extends('layout.admin.admin-main-home') --}}
@extends('layout.admin.product-dashboard-main')


@section('title', 'Hectar')

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
        <div class="col-md-12 text-right mb-3">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Packaging</button>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="row">
        <div class="col-lg-3 col-6"><p style="padding-left: 10px; font-size: 24px;">Packaging Option</p></div>
      </div>
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
      <form action="{{url('/update-product/')}}" method="POST" name="editNews" id="editNews" enctype="multipart/form-data">
        @csrf
      <div class="row">
        
        {{-- <div>  <span style="display:inline-block;margin-left:50px"></span>  </div> --}}
        
        @foreach($packagings as $packag)
        <div class="col-lg-3 col-6">
            
          <div class="card" style="width: 18rem;">
            
            <ul class="list-group list-group-flush">
            
              <li class="list-group-item">
               @if($packag->image)
                <img src="{{asset('uploads/posts/'.$packag->image)}}" style="width: 250px; heght:400px;">
                @else
                <img src="{{asset('uploads/posts/no-image-available.jpg')}}" style="width: 250px; heght:400px;">
                @endif

                {{-- <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image1" id="image1">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <input type="hidden" name="image" id="image" value="{{old('image')}}">
                  </div>
                </div> --}}

              </li>
              <li class="list-group-item">
                <div style="float: left; padding-left:10px;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div style="font-size: 28px;">{{$packag->name}}</div>
                            <div style="font-size: 18px;">{{$packag->cost}} $ per Bag ({{$packag->volume}}{{$packag->unit}})</div>
                        </div>
                    </div>
                </div>
              </li>
              <li class="list-group-item">
                <div style="padding-left:10px;">
                  
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <center><a href="{{ url('/edit-packaging/'.$product->id.'/'.$packag->id) }}"><i class="fa fa-fw fa-edit"></i></a></center>
                      </div>
    
                      <div class="col-md-6 col-sm-12">
                        <a href="#" onclick="deletePackaging({{$packag->id}})"><i class="fa fa-fw fa-trash"></i></a>
                      </div>
                    </div>
                    <!-- /.col -->
                  
                </div>
              </li>
              
            </ul>
          </div>
          
        </div>
        <div>  <span style="display:inline-block;margin-left:50px"></span>  </div> 
        @endforeach
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add/Edit Packaging</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  
        </div>
        <div class="modal-body">
          
            <form action="{{url('/add-packaging/'.request()->route()->prod_id)}}" method="POST" name="addProduct" id="addProduct" enctype="multipart/form-data">
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>

             


              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Packaging Name</label>
                      <input type="text" class="form-control" value="{{old('volume')}}" name="name" id="name" aria-describedby="pnameHelp" placeholder="Packaging Name" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'Packaging name is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->

                  <div class="col-sm-4">
                    
                      <div><label>Status</label></div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Active</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                        <label class="form-check-label" for="inlineRadio2">Inactive</label>
                      </div>
                    
                </div>
                  <!-- /.col -->     
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-sm-4">
                    <label>Volume</label>
                      <input type="text" class="form-control" value="{{old('volume')}}" name="volume" id="volume" aria-describedby="pvolumeHelp" placeholder="Volume" class="form-control {{($errors->any() && $errors->first('volume')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('volume'){{@'Volume is required'}}@enderror</span>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Unit</label>
                        <select class="selectpicker form-control" name="unit" id="unit">
                              <option value="">-- Select --</option>
                                  @foreach($units as $key => $val)
                              <option value="{{$key}}">{{$val}}</option>
                                  @endforeach
                        </select>                      
                       <span style="color: red;">@error('unit'){{@'Unit is required'}}@enderror</span>
                      </div>
                </div>


                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Cost per packet ($)</label>
                        <input type="text" class="form-control" value="{{old('cost')}}" name="cost" id="cost" aria-describedby="pcostHelp" placeholder="Cost" class="form-control {{($errors->any() && $errors->first('Cost')) ? 'is-invalid' : ''}}">                    
                       <span style="color: red;">@error('cost'){{@'Cost is required'}}@enderror</span>
                      </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                      <label>Add short description</label>
                      <input type="text" class="form-control" value="{{old('description')}}" name="description" id="description" aria-describedby="pdescriptionHelp" placeholder="Description" class="form-control {{($errors->any() && $errors->first('notes')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('description'){{@'Description is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col --> 
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        {{-- <input type="file" class="image-input" name="image" id="image">
                        <label class="image-label" for="image">Choose file</label> --}}
                        <label for="formFileLg" class="form-label">Upload Cover Image</label>
                        <input class="form-control form-control-lg" name="image" id="image" type="file" />
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
  </div>
  </div>

  <?php if(count($errors)>0) : ?>
    <script>
        $( document ).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
  <?php endif ?>

  <script type="text/javascript">

    function deletePackaging(id){
      if(confirm('Are you sure you want to delete?')){
        window.location.href='{{url('/delete-packaging/')}}/'+id;
      }
    }
  
  
  </script>
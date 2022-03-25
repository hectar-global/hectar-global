



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
        <div class="col-md-12 text-right mb-3">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Certificate</button>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="row">
        <div class="col-lg-3 col-6"><p style="padding-left: 10px; font-size: 24px;">Certification</p></div>
      </div>
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
     
      <div class="row">
        
        {{-- <div>  <span style="display:inline-block;margin-left:50px"></span>  </div> --}}
        
        @foreach($certificates as $certificate)
        <div class="col-lg-3 col-6">
            
          <div class="card" style="width: 18rem;">
            
            <ul class="list-group list-group-flush">
            
              <li class="list-group-item">
               Active
              </li>
              <li class="list-group-item">
                <div style="float: left; padding-left:10px;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div style="font-size: 22px;">{{$certificate->title}}</div>
                            <div style="font-size: 18px;">{{$certificate->documents}}</div>
                        </div>
                    </div>
                </div>
              </li>
              <li class="list-group-item">
                <div style="padding-left:10px;">
                  
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <center><a href="{{ url('/edit-certificate/'.$certificate->product_id.'/'.$certificate->id) }}"><i class="fa fa-fw fa-edit"></i></a></center>
                        {{-- <center><a href="{{ url('/edit-packaging/') }}"><i class="fa fa-fw fa-edit"></i></a></center> --}}
                      </div>
    
                      <div class="col-md-6 col-sm-12">
                        <a href="#" onclick="deleteCertificate({{$certificate->id}})"><i class="fa fa-fw fa-trash"></i></a>
                        {{-- <a href="#" onclick="deletePackaging('5')"><i class="fa fa-fw fa-trash"></i></a> --}}
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
        
        <div class="col-lg-3 col-6">
            <form action="{{url('/update-certificate-description/'.request()->route()->prod_id)}}" method="POST" name="update_product_details" id="update_product_details" enctype="multipart/form-data">
                @csrf
           <div class="row">
            <div class="col-lg-12 col-12">
                <div class="form-group purple-border">
                    <label for="exampleFormControlTextarea4">Product certifications & description</label>
                    <textarea class="form-control" id="certificate_description" name="certificate_description" rows="3">{{$products_details !="" ? $products_details->certificate_description:""}}</textarea>
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
        </form>
        </div>
    
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


{{-- MODAL AREA START --}}

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add/Edit Packaging</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  
        </div>
        <div class="modal-body">
          
            <form action="{{url('/add-certificate/'.request()->route()->prod_id)}}" method="POST" name="addCertificate" id="addCertificate" enctype="multipart/form-data">
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>

             


              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Certificate Title</label>
                      <input type="text" class="form-control" value="{{old('title')}}" name="title" id="title" aria-describedby="ptitleHelp" placeholder="Certificate Title" class="form-control {{($errors->any() && $errors->first('title')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('title'){{@'Title is required'}}@enderror</span>
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
                <div class="col-sm-12">
                    <div class="form-group">
                      <label>Add short description</label>
                      <input type="text" class="form-control" value="{{old('short_description')}}" name="short_description" id="short_description" aria-describedby="pshort_descriptionHelp" placeholder="Short Description" class="form-control {{($errors->any() && $errors->first('short_description')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('short_description'){{@'Short description is required'}}@enderror</span>
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
                        <label for="formFileLg" class="form-label">Upload Attachment</label>
                        <input type="file" class="form-control" id="documents" name="documents[]" multiple="true"  />
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

    function deleteCertificate(id){
      if(confirm('Are you sure you want to delete?')){
        window.location.href='{{url('/delete-certificate/')}}/'+id;
      }
    }
  
  
  </script>
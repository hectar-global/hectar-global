



{{-- @extends('layout.admin.adminmain') --}}

{{-- @extends('layout.admin.admin-main-home') --}}
@extends('layout.admin.product-dashboard-main')


@section('title', 'Hectar')

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
            <li class="breadcrumb-item active">{{$product->name}}</li>
          </ol>
        </div><!-- /.col -->
        <div class="col-md-12 text-right mb-3">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Quality</button>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="row">
        <div id="status" class="alert alert-success" style="display: none;"></div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
    </div>
    <div class="row">
        <div class="col-lg-3 col-6"><p style="padding-left: 10px; font-size: 24px;">Quality</p></div>
    </div>
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
      <form action="{{url('/update-quality/')}}" method="POST" name="editquality" id="editquality" enctype="multipart/form-data">
        @csrf
      <div class="row">
        
        {{-- <div>  <span style="display:inline-block;margin-left:50px"></span>  </div> --}}
        
        @foreach($qualities as $quality)
        <div class="col-lg-3 col-6 " style="max-width:100%">
            
          <div class="card" style="min-width: 200px;">
            
            <ul class="list-group list-group-flush">
            
              {{-- <li class="list-group-item">
               
              </li> --}}
              <li class="list-group-item">
                <div style="float: left; padding-left:10px;">
                    <div class="row">
                        <div class="col-sm-12">
                            {{-- <div style="font-size: 28px;">{{$packag->name}}</div>
                            <div style="font-size: 18px;">{{$packag->cost}} $ per Bag ({{$packag->volume}}{{$packag->unit}})</div> --}}
                            <div style="font-size: 28px;">{{$quality->title}}</div>
                            {{-- <div style="font-size: 18px;">fsdfsdf</div> --}}

                        </div>
                    </div>
                </div>
              </li>
              <li class="list-group-item">
                <div style="padding-left:10px;">
                  
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <center><a href="{{ url('/edit-quality/'.$product->id.'/'.$quality->id) }}"><i class="fa fa-fw fa-edit"></i></a></center>
                        {{-- <center><a href="#"><i class="fa fa-fw fa-edit"></i></a></center> --}}
                      </div>
    
                      <div class="col-md-6 col-sm-12">
                        <a href="#" onclick="deleteQuality({{$quality->id}})"><i class="fa fa-fw fa-trash"></i></a>
                        {{-- <a href="#" onclick="deleteType('')"><i class="fa fa-fw fa-trash"></i></a> --}}
                      </div>
                    </div>
                    <!-- /.col -->
                  
                </div>
              </li>
              
            </ul>
          </div>
          
        </div>
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
            <h5 class="modal-title">Add Quality</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
  
        </div>
        <div class="modal-body">
          
            <form action="{{url('/add-quality/'.request()->route()->prod_id)}}" method="POST" name="addQuality" id="addQuality" enctype="multipart/form-data">
                
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>

             


              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" value="{{old('title')}}" name="title" id="title" aria-describedby="ptitleHelp" placeholder="Title" class="form-control {{($errors->any() && $errors->first('title')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('title'){{@'Type title is required'}}@enderror</span>
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
                    <label for="exampleFormControlTextarea4">Description</label>
                    <textarea class="form-control" id="quality_description" name="quality_description" rows="3" cols="150"></textarea>
                     <span style="color: red;">@error('quality_description'){{@'Description is required'}}@enderror</span>
                </div>

                
              </div>
              <!-- /.row -->

<p></p>
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

    function deleteQuality(id){
      if(confirm('Are you sure you want to delete?')){
        window.location.href='{{url('/delete-quality/')}}/'+id;
      }
    }
  
  
  </script>
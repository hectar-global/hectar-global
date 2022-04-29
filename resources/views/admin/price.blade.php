



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
            @foreach($products as $product)
            <li class="breadcrumb-item active">{{$product->name}}</li>
            @endforeach
          </ol>
        </div><!-- /.col -->
        <div class="col-md-12 text-right mb-3">
            {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Type</button> --}}
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
        <div class="col-lg-3 col-6"><p style="padding-left: 10px; font-size: 24px;">Price</p></div>
    </div>
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
      
      <div class="row">
        
        {{-- <div>  <span style="display:inline-block;margin-left:50px"></span>  </div> --}}
        
        {{-- @foreach($types as $type) --}}
        @foreach($products as $product)
        <?php
               foreach($product->variant as $variant){

                
          ?>
            <div class="col-lg-4 col-6">
                <form action="{{url('/update-price/'.request()->route()->prod_id.'/'.$variant->id)}}" method="POST" name="{{str_replace(' ', '_', $variant->name)}}" id="update_price" enctype="multipart/form-data">
                  @csrf
                  
                    <div>Variant name :  <strong>{{$variant->name}}</strong></div>
                    <div class="card pl-3 pb-3">
                      <?php
                        foreach($product->quality as $qualiti){

                        
                      ?>
                        <div class="row pt-3">
                            <div class="col-lg-4 col-12">Quality name :  <strong>{{$qualiti->title}}</strong></div>
                            <div class="col-lg-4 col-12">
                              <input type="text" name="price_{{$qualiti->id}}" value="">
                              {{-- <input type="hidden" name="qid" value="{{$qualiti->id}}"> --}}
                              
                            </div>
                        </div>
                       <?php }?>
                    </div>
                    {{-- <input type="hidden" name="variant" value="{{$variant->id}}"> --}}
                    
                    <div><button type="submit" class="btn btn-primary">Save</button></div>
                </form>
            </div>
            <?php } ?>
            @endforeach
            

            {{-- <div class="col-lg-4 col-6">
                <form>
                    <div>Variant 2</div>
                    <div class="card pl-3 pb-3">
                        <div class="row pt-3">
                            <div class="col-lg-4 col-12">quality name 1</div>
                            <div class="col-lg-4 col-12"><input type="text"></div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-lg-4 col-12">quality name 1</div>
                            <div class="col-lg-4 col-12"><input type="text"></div>
                        </div>
                    </div>
                    <div><button type="button" class="btn btn-primary">Save</button></div>
                </form>
            </div> --}}

        {{-- @endforeach --}}
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
            <h5 class="modal-title">Add Price</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  
        </div>
        <div class="modal-body">
          
            <form action="{{url('/add-type/'.request()->route()->prod_id)}}" method="POST" name="addVariant" id="addVariant" enctype="multipart/form-data">
                
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
                    <textarea class="form-control" id="type_description" name="type_description" rows="3" cols="150"></textarea>
                     <span style="color: red;">@error('type_description'){{@'Description is required'}}@enderror</span>
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

    function deleteType(id){
      if(confirm('Are you sure you want to delete?')){
        window.location.href='{{url('/delete-type/')}}/'+id;
      }
    }
  
  
  </script>
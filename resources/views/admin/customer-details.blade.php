

@extends('layout.admin.admin-main-home')


@section('title', 'Hectar')

<?php
use Carbon\Carbon;
?>



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
          <h1 class="m-0 text-dark"><i class="fas fa-tachometer-alt" aria-hidden="true"></i> Customer Details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          {{-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Variant</a></li>
            <li class="breadcrumb-item active">Add</li>
          </ol> --}}
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 text-right mb-3">
              {{-- <a href="{{ url('/add-category') }}" class="btn btn-primary">Add</a> --}}
              {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add customer</button> --}}
          </div>
      </div>
        <div class="card">
            {{-- <div class="card-header">
              <h3 class="card-title">View Variant</h3>
            </div> --}}
            <div id="status" class="alert alert-success" style="display: none;"></div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
            <!-- /.card-header -->


            <div class="col-lg-6 col-6">
            
                {{-- <div class="card" style="width: 18rem; margin-top:20px;">
                  
                  dasaasd
                </div> --}}

                <div class="card" style="margin-top:50px; margin-left:50px;">
                    <div class="card-header">
                        <h2>Personal Details</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Name: {{$customer->name}}</li>
                            <li class="list-group-item">Company Name: {{$customer->company}}</li>
                            <li class="list-group-item">Email: {{$customer->email}}</li>
                        </ul>
                    </div>
                  </div>
                
              </div>
              <div>  <span style="display:inline-block;margin-left:50px"></span>  </div> 



            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 100px">Order ID</th>
                    <th>Product Name</th>
                    <th>Purchase Date</th>
                    <th>Purchase Amount</th>
                    <th>View Order Details</th>
                  </tr>
                </thead>
                <tbody>
                
                  {{-- @if($customers->count())
                    @foreach($customers as $customer) --}}

                    <tr>
                      <td>1</td>  
                      <td>Red Dried Peppers</td>
                      <td> 26th March 2022</td>
                      <td>$210000</a></td>
                      
                      <td>
                        <a href="{{ url('/customer-deatils/'.$customer->id) }}">View</a> 
                        {{-- <a href="{{ url('/customer-edit/'.$customer->id) }}">Edit</a>  --}}
                      </td>
                     
                    </tr>
                    {{-- @endforeach
                   
                    @else --}}
                    {{-- <tr>
                        <td colspan="5">Record not found</td>
                        
                    </tr> --}}
                    {{-- @endif --}}
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

    // $('.select3').change(function(){
    //     var home = $(this).val();
    //     var category = $(this).attr('id');
    //     //alert(category);
    //     $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    
    //     $.ajax({
    //             type: "POST",
    //             url: "/updatehome",
    //             data: {home_val : home, category_id: category},
    //             beforeSend: function() {
    //                 $(".loader").show();
    //             },
    //             success: function(data) {
    //                 $('#status').css("display", "block");
    //                 $('#status').text(data['status']);
                
    //             },
    //             complete: function(){
    //                 $('.loader').hide();
    //             },
    //         }); 
    //     });


        $('.select2').change(function(){
        var status = $(this).val();
        var customer = $(this).attr('id');
        //alert(category);
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
                type: "POST",
                url: "/update-customer-status",
                data: {status_val : status, customer_id: customer},
                beforeSend: function() {
                    $(".loader").show();
                },
                success: function(data) {
                    $('#status').css("display", "block");
                    $('#status').text(data['status']);
                
                },
                complete: function(){
                    $('.loader').hide();
                },
            }); 
        });

       

});

</script>

<script type="text/javascript">

    function deleteCategory(id){
      if(confirm('Are you sure you want to delete?')){
        window.location.href='{{url('/customer-delete/')}}/'+id;
      }
    }
  
  
  </script>


 {{-- MODAL Edit AREA START --}}

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
  
        </div>
        <div class="modal-body">
          
            <form action="{{url('/add-customer')}}" method="POST" name="addcustomer" id="addcustomer" enctype="multipart/form-data">
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>
              <div class="row">

                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="file" class="image-input" name="image" id="image">
                        <label class="image-label" for="image">Choose file</label>
                    </div>
                </div>
    
                <div class="col-sm-12">
                    <div class="form-group">
                      <label>customer Name</label>
                      <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" aria-describedby="pnameHelp" placeholder="customer Name" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'customer name is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->
    
                
                <!-- /.col -->
    
                
                
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <button type="submit" class="btn btn-primary">Add customer</button>
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




@extends('layout.admin.admin-main-home')


@section('title', 'Hectar')

<?php
use Carbon\Carbon;
?>



@section('content')


  
    
<div class="projects-section">
      <div class="projects-section-header">
        <p>Quotes</p>
        <p class="time"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Upload Offline Order</button></p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">{{$orders_count}}</span>
            <span class="status-type">Total Quotes</span>
          </div>
          <div class="item-status">
            <span class="status-number">24</span>
            <span class="status-type">Inactive</span>
          </div>
          
        </div>
      
      </div>
      <div class="project-boxes">
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
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Country</th>
                    <th>Customer Name</th>
                    <th>Product name</th>
                    <th>CIF Cost ($)</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
                  @if($orders->count())
                    @foreach($orders as $order)

                    <tr>
                      <td>{{$order->id}}</td>  
                      <td>{{$order->country}}</td>
                      {{-- <td>{{$product->category?$product->category->name:"Null"}}</td> --}}
                      <td>{{$order->user->name}}</td>
                      {{-- <td><a href="{{url('/product/dashboard/'.$product->id)}}">{{$product->name}}</a></td> --}}
                      <td>{{$order->product->name}}</td>
                      <td>{{$order->price}}</td>
                      <td>
                        <select name="status_status" id="{{$order->id}}" class="form-control select2">
                            <option>-- Select --</option>
                              
                            <option value="1"  {{ 1 == $order->status ? 'selected="selected"' : '' }}>Awaiting confirmation</option>
                            <option value="2"  {{ 2 == $order->status ? 'selected="selected"' : '' }}>Create order</option>
                            <option value="0"  {{ 0 == $order->status ? 'selected="selected"' : '' }}>Generated Quote</option>
                             
                        </select>
                        
                      </td>

                     
                      {{-- <td><a href="{{ url('/edit-product/'.$product->id) }}"><i class="fa fa-fw fa-edit"></i></a> / 
                        <a href="#" onclick="deleteCategory({{$product->id}})"><i class="fa fa-fw fa-trash"></i></a> 
                        
                      </td> --}}
                      <td><a href="{{ url('/order-edit/'.$order->id) }}"><i class="fa fa-fw fa-edit"></i></a> / 
                        <a href="#" onclick="deleteCategory()"><i class="fa fa-fw fa-trash"></i></a> 
                        
                      </td>
                    </tr>
                    @endforeach
                   
                    @else
                    <tr>
                        <td colspan="5">Record not found</td>
                        
                    </tr>
                    @endif
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </div><!-- /.container-fluid -->
    
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
      //  var prod_id = $(this).attr('id');
        var orderid = $(this).attr('id');
       // alert(order_id);
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
                type: "POST",
                // url: "/update-product-status",
                url: "/update-order-status",
                data: {status_val : status, order_id: orderid},
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
        window.location.href='{{url('/product-delete/')}}/'+id;
      }
    }
  
  
  </script>


 {{-- MODAL Edit AREA START --}}

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  
        </div>
        <div class="modal-body">
          
            <form action="{{url('/add-product')}}" method="POST" name="addProduct" id="addProduct" enctype="multipart/form-data">
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
                      <label>Product Name</label>
                      <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" aria-describedby="pnameHelp" placeholder="Product Name" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'Product name is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->
    
                
                <!-- /.col -->
    
                
                
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <button type="submit" class="btn btn-primary">Add Product</button>
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


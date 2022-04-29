

@extends('layout.admin.admin-main-home')


@section('title', 'Hectar')

<?php
use Carbon\Carbon;
?>



@section('content')


  
    
<div class="projects-section">
      <div class="projects-section-header">
        <p>Products</p>
        <p class="time"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Product</button></p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">45</span>
            <span class="status-type">Active</span>
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
                    <th>Category</th>
                    <th>Product name</th>
                    <th>Price ($)</th>
                    <th>Status</th>
                    <th>Updated on</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
                  @if($products->count())
                    @foreach($products as $product)

                    <tr>
                      <td>{{$product->id}}</td>  
                      <td>India</td>
                      <td>{{$product->category?$product->category->name:"Null"}}</td>
                      <td><a href="{{url('/product/dashboard/'.$product->id)}}">{{$product->name}}</a></td>
                      <td>{{$product->price}}.00 per MT</td>
                      <td>
                        <select name="status_status" id="{{$product->id}}" class="form-control select2">
                            <option>-- Select --</option>
                              
                            <option value="1"  {{ 1 == $product->status ? 'selected="selected"' : '' }}>Yes</option>
                            <option value="0"  {{ 0 == $product->status ? 'selected="selected"' : '' }}>No</option>
                             
                        </select>
                      </td>

                      <?php

                            $date = Carbon::parse($product->updated_at);
                            $now = Carbon::now();
                            $updated_days = $date->diffInDays($now);
                            $day_txt= $updated_days==1? "day": "days";

                      ?>
                     
                      <td>{{$updated_days}} {{$day_txt}} ago</td>
                      <td><a href="{{ url('/edit-product/'.$product->id) }}"><i class="fa fa-fw fa-edit"></i></a> / 
                        <a href="#" onclick="deleteCategory({{$product->id}})"><i class="fa fa-fw fa-trash"></i></a> 
                        
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
        var product = $(this).attr('id');
        //alert(category);
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
                type: "POST",
                url: "/update-product-status",
                data: {status_val : status, product_id: product},
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


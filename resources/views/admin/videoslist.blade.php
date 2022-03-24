


@extends('layout.admin.adminmain')


@section('title', 'Amar Asom')




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
            <li class="breadcrumb-item"><a href="#">Video</a></li>
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
      <div class="row">
          <div class="col-md-12 text-right mb-3">
              <a href="{{ url('/add-video') }}" class="btn btn-primary">Add</a>
          </div>
      </div>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">View Video</h3>
            </div>
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
                    <th>Code</th>
                    <th>Home</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                
                  @if($videos->count())
                    @foreach($videos as $video)
                    <tr>
                      <td>{{$video->id}}</td>
                      <td>{{$video->code}}</td>
                      <td>
                      <select name="cate_home" id="{{$video->id}}" class="form-control select3">
                            <option>-- Select --</option>
                              
                            <option value="1"  {{ 1 == $video->home ? 'selected="selected"' : '' }}>Yes</option>
                            <option value="0"  {{ 0 == $video->home ? 'selected="selected"' : '' }}>No</option>
                             
                        </select>
                      </td>
                      <td>

                        <select name="status_home" id="{{$video->id}}" class="form-control select2">
                            <option>-- Select --</option>
                              
                            <option value="1"  {{ 1 == $video->status ? 'selected="selected"' : '' }}>Yes</option>
                            <option value="0"  {{ 0 == $video->status ? 'selected="selected"' : '' }}>No</option>
                             
                        </select>

                      </td>
                      
                      <td><a href="{{ url('/edit-video/'.$video->id) }}"><i class="fa fa-fw fa-edit"></i></a> / 
                        <a href="#" onclick="deleteVideo({{$video->id}})"><i class="fa fa-fw fa-trash"></i></a> 
                        
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


    //     $('.select2').change(function(){
    //     var status = $(this).val();
    //     var category = $(this).attr('id');
    //     //alert(category);
    //     $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    
    //     $.ajax({
    //             type: "POST",
    //             url: "/updatestatus",
    //             data: {status_val : status, category_id: category},
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


    //     $('.select4').change(function(){
    //     var order = $(this).val();
    //     var category = $(this).attr('id');
    //     //alert(category);
    //     $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    
    //     $.ajax({
    //             type: "POST",
    //             url: "/update-order",
    //             data: {disp_order : order, category_id: category},
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
       

});

</script>

<script type="text/javascript">

    function deleteVideo(id){
      if(confirm('Are you sure you want to delete?')){
        window.location.href='{{url('/video-delete/')}}/'+id;
      }
    }
  
  
  </script>


 {{-- MODAL AREA START --}}

 {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  
         
        </div>
        <div class="modal-body">
  
          <div id="status" class="alert alert-success" style="display: none;">
                 
          </div>
          <div  class="loader" role="alert" style="display: none;">
              <img src="{{asset('loader.gif')}}" />
          </div>
  
            <div class="form-group error">
             <label for="inputName" class="col-sm-4 control-label">Please Enter E-mail</label>
               <div class="col-sm-8">
                <input type="text" class="form-control has-error" id="email" name="email" placeholder="E-mail" value="">
               </div>
               </div>
  
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_send" value="{{$category->id}}">Send</button>
        
        </div>
    </div>
  </div>
  </div>
  </div> --}}
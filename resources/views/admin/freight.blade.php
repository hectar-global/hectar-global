
<?php
use Illuminate\Support\Facades\DB;
$product = DB::table('products')->where('id', request()->route()->prod_id)->first();

?>

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
        <div class="col-sm-6">
          {{-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol> --}}
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 text-right mb-3">
            {{-- <a href="{{ url('/add-category') }}" class="btn btn-primary">Add</a> --}}
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Freight</button>
        </div>

        <div id="status" class="alert alert-success" style="display: none;"></div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
    </div>
      <div class="row">
        <div class="col-lg-12 col-6">
          <form action="{{url('/update-freight-price/'.request()->route()->prod_id)}}" method="POST" name="update_freight_price" id="update_freight_price" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Destination port</th>
                    <th scope="col">Country</th>
                    <th scope="col">Container (ft)</th>
                    <th scope="col">Volume (MT)</th>
                    <th scope="col">Cost ($)</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($freights as $freight)
                  <tr>
                    <td>{{$freight->ports->name}}</td>
                    <td>{{$freight->countries->name}}</td>
                    <td>{{$freight->container}}</td>
                    <td>{{$freight->volume}}</td>
                    <td>

                      
                      <input type="text" value="{{old('name', $freight->cost)}}" name={{$freight->id}} id="cost" aria-describedby="pcostHelp" placeholder="price" class="form-control price {{($errors->any() && $errors->first('cost'.$freight->id)) ? 'is-invalid' : ''}}">
                        
                    </td>
                    <td>
                      <a href="{{ url('/edit-freight/'.$product->id.'/'.$freight->id) }}"><i class="fa fa-fw fa-edit"></i></a> / 
                      <a href="#" onclick="deleteFreight({{$freight->id}})"><i class="fa fa-fw fa-trash"></i></a> 
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
                  <div class="row">
                    <div class="col-md-3 col-sm-12">
                      <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <button type="button" class="btn btn-light">Cancel</button>
                      </div>
                  </div>
          </form>

        </div>

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
            <h5 class="modal-title">Freight options/cost</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  
        </div>
        <div class="modal-body">
          
            <form action="{{url('/add-freight/'.request()->route()->prod_id)}}" method="POST" name="addProduct" id="addProduct" enctype="multipart/form-data">
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Country</label>
                      <select class="selectpicker form-control" name="country" id="country">
                            <option value="">-- Select --</option>
                                @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                      </select>                      
                     <span style="color: red;">@error('name'){{@'Country name is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Port</label>
                      <select class="form-control" name="port" id="port">
                        {{-- <option value="">-- Select --</option>
                                @foreach($ports as $key => $val)
                            <option value="{{$key}}">{{$val}}</option>
                                @endforeach --}}
                      </select>  
                     <span style="color: red;">@error('name'){{@'Port name is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Container</label>
                      <select class="selectpicker form-control" name="container" id="container">
                        <option value="">-- Select --</option>
                                @foreach($containers as $key => $val)
                            <option value="{{$key}}">{{$val}}</option>
                                @endforeach
                      </select>  
                     <span style="color: red;">@error('name'){{@'Container is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->        
              </div>
              <!-- /.row -->


              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Volume (MT)</label>
                      <input type="text" class="form-control" value="{{old('volume')}}" name="volume" id="volume" aria-describedby="pvolumeHelp" placeholder="Volume" class="form-control {{($errors->any() && $errors->first('volume')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'Volume is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Cost ($)</label>
                      <input type="text" class="form-control" value="{{old('cost')}}" name="cost" id="cost" aria-describedby="pcostHelp" placeholder="Cost" class="form-control {{($errors->any() && $errors->first('cost')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'Cost is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->     
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                      <label>Notes</label>
                      <input type="text" class="form-control" value="{{old('notes')}}" name="notes" id="notes" aria-describedby="pnotesHelp" placeholder="Notes" class="form-control {{($errors->any() && $errors->first('notes')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'Notes is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col --> 
              </div>
              <!-- /.row -->


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

    function deleteFreight(id){
      if(confirm('Are you sure you want to delete?')){
        window.location.href='{{url('/delete-freight/')}}/'+id;
      }
    }

    $( "#country" ).change(function() {
        var id = this.value;
        
        //var token = $('input[name="_token"]').val();

        $.ajax({
          url:"{{ route('ajaxdata.get_port') }}",
          method:'post',
          dataType: 'json',
          data:{id:id, _token: '{{csrf_token()}}'},
          success:function(result)
          {
            //console.log(result);
            $("#port").html(result);
          }
        });
        

       // alert(country_id);
    });
  
  
  </script>

  


 
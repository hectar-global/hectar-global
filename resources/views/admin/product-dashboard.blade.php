@extends('layout.admin.product-dashboard-main')


@section('title', 'Hector')




@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="margin-left:0px">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <p>
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">Product</a></li>
              <li class="breadcrumb-item active">{{$product->name}}</li>
            </ol>
          </p><br>
          <h1 class="m-0 text-dark">Variant Management</h1>
        </div><!-- /.col -->
        {{-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Variant</li>
          </ol>
        </div><!-- /.col --> --}}
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Variant #1</h3>

              <ul>
               
                  <li><p>Parent Variant - 1</p></li>
                  <li><p>Parent Variant - 2</p></li>
               
              </ul>
              
            </div>
            <div class="icon">
              {{-- <i class="ion ion-bag"></i> --}}
            </div>
            <a href="#" class="small-box-footer">Parent : Product <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

{{-- Sub Variant area start --}}

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Sub Variant<sup style="font-size: 20px"></sup></h3>

              <ul>
                
                  <li><p>Sub_Variant-1</p></li>
                  <li><p>Sub_Variant-2</p></li>
                
              </ul>
            </div>
            <div class="icon">
              {{-- <i class="ion ion-stats-bars"></i> --}}
            </div>
            <a href="#" class="small-box-footer">Parent : Parent Variant - 1 <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Sub Variant<sup style="font-size: 20px"></sup></h3>

              <ul>
                
                  <li><p>Sub_Variant-3</p></li>
                  <li><p>Sub_Variant-4</p></li>
                
              </ul>
            </div>
            <div class="icon">
              {{-- <i class="ion ion-stats-bars"></i> --}}
            </div>
            <a href="#" class="small-box-footer">Parent : Parent Variant - 2 <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

{{-- Sub Variant area End --}}

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>Type</h3>

              {{-- <p>User Registrations</p> --}}
            </div>
            <div class="icon">
              {{-- <i class="ion ion-person-add"></i> --}}
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Quality</h3>

              {{-- <p>Unique Visitors</p> --}}
            </div>
            <div class="icon">
              {{-- <i class="ion ion-pie-graph"></i> --}}
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
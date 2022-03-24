

@extends('layout.admin.adminmain')


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
          {{-- <h1 class="m-0 text-dark">Add Category</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">News</a></li>
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
        <form action="{{url('/save-news')}}" method="POST" name="addNews" id="addNews" enctype="multipart/form-data">
            @csrf
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Add News</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="exampleInputpTitle">Title</label>
                <input type="text" value="{{old('title')}}" name="title" id="title" aria-describedby="ptitleHelp" placeholder="Title" class="form-control {{($errors->any() && $errors->first('title')) ? 'is-invalid' : ''}}">

                @if($errors->any())
                  <p class="invalid-feedback">{{$errors->first('title')}}</p>
                @endif
                </div>
              </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Category</label>
                    <select name="category[]" multiple="multiple" id="category" class="form-control select2 {{($errors->any() && $errors->first('category')) ? 'is-invalid' : ''}}" style="width: 100%;">
                        <option>-- Select News Category --</option>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                        @if($errors->any())
                            <p class="invalid-feedback">{{$errors->first('category')}}</p>
                        @endif
                </div>
            </div>
                <!-- /.col -->

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputpAuthor">Author</label>
                    <input type="text" value="{{old('author')}}" name="author" id="author" aria-describedby="pauthorHelp" placeholder="Author" class="form-control {{($errors->any() && $errors->first('author')) ? 'is-invalid' : ''}}">
    
                    @if($errors->any())
                      <p class="invalid-feedback">{{$errors->first('author')}}</p>
                    @endif
                  </div>
                </div>
                    <!-- /.col -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Source</label>
                        <input type="text" class="form-control" value="{{old('source')}}" name="source" id="source" aria-describedby="sourceHelp" placeholder="News Source" class="form-control {{($errors->any() && $errors->first('source')) ? 'is-invalid' : ''}}">
                    </div>
                </div>
                    <!-- /.col -->
          </div>
          <!-- /.row -->


          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class=" form-group mb-3">
                <label for="exampleInputpStory">Story</label>
                <textarea name="story" id="story" class="textarea form-control {{($errors->any() && $errors->first('story')) ? 'is-invalid' : ''}}" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if($errors->any())
                <p class="invalid-feedback">{{$errors->first('story')}}</p>
              @endif
              </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image1" id="image1">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
              </div>

              <div class="col-sm-8">
                <div class="form-group">
                  <label>Link</label>
                  <input type="text" class="form-control" value="{{old('video_link')}}" name="video_link" id="video_link" aria-describedby="pnameHelp" placeholder="Link" class="form-control {{($errors->any() && $errors->first('video_link')) ? 'is-invalid' : ''}}">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Published Date</label>
                  <input type="text" class="date form-control" value="{{old('published_date')}}" name="published_date" id="datepicker" aria-describedby="published_dateHelp" placeholder="Published Date" class="form-control {{($errors->any() && $errors->first('published_date')) ? 'is-invalid' : ''}}">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                    <label>Top News</label>
                    <select name="top_news" id="top_news" class="form-control select2 {{($errors->any() && $errors->first('top_news')) ? 'is-invalid' : ''}}" style="width: 100%;">
                        <option>-- Select --</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                        @if($errors->any())
                            <p class="invalid-feedback">{{$errors->first('top_news')}}</p>
                        @endif
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Home</label>
                    <select name="home" id="home" class="form-control select2 {{($errors->any() && $errors->first('home')) ? 'is-invalid' : ''}}" style="width: 100%;">
                        <option>-- Select --</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                        @if($errors->any())
                            <p class="invalid-feedback">{{$errors->first('home')}}</p>
                        @endif
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" id="status" class="form-control select2 {{($errors->any() && $errors->first('status')) ? 'is-invalid' : ''}}" style="width: 100%;">
                        <option>-- Select --</option>
                        <option value="1">Active</option>
                        <option value="0">Diactive</option>
                    </select>
                        @if($errors->any())
                            <p class="invalid-feedback">{{$errors->first('status')}}</p>
                        @endif
                </div>
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label>Meta Title</label>
                <input type="text" class="form-control" value="{{old('meta_title')}}" name="meta_title" id="meta_title" aria-describedby="meta_titleHelp" placeholder="Meta Title" class="form-control {{($errors->any() && $errors->first('meta_title')) ? 'is-invalid' : ''}}">
              </div>
            </div>
          <!-- /.col -->
          <div class="col-sm-12">
            <div class="form-group">
              <label>Meta Keywords</label>
              <input type="text" class="form-control" value="{{old('meta_keywords')}}" name="meta_keywords" id="meta_keywords" aria-describedby="meta_keywordsHelp" placeholder="Meta Keywords" class="form-control {{($errors->any() && $errors->first('meta_keywords')) ? 'is-invalid' : ''}}">
            </div>
          </div>
        <!-- /.col -->
        <div class="col-md-12 col-sm-12">
          <div class=" form-group mb-3">
            <label>Meta Description</label>
            <textarea name="meta_description" id="meta_description" class="textarea form-control {{($errors->any() && $errors->first('meta_description')) ? 'is-invalid' : ''}}" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              @if($errors->any())
            <p class="invalid-feedback">{{$errors->first('meta_description')}}</p>
          @endif
          </div>

          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-md-4 col-sm-12">
              <button type="submit" class="btn btn-primary">Add </button>
            </div>
          </div>
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          {{-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin. --}}
        </div>
      </div>
      <!-- /.card -->
        </form>
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
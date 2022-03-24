@extends('layout.frontend.main')


@section('title', 'Amar Asom')
@section('content')


<!-- Start Blog Details Area -->
<!-- Start Blog Details Area -->
<section class="blog-details-area pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">  
                @foreach($videos as $rows)
                    <div class="col-lg-6 col-sm-6">
                        <div class="b-d-s-item mb-30">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$rows->code}}" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
                <div class="post-navigation">
                    <div class="navigation-links">
                        <div class="nav-previous">
                            {{-- <a href="#"><i class='bx bx-left-arrow-alt'></i> Prev Post</a> --}}
                            {{$videos->links()}}
                        </div>
                        {{-- <div class="nav-next">
                            <a href="#">Next Post <i class='bx bx-right-arrow-alt'></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            
            @include('layout/frontend/right-panel')
        </div>
    </div>
</section>
<!-- End Blog Details Area -->


@stop
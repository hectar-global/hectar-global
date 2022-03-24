<style type="text/css">
    #container {
color: #fff;
height: 300px;
overflow: hidden;
padding: 5px 20px;
/* width: 350px; */
}

</style>

<?php

use Illuminate\Support\Facades\DB;
    $popular_posts = DB::table('posts')->whereRaw("find_in_set('15',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(16);

    $sec_posts = DB::table('posts')->whereRaw("find_in_set('2',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);
    $video = DB::table('videos')->where('home', 1)->where('status', 1)->orderBy('id', 'DESC')->first();
    
?>

 <div class="col-lg-4 col-md-12">
    <aside class="widget-area" id="secondary">

        @if($popular_posts->count())  
        <section class="widget widget-peru-posts-thumb">
            <h3 class="widget-title"><a href="/news/15" class="nav-link1">মুখ্য খবৰ</a></h3>
            <div class="post-wrap" id="container">
                @foreach($popular_posts as $rows)
                
                <article class="item">
                    <a href="{{URL::to('/detail-news/'.$rows->id.'/'.str_replace(' ', '-', $rows->meta_title))}}" class="thumb">
                        <img src="{{asset('uploads/posts/'.$rows->image)}}" alt="Image" style="width: 80px; height:70px;">
                    </a>
                    <div class="info">
                        <time datetime="2020-06-30">{{ date('j F, Y', strtotime($rows->published_date)) }}</time>
                        <h4 class="title usmall">
                            <a href="{{URL::to('/detail-news/'.$rows->id.'/'.str_replace(' ', '', $rows->meta_title))}}">
                                {{$rows->title}}
                            </a>
                        </h4>
                    </div>

                    <div class="clear"></div>
                </article>
                @endforeach
                
                
            </div>
        </section>
        @endif

         {{-- Ads area start --}}
                
         <div class="full-width-ads" style="margin: 50px 0 50px 0">
            <div class="container">
                <div class="copy-right">
                    <p>Advertisement</p>
                </div>
            </div>
        </div>

        @if($sec_posts->count())
        <section class="widget widget-peru-posts-thumb">
            <h3 class="widget-title">দেশ</h3>
            <div class="post-wrap">
                @foreach($sec_posts as $rows)
                <article class="item">
                    <a href="{{URL::to('/detail-news/'.$rows->id)}}" class="thumb">
                        <img src="{{asset('uploads/posts/'.$rows->image)}}" alt="Image" style="width: 80px; height:70px;">
                    </a>
                    <div class="info">
                        <time datetime="2020-06-30">{{ date('j F, Y', strtotime($rows->published_date)) }}</time>
                        <h4 class="title usmall">
                            <a href="{{URL::to('/detail-news/'.$rows->id)}}">
                                {{$rows->title}}
                            </a>
                        </h4>
                    </div>

                    <div class="clear"></div>
                </article>
                @endforeach
                
                
            </div>
        </section>
        @endif

        @if(!empty($video))
        <section class="widget widget_tag_cloud">
            <h3 class="widget-title"><a href="{{URL::to('/video/')}}" class="thumb">Video</a></h3>
            <div class="post-wrap">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->code}}" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        @endif
         {{-- Ads area start --}}
                
         {{-- <div class="full-width-ads" style="margin: 50px 0 50px 0">
            <div class="container">
                <div class="copy-right">
                    <p>Advertisement</p>
                </div>
            </div>
        </div> --}}

        
    </aside>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	var i = 0;

$(document).ready(function(){
    
    function startInterval(){
        interval = setInterval(function () {
            i += 4; // speed
            $('#container').animate({ scrollTop: i }, 1);
            if (i >= $('#container').prop('scrollHeight') - $('#container').height()) {
            i = 100;
            }
        }, 100);
        
    }

    startInterval();

    $("#container").hover(function() {
        // $(this).stop();
        clearInterval(interval);
    });

    $("#container").mouseleave(function(e) {
        // $(this).stop();
        startInterval();
    });

});

</script>
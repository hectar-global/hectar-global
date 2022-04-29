<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- basic   -->
        <meta charset="UTF-8">
        <title>Hectar, Most trusted and reliable agro marketplace.</title>
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!-- css   -->	
        <link rel="stylesheet" href="{{asset('assetfront/css/plugins.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assetfront/css/style.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assetfront/css/color.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assetfront/css/dashboard-style.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assetfront/css/cs-select.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assetfront/css/cs-skin-elastic.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assetfront/css/cs-skin-slide.css')}}" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.02.min.css">

        
        <!--  favicons  -->
        <link rel="shortcut icon" href="{{asset('assetfront/favicon.ico')}}">
    </head>
@include('layout.frontend.header')

 
@yield('content')

@include('layout.frontend.footer')

<!--=============== scripts  ===============-->
<script src="{{asset('assetfront/js/plugins.js')}}"></script>
<script src="{{asset('assetfront/js/scripts.js')}}"></script>
<script src="{{asset('assetfront/js/classie.js')}}"></script>
<script src="{{asset('assetfront/js/selectFx.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tarekraafat-autocomplete.js/10.2.7/autoComplete.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

<script>
			(function() {
				[].slice.call( document.querySelectorAll( 'select#product' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
                [].slice.call( document.querySelectorAll( 'select#loadability' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
                [].slice.call( document.querySelectorAll( 'select#country' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
                [].slice.call( document.querySelectorAll( 'select#variant' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
                [].slice.call( document.querySelectorAll( 'select#type' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
                [].slice.call( document.querySelectorAll( 'select#quality' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
                [].slice.call( document.querySelectorAll( 'select#packaging' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
                $("#cifb").click(function(){
                    $(".quo1").toggle();$(".quo2").toggle();
                });
			})();
            const autoCompleteJS = new autoComplete({
            selector: "#product",    
            placeHolder: "Enter product name",
            data: {
                src: [
                "Red Chilli", 
                "Sugar", 
                "Non-Basmati Rice"
            ],
                cache: true,
            },
            resultItem: {
                highlight: true
            },
            events: {
                input: {
                    selection: (event) => {
                        const selection = event.detail.selection.value;
                        autoCompleteJS.input.value = selection;
                    }
                }
            }
        });
        const autoCompleteJS_location = new autoComplete({
            selector: "#location",    
            placeHolder: "Enter destination country",
            data: {
                src: [
                "India", 
                "Sri Lanka", 
                "Singapore"
            ],
                cache: true,
            },
            resultItem: {
                highlight: true
            },
            events: {
                input: {
                    selection: (event) => {
                        const selection = event.detail.selection.value;
                        autoCompleteJS_location.input.value = selection;
                    }
                }
            }
        });

        $( document ).ready(function() {
            if (window.location.href == 'http://13.215.205.39/') {
    console.log("this is a pre-stage Hectar build.");
    document.getElementById("sign-in-icon").style.color = "white";
    document.getElementById("sign-in").style.color = "white";
    
        
}

// JAVASCRIPT FOR ORDER PAGE 
else {
    $('#logh').attr('src', '/assetfront/images/logo.png');
    document.getElementById("bell").style.color = "#3270fc";
    console.log("this is a pre-stage Hectar build.");
}
});"use strict";

const timeline = new TimelineLite();
const $progress = $('.progress-bar');
const $processed = [$('.overlay-check-bubble.processed'), $('.checkmark.processed')];
const $shipped = [$('.overlay-check-bubble.shipped'), $('.checkmark.shipped')];
const $enroute = [$('.overlay-check-bubble.enroute'), $('.checkmark.enroute')];
const $arrived = [$('.overlay-check-bubble.arrived'), $('.checkmark.arrived')];
const $allStates = [$processed, $shipped, $enroute, $arrived]; //Future functionality
// const $processBtn = $('#js-processed');
// const $shippedBtn = $('#js-shipped');
// const $enRouteBtn = $('#js-en-route');
// const $arrivedBtn = $('#js-arrived');
// $processBtn.on('click', processed);
// $shippedBtn.on('click', shipped);
// $enRouteBtn.on('click', enRoute);
// $arrivedBtn.on('click', arrived);

timeline.from($processed, .1, {
  autoAlpha: 0,
  scale: 0,
  transformOrigin: "50% 50%"
}).set($progress, {
  autoAlpha: 1
}).fromTo($progress, .5, {
  drawSVG: 0
}, {
  drawSVG: '30%'
}).from($shipped, .1, {
  autoAlpha: 0,
  scale: 0,
  transformOrigin: "50% 50%"
}, '-=0.15').fromTo($progress, .5, {
  drawSVG: '30%'
}, {
  drawSVG: '60%'
}).from($enroute, .1, {
  autoAlpha: 0,
  scale: 0,
  transformOrigin: "50% 50%"
}, '-=0.15').fromTo($progress, .5, {
  drawSVG: '60%'
}, {
  drawSVG: '100%'
}).from($arrived, .1, {
  autoAlpha: 0,
  scale: 0,
  transformOrigin: "50% 50%"
}, '-=0.15'); 
		</script>
</style>
</body>
</html>
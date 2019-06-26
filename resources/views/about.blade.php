@extends('layouts.header')
@section('title')
    Contact US | {{ config('app.name', 'Laravel') }}
@endsection
@section('content')
   
   <div class="owl-carousel owl-theme" style="margin-top:-140px;z-index:-1;">
        <div class="item w3-display-container">
            <img src="{{ asset('images/slider-01.jpg') }}" class="w3-block w3-card-4">
            <div class="w3-display-bottommiddle">
                <button class="w3-btn w3-opacity w3-transition-05 w3-margin w3-teal w3-hover-opacity-off w3-font-merienda w3-round-xxlarge w3-xlarge w3-card-4" style="width:200px">
                    Explore
                </button>
            </div>
        </div>
        <div class="item w3-display-container">
            <img src="{{ asset('images/slider-05.jpg') }}" class="w3-block w3-card-4">
            <div class="w3-display-bottommiddle">
                <button class="w3-btn w3-opacity w3-transition-05 w3-margin w3-teal w3-hover-opacity-off w3-font-merienda w3-round-xxlarge w3-xlarge w3-card-4" style="width:200px">
                    Explore
                </button>
            </div>
        </div>
         <div class="item w3-display-container">
            <img src="{{ asset('images/slider-03.jpg') }}" class="w3-block w3-card-4">
            <div class="w3-display-bottommiddle">
                <button class="w3-btn w3-opacity w3-transition-05 w3-margin w3-teal w3-hover-opacity-off w3-font-merienda w3-round-xxlarge w3-xlarge w3-card-4" style="width:200px">
                    Explore
                </button>
            </div>
        </div>
        <div class="item w3-display-container">
            <img src="{{ asset('images/slider-07.jpg') }}" class="w3-block w3-card-4">
            <div class="w3-display-bottommiddle">
                <button class="w3-btn w3-opacity w3-transition-05 w3-margin w3-teal w3-hover-opacity-off w3-font-merienda w3-round-xxlarge w3-xlarge w3-card-4" style="width:200px">
                    Explore
                </button>
            </div>
        </div>
    </div>{{-- slider ends here --}}
     <br>
    <br>
    <div class="w3-row"></div>
    <script>
           // owl-slider
            $(function(){
             $(".owl-carousel").owlCarousel({
                 items:1,
                 autoplay:true,
                 autoplayTimeout:5000,
                 rewind:true,
                 autoplayHoverPause:false,
                 dots:true,
                 center:true
                 // animateIn:'fadeIn',
                 // animateOut:'fadeOut    ',
             });
         });

    </script>
@endsection
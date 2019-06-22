@extends('layouts.header')
@section('title')
    NOMADIC | Home
@endsection
@section('content')
    <section class="zoom">
        <img src="{{ asset('images/text.png')}}" class="text">
        <img src="{{ asset('images/mountain1.png')}}" class="layer1">
        <img src="{{ asset('images/mountain2.png')}}" class="layer2">
    </section>
    <section class="content">
    <div class="w3-card-4 w3-black w3-hover-orange w3-hover-text-white w3-transition-05 w3-center thought-container">
        <i class="fa fa-quote-left"></i> 
            Traveling – It leaves you speechless, then turns you into a storyteller.
        <i class="fa fa-quote-right"></i>
    </div>
    </section>
    <br>
    <br>
    <div class="w3-row"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
        $(document).on("click",".w3-bar-item",function(){
            $("html,body").animate({
                scrollTop : 800
            },2000);
        });
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            $('.layer1').css({
                width : (100 + scroll/5) + "%"
            });
            $('.layer2').css({
                width:(100 + scroll/5) + "%",
                left: scroll/50 + "%"
            });
            $('.text').css({
                top: -scroll/15 + "%"
            });
        });
    </script>
@endsection
@extends('layouts.header')
@section('title')
    Home | {{ config('app.name', 'Laravel') }}
@endsection
@section('content')
    <section class="zoom w3-animate-opacity" style="margin-top:-125px;z-index: -99">
        <img src="{{ asset('images/text.png')}}" class="text">
        <img src="{{ asset('images/mountain1.png')}}" class="layer1">
        <img src="{{ asset('images/mountain2.png')}}" class="layer2">
    </section>
    <section class="content">
        <div class="w3-transparent w3-center thought-container" style="margin-top:-20px">
            <i class="fa fa-quote-left w3-xlarge" style="vertical-align: super;"></i> 
                <span class="w3-xlarge"> Traveling – It leaves you speechless, then turns you into a storyteller.</span>
            <i class="fa fa-quote-right w3-xlarge" style="vertical-align: super;"></i>
        </div>
    </section>
    <div class="w3-padding-large w3-center inspire-01 w3-text-white">
        <br>
        <div class="w3-padding w3-xxxlarge w3-font-kaushan w3-center lien-shadow-default">
            We have the best tours ...
        </div>
        <div class="w3-center w3-wide w3-opacity w3-large" style="width:80%;margin:0px auto;">
            <b class="w3-text-red">{{ config('app.name', 'Laravel') }}</b><span style="vertical-align: super" class="w3-tiny">®</span> is a trusted brand in tour and travels industry which basically focuses on customer review system for customer's advantage to deliver best travel experience. <br> Enjoy our premium packages.
        </div>
        <br>
        <br>
    </div>
    <br>
    <br>
    <div class="w3-row">
        <div class="w3-col l1 m12 s12">
            <br>
        </div>
        <div class="w3-col l10 m12 s12">
            <div class="w3-row">
                <div class="w3-col l4 m6 s12">
                    <div class="place-container-item w3-hover-shadow w3-display-container w3-transition-05 alien-shadow place-container-item-01">
                        <div class="w3-display-topmiddle">
                            <div class="w3-small w3-btn w3-round-xxlarge w3-orange w3-text-white date-container w3-card-4">
                                May 25th - June 01st
                            </div>
                        </div>
                        <div class="w3-display-middle w3-xxxlarge w3-text-white w3-center">
                            <b>Mauritius</b>
                            <div class="w3-small">
                                From <i class="fa fa-inr"></i> 60,000
                            </div>
                            <span class="score w3-center">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                        </div>

                        <a href="/1/view" class="w3-display-bottommiddle w3-center w3-margin-bottom">
                            <div class="w3-btn w3-round-xxlarge w3-text-white w3-transition-05 w3-border w3-border-white w3-hover-white see-more-btn">
                                See More
                            </div>
                        </a>
                    </div>       
                </div>
                <div class="w3-col l4 m6 s12">
                    <div class="place-container-item w3-hover-shadow w3-display-container w3-transition-05 alien-shadow place-container-item-02">
                        <div class="w3-display-topmiddle">
                            <div class="w3-small w3-btn w3-round-xxlarge w3-orange w3-text-white date-container w3-card-4">
                                May 25th - June 01st
                            </div>
                        </div>
                        <div class="w3-display-middle w3-xxxlarge w3-text-white w3-center" style="margin-top: -90px">
                            <b>Agra</b>
                            <div class="w3-small">
                                From <i class="fa fa-inr"></i> 40,000
                            </div>
                            <span class="score w3-center">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                        </div>
                        <a href="/2/view" class="w3-display-bottommiddle w3-center w3-margin-bottom">
                            <div class="w3-btn w3-round-xxlarge w3-text-white w3-transition-05 w3-border w3-border-white w3-hover-white see-more-btn">
                                See More
                            </div>
                        </a>
                    </div>       
                </div>
                <div class="w3-col l4 m6 s12">
                    <div class="place-container-item w3-hover-shadow w3-display-container w3-transition-05 alien-shadow place-container-item-03">
                        <div class="w3-display-topmiddle">
                            <div class="w3-small w3-btn w3-round-xxlarge w3-orange w3-text-white date-container w3-card-4">
                                May 25th - June 01st
                            </div>
                        </div>
                        <div class="w3-display-middle w3-xxxlarge w3-text-white w3-center">
                            <b>Shanghai</b>
                            <div class="w3-small">
                                From <i class="fa fa-inr"></i> 31,000
                            </div>
                            <span class="score w3-center">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                        </div>
                        <a href="/3/view" class="w3-display-bottommiddle w3-center w3-margin-bottom">
                            <div class="w3-btn w3-round-xxlarge w3-text-white w3-transition-05 w3-border w3-border-white w3-hover-white see-more-btn">
                                See More
                            </div>
                        </a>
                    </div>       
                </div>
            </div> {{-- inside row ends --}}
        </div>{{-- w3-col l10 --}}
        <div class="w3-col l1 m12 s12">
            <br>
        </div>
    </div>{{-- main w3-row ends --}}
    <br>
    <br>
    <br>
    <div class="w3-row">
        <div class="w3-col l1 m12 s12">
            <br>
        </div>
        <div class="w3-col l10 m12 s12">
            <div class="w3-row">
                <div class="w3-col l4 m6 s12">
                    <div class="place-container-item w3-hover-shadow w3-display-container w3-transition-05 alien-shadow place-container-item-04">
                        <div class="w3-display-topmiddle">
                            <div class="w3-small w3-btn w3-round-xxlarge w3-orange w3-text-white date-container w3-card-4">
                                May 25th - June 01st
                            </div>
                        </div>
                        <div class="w3-display-middle w3-xxxlarge w3-text-white w3-center">
                            <b>Dubai</b>
                            <div class="w3-small">
                                From <i class="fa fa-inr"></i> 65,000
                            </div>
                            <span class="score w3-center">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                        </div>

                        <a href="/4/view" class="w3-display-bottommiddle w3-center w3-margin-bottom">
                            <div class="w3-btn w3-round-xxlarge w3-text-white w3-transition-05 w3-border w3-border-white w3-hover-white see-more-btn">
                                See More
                            </div>
                        </a>
                    </div>       
                </div>
                <div class="w3-col l4 m6 s12">
                    <div class="place-container-item w3-hover-shadow w3-display-container w3-transition-05 alien-shadow place-container-item-05">
                        <div class="w3-display-topmiddle">
                            <div class="w3-small w3-btn w3-round-xxlarge w3-orange w3-text-white date-container w3-card-4">
                                May 25th - June 01st
                            </div>
                        </div>
                        <div class="w3-display-middle w3-xxxlarge w3-text-white w3-center" style="margin-top: -90px">
                            <b>Bali</b>
                            <div class="w3-small">
                                From <i class="fa fa-inr"></i> 35,000
                            </div>
                            <span class="score w3-center">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                        </div>
                        <a href="/5/view" class="w3-display-bottommiddle w3-center w3-margin-bottom">
                            <div class="w3-btn w3-round-xxlarge w3-text-white w3-transition-05 w3-border w3-border-white w3-hover-white see-more-btn">
                                See More
                            </div>
                        </a>
                    </div>       
                </div>
                <div class="w3-col l4 m6 s12">
                    <div class="place-container-item w3-hover-shadow w3-display-container w3-trdate-container w3-card-4 w3-transition-05 alien-shadow place-container-item-06">
                        <div class="w3-display-topmiddle">
                            <div class="w3-small w3-btn w3-round-xxlarge w3-orange w3-text-white date-container w3-card-4">
                                May 25th - June 01st
                            </div>
                        </div>
                        <div class="w3-display-middle w3-xxxlarge w3-text-white w3-center">
                            <b>Amalfi</b>
                            <div class="w3-small">
                                From <i class="fa fa-inr"></i> 65,000
                            </div>
                            <span class="score w3-center">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                        </div>
                        <a href="/6/view" class="w3-display-bottommiddle w3-center w3-margin-bottom">
                            <div class="w3-btn w3-round-xxlarge w3-text-white w3-transition-05 w3-border w3-border-white w3-hover-white see-more-btn">
                                See More
                            </div>
                        </a>
                    </div>       
                </div>
            </div> {{-- inside row ends --}}
        </div>{{-- w3-col l10 --}}
        <div class="w3-col l1 m12 s12">
            <br>
        </div>
    </div>{{-- main w3-row ends --}}
    <br>
    <br>
    <br>
    <div class="w3-padding-64 w3-light-grey">
        <br>
        <div class="w3-center w3-jumbo w3-padding w3-font-kaushan">
            <b>The best offers with room</b>
        </div>
        <br>
        <br>
        <br>
        <div class="w3-row">
            <div class="w3-col l1 m12 s12">
                <br>
            </div>
            <div class="w3-col l10 m12 s12">
                <div class="w3-row">
                    <div class="w3-col l3 m6 s12 offer-cont-1">
                        <div class="w3-display-container offer-cont-2">
                            <img src="{{asset('images/offer_1.jpg')}}" class="offer-cont-image-1" alt="loading..">
                            <div class="w3-display-bottomleft w3-orange w3-text-white offer-cont-3">
                                <b>GRAND CASTLE</b>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12">
                        <div class="w3-padding">
                            <div class="w3-xxlarge w3-text-orange">
                                <span class="fa fa-inr"></span> 1100 <span class="w3-tiny w3-opacity w3-text-black"> per night</span>
                            </div>
                            <span class="score w3-left w3-small">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                            <br>
                            <p class="w3-opacity">
                                       Located in the contours of Kolkata, Grand Castle is the Dominant Player in the Realty Market. Life at Grand Castle is like a Dream Come True.
                             </p>
                            <div class="w3-opacity-max">
                                <i class="fa fa-map-signs offer-cont-icon"></i>
                                <i class="fa fa-globe offer-cont-icon"></i>
                                <i class="fa fa-bicycle offer-cont-icon"></i>
                                <i class="fa fa-binoculars offer-cont-icon"></i>
                                <i class="fa fa-ship offer-cont-icon"></i>
                            </div>
                            <br>
                            <b>READ MORE</b>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12 offer-cont-1">
                        <div class="w3-display-container offer-cont-2">
                            <img src="{{asset('images/offer_2.jpg')}}" class="offer-cont-image-1" alt="loading..">
                            <div class="w3-display-bottomleft w3-orange w3-text-white offer-cont-3">
                                <b>TURKEY HILLS</b>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12">
                        <div class="w3-padding">
                            <div class="w3-xxlarge w3-text-orange">
                                <span class="fa fa-inr"></span> 1500 <span class="w3-tiny w3-opacity w3-text-black"> per night</span>
                            </div>
                            <span class="score w3-left w3-small">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                            <br>
                            <p class="w3-opacity">
                            Turkey Hill Dairy, or simply known as Turkey Hill, is an American brand of iced tea, ice cream and other beverages and frozen desserts distributed throughout the United States and internationally
                            </p>
                            <div class="w3-opacity-max">
                                <i class="fa fa-map-signs offer-cont-icon"></i>
                                <i class="fa fa-globe offer-cont-icon"></i>
                                <i class="fa fa-bicycle offer-cont-icon"></i>
                                <i class="fa fa-binoculars offer-cont-icon"></i>
                                <i class="fa fa-ship offer-cont-icon"></i>
                            </div>
                            <br>
                            <b>READ MORE</b>
                        </div>
                    </div>
                </div>
            </div>{{-- rooms container col l10 here --}}
            <div class="w3-col l1 m12 s12">
                <br>
            </div>
        </div>{{-- rooms container ends here --}}
        <br>
        <br>
        <div class="w3-row">
            <div class="w3-col l1 m12 s12">
                <br>
            </div>
            <div class="w3-col l10 m12 s12">
                <div class="w3-row">
                    <div class="w3-col l3 m6 s12 offer-cont-1">
                        <div class="w3-display-container offer-cont-2">
                            <img src="{{asset('images/offer_3.jpg')}}" class="offer-cont-image-1" alt="loading..">
                            <div class="w3-display-bottomleft w3-orange w3-text-white offer-cont-3">
                                <b>ZURICH</b>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12">
                        <div class="w3-padding">
                            <div class="w3-xxlarge w3-text-orange">
                                <span class="fa fa-inr"></span> 2200 <span class="w3-tiny w3-opacity w3-text-black"> per night</span>
                            </div>
                            <span class="score w3-left w3-small">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                            <br>
                            <p class="w3-opacity">
                                The city of Zurich, a global center for banking and finance, lies at the north end of Lake Zurich in northern Switzerland. The picturesque lanes of the central Altstadt (Old Town), on either side of the Limmat River, reflect its pre-medieval history.
                            </p>
                            <div class="w3-opacity-max">
                                <i class="fa fa-map-signs offer-cont-icon"></i>
                                <i class="fa fa-globe offer-cont-icon"></i>
                                <i class="fa fa-bicycle offer-cont-icon"></i>
                                <i class="fa fa-binoculars offer-cont-icon"></i>
                                <i class="fa fa-ship offer-cont-icon"></i>
                            </div>
                            <br>
                            <b>READ MORE</b>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12 offer-cont-1">
                        <div class="w3-display-container offer-cont-2">
                            <img src="{{asset('images/offer_4.jpg')}}" class="offer-cont-image-1" alt="loading..">
                            <div class="w3-display-bottomleft w3-orange w3-text-white offer-cont-3">
                                <b>GOA</b>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12">
                        <div class="w3-padding">
                            <div class="w3-xxlarge w3-text-orange">
                                <span class="fa fa-inr"></span> 3500 <span class="w3-tiny w3-opacity w3-text-black"> per night</span>
                            </div>
                            <span class="score w3-left w3-small">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>
                            <br>
                            <p class="w3-opacity">
                                Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the area’s tropical spice plantations.                      
                            </p>
                            <div class="w3-opacity-max">
                                <i class="fa fa-map-signs offer-cont-icon"></i>
                                <i class="fa fa-globe offer-cont-icon"></i>
                                <i class="fa fa-bicycle offer-cont-icon"></i>
                                <i class="fa fa-binoculars offer-cont-icon"></i>
                                <i class="fa fa-ship offer-cont-icon"></i>
                            </div>
                            <br>
                            <b>READ MORE</b>
                        </div>
                    </div>
                </div>
            </div>{{-- rooms container col l10 here --}}
            <div class="w3-col l1 m12 s12">
                <br>
            </div>
        </div>{{-- rooms container ends here --}}
        <br>
        <br>
        <br>
    </div>
    @include('searchBox')
    <script>
        $(document).on("click",".logo-main",function(){
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
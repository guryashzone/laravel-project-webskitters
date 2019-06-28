@extends('layouts.header')

@section('title')
Offers
@endsection
@section('content')
	<div class="w3-display-container" style="height:200px;margin-top:-124px;z-index:-1">
        <img src="{{ asset('images/elements_background.jpg')}}" style="">   
        <div class="w3-animate-opacity w3-display-middle w3-font-kaushan w3-xxlarge w3-text-white w3-center" style="text-shadow: 14px 17px 20px #000;">
            Offers exclusively shaped for you ..
            <div class="w3-small">
                A journey of a thousand miles starts with a single step...    
            </div>
        </div>
    </div>
    <div class="w3-padding-64 w3-light-grey w3-animate-opacity">
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
                                <span class="fa fa-inr"></span> 4200 <span class="w3-tiny w3-opacity w3-text-black"> per night</span>
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
                            <img src="{{asset('images/offers_11.jpg')}}" class="offer-cont-image-1" alt="loading..">
                            <div class="w3-display-bottomleft w3-orange w3-text-white offer-cont-3">
                                <b>GOA</b>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12">
                        <div class="w3-padding">
                            <div class="w3-xxlarge w3-text-orange">
                                <span class="fa fa-inr"></span> 4000 <span class="w3-tiny w3-opacity w3-text-black"> per night</span>
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
        <div class="w3-row">
            <div class="w3-col l1 m12 s12">
                <br>
            </div>
            <div class="w3-col l10 m12 s12">
                <div class="w3-row">
                    <div class="w3-col l3 m6 s12 offer-cont-1">
                        <div class="w3-display-container offer-cont-2">
                            <img src="{{asset('images/offer_7.jpg')}}" class="offer-cont-image-1" alt="loading..">
                            <div class="w3-display-bottomleft w3-orange w3-text-white offer-cont-3">
                                <b>GREECE</b>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12">
                        <div class="w3-padding">
                            <div class="w3-xxlarge w3-text-orange">
                                <span class="fa fa-inr"></span> 13000 <span class="w3-tiny w3-opacity w3-text-black"> per night</span>
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
                               Greece is a country in southeastern Europe with thousands of islands throughout the Aegean and Ionian seas. Influential in ancient times, it's often called the cradle of Western civilization. 
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
                            <img src="{{asset('images/offer_13.jpg')}}" class="offer-cont-image-1" alt="loading..">
                            <div class="w3-display-bottomleft w3-orange w3-text-white offer-cont-3">
                                <b>SINGAPORE</b>
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
                               Singapore, an island city-state off southern Malaysia, is a global financial center with a tropical climate and multicultural population. Its colonial core centers on the Padang, a cricket field since the 1830s and now flanked by grand buildings such as City Hall.
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
                            <img src="{{asset('images/offer_9.jpg')}}" class="offer-cont-image-1" alt="loading..">
                            <div class="w3-display-bottomleft w3-orange w3-text-white offer-cont-3">
                                <b>PARIS</b>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12">
                        <div class="w3-padding">
                            <div class="w3-xxlarge w3-text-orange">
                                <span class="fa fa-inr"></span> 15000 <span class="w3-tiny w3-opacity w3-text-black"> per night</span>
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
                                Paris, France's capital, is a major European city and a global center for art, fashion, gastronomy and culture. Its 19th-century cityscape is crisscrossed by wide boulevards and the River Seine. 
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
                            <img src="{{asset('images/offer_10.jpg')}}" class="offer-cont-image-1" alt="loading..">
                            <div class="w3-display-bottomleft w3-orange w3-text-white offer-cont-3">
                                <b>CAPE TOWN</b>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 s12">
                        <div class="w3-padding">
                            <div class="w3-xxlarge w3-text-orange">
                                <span class="fa fa-inr"></span> 5000 <span class="w3-tiny w3-opacity w3-text-black"> per night</span>
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
                              Cape Town is a port city on South Africa’s southwest coast, on a peninsula beneath the imposing Table Mountain. Slowly rotating cable cars climb to the mountain’s flat top, from which there are sweeping views of the city.
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
       </div>
       @include('searchBox')
       <br>
@endsection
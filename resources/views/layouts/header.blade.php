<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> 
		@yield('title', 'Laravel')
	</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href ="{{ asset('images/156138187515450658.gif') }}" type="image/x-icon"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="{{ asset('owl/assets/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('owl/assets/owl.carousel.min.css') }}">
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
</head>
<body>
	<div class="w3-bar w3-transparent w3-top">
		@if($user = Auth::user())
			<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="main-bar-item w3-hover-shadow w3-right w3-bar-item w3-btn w3-transition-05 w3-opacity-min w3-orange w3-text-white w3-hover-opacity-off w3-padding"> LOG OUT </a>
		@else
			<a href="/login" class="main-bar-item w3-hover-shadow w3-right w3-bar-item w3-btn w3-transition-05 w3-opacity-min w3-orange w3-text-white w3-hover-opacity-off w3-padding"> LOG IN </a>
		@endif
		<a href="/contact" class="main-bar-item btn-rotate-right w3-right w3-bar-item w3-btn w3-transition-05 w3-opacity-min w3-green w3-hover-opacity-off w3-padding"> CONTACT </a>
		<a href="/offers" class="main-bar-item btn-rotate-right w3-right w3-bar-item w3-btn w3-transition-05 w3-opacity-min w3-blue w3-hover-opacity-off w3-padding"> OFFERS </a>
		<a href="/about" class="main-bar-item btn-rotate-right w3-right w3-bar-item w3-btn w3-transition-05 w3-opacity-min w3-red w3-hover-opacity-off w3-padding"> ABOUT US </a>
		<a href="/" class="main-bar-item btn-rotate-right w3-right w3-bar-item w3-btn w3-transition-05 w3-opacity-min w3-teal w3-hover-opacity-off w3-padding"> HOME </a>
	</div>
	<div class="w3-bar main-bar w3-transparent" style="margin-top: 10px">
		<div class="w3-bar-item w3-text-white w3-font-kaushan logo-main w3-cursor w3-transparent w3-animate-left w3-jumbo" style="text-shadow:6px 6px 7px #000;">
			{{ config('app.name', 'Laravel') }}<span class="fa fa-paper-plane w3-large" style="vertical-align: top"></span>
		</div>
	</div>
	{{-- Header ends --}}
	@yield('content')
	{{-- Trending conatiner --}}
	<br>
	<div class="w3-center w3-jumbo w3-padding w3-margin-bottom w3-font-kaushan">
		<b>Trending now</b>
	</div>
	<br>
	<div class="w3-row">
		<div class="w3-col l1 m12 s12">
			<br>
		</div>
		<div class="w3-col l10 m12 s12">
			<div class="w3-col l3 m6 s12">
				<div class="w3-padding">
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 trending-blog-image-col">
							<div class="trending-blog-image trend-image-01"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<b class="w3-block w3-large">GRAND HOTEL</b>
							<span class="w3-text-red w3-block w3-small">
								From <i class="fa fa-inr"></i> 6500
							</span>
							<span class="w3-opacity w3-block">
								Agra, INDIA
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="w3-col l3 m6 s12">
				<div class="w3-padding">
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 trending-blog-image-col">
							<div class="trending-blog-image trend-image-02"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<b class="w3-block w3-large">MARIA CRISTINA</b>
							<span class="w3-text-red w3-block w3-small">
								From <i class="fa fa-inr"></i> 5500
							</span>
							<span class="w3-opacity w3-block">
								Delhi, INDIA
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="w3-col l3 m6 s12">
				<div class="w3-padding">
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 trending-blog-image-col">
							<div class="trending-blog-image trend-image-03"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<b class="w3-block w3-large">WICKANINNISH</b>
							<span class="w3-text-red w3-block w3-small">
								From <i class="fa fa-inr"></i> 9900
							</span>
							<span class="w3-opacity w3-block">
								Tifino, COLUMBIA
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="w3-col l3 m6 s12">
				<div class="w3-padding">
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 trending-blog-image-col">
							<div class="trending-blog-image trend-image-04"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<b class="w3-block w3-large">THE SETAI</b>
							<span class="w3-text-red w3-block w3-small">
								From <i class="fa fa-inr"></i> 7700
							</span>
							<span class="w3-opacity w3-block">
								Miami, USA
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w3-col l1 m12 s12">
			<br>
		</div>
	</div>
	<br>
	<div class="w3-row">
		<div class="w3-col l1 m12 s12">
			<br>
		</div>
		<div class="w3-col l10 m12 s12">
			<div class="w3-col l3 m6 s12">
				<div class="w3-padding">
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 trending-blog-image-col">
							<div class="trending-blog-image trend-image-05"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<b class="w3-block w3-large">EMIRATES</b>
							<span class="w3-text-red w3-block w3-small">
								From <i class="fa fa-inr"></i> 8900
							</span>
							<span class="w3-opacity w3-block">
								Dubai, UAE
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="w3-col l3 m6 s12">
				<div class="w3-padding">
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 trending-blog-image-col">
							<div class="trending-blog-image trend-image-06"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<b class="w3-block w3-large">THE QUEEN</b>
							<span class="w3-text-red w3-block w3-small">
								From <i class="fa fa-inr"></i> 10500
							</span>
							<span class="w3-opacity w3-block">
								London, UK
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="w3-col l3 m6 s12">
				<div class="w3-padding">
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 trending-blog-image-col">
							<div class="trending-blog-image trend-image-07"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<b class="w3-block w3-large">THE BOULDERS</b>
							<span class="w3-text-red w3-block w3-small">
								From <i class="fa fa-inr"></i> 6500
							</span>
							<span class="w3-opacity w3-block">
								Arizona, USA
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="w3-col l3 m6 s12">
				<div class="w3-padding">
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 trending-blog-image-col">
							<div class="trending-blog-image trend-image-08"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<b class="w3-block w3-large">PALMS</b>
							<span class="w3-text-red w3-block w3-small">
								From <i class="fa fa-inr"></i> 8500
							</span>
							<span class="w3-opacity w3-block">
								Las Vegas, USA
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w3-col l1 m12 s12">
			<br>
		</div>
	</div>
	{{-- Trending conatiner Ends--}}
	<br>
	<br>
	<br>
	{{-- Footer begins --}}
	<div class="footer w3-row inspire-01">
		<div class="w3-col l1 m12 s12">
			<br>
		</div>
		<div class="w3-col l10 m12 s12">
			<div class="w3-row">
				<div class="w3-col l3 m6 s12 w3-text-white footer-col-container">
					<div class="w3-xxlarge w3-font-kaushan">
						{{ config('app.name', 'Laravel') }}<span class="fa fa-paper-plane w3-large" style="vertical-align: top"></span>
					</div>
					<p class="w3-justify">
						<b class="w3-text-red">{{ config('app.name', 'Laravel') }}</b><span style="vertical-align: super" class="w3-tiny">®</span> is a trusted brand in tour and travels industry which basically focuses on customer review system for customer's advantage to deliver best travel experience. Our association with A class hotels and flights provide best travelling experience which can be seen in our social handles.
					</p>
					<div class="footer-social">
						<div class="footer-social-item w3-small w3-btn w3-hover-white w3-transition-05 alien-shadow-default w3-hover-text-blue">
							<i class="fa fa-facebook"></i>
						</div>
						<div class="footer-social-item w3-small w3-btn w3-hover-white w3-transition-05 alien-shadow-default w3-hover-text-red">
							<i class="fa fa-pinterest"></i>
						</div>
						<div class="footer-social-item w3-small w3-btn w3-hover-white w3-transition-05 alien-shadow-default w3-hover-text-cyan">
							<i class="fa fa-linkedin"></i>
						</div>
						<div class="footer-social-item w3-small w3-btn w3-hover-white w3-transition-05 alien-shadow-default w3-hover-text-red">
							<i class="fa fa-instagram"></i>
						</div>
						<div class="footer-social-item w3-small w3-btn w3-hover-white w3-transition-05 alien-shadow-default">
							<i class="fa fa-google"></i>
						</div>
					</div>
				</div>
				<div class="w3-col l3 m6 s12 w3-text-white footer-col-container">
					<div class="w3-margin-top">
						OUR BLOG
					</div>
					<br>
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 footer-blog-image-col">
							<div class="footer-blog-image blog-image-01"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<span class="w3-block">Travel with us this year</span>
							<span class="w3-text-red">
								June 27, 2019
							</span>
						</div>
					</div>
					<br>
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 footer-blog-image-col">
							<div class="footer-blog-image blog-image-02"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<span class="w3-block">Create new memories</span>
							<span class="w3-text-red">
								June 30, 2019
							</span>
						</div>
					</div>
					<br>
					<div class="w3-row">
						<div class="w3-col l4 m4 s12 footer-blog-image-col">
							<div class="footer-blog-image blog-image-03"></div>
						</div>
						<div class="w3-col l8 m4 s12">
							<span class="w3-block">Be the Xplorer</span>
							<span class="w3-text-red">
								July 2, 2019
							</span>
						</div>
					</div>
				</div>
				<div class="w3-col l3 m6 s12 w3-text-white footer-col-container">
					<div class="w3-margin-top">
						TAGS
					</div>
					<br>
					<div class="footer-tag-container">
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> design </div>
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> fashion </div>
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> music </div>
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> video </div>
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> party </div>
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> photography </div>
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> adventure </div>
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> travel </div>
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> xplore </div><br>
						<div class="tag-container alien-shadow w3-transition-05 w3-cursor btn-shine"> cinematography </div>
					</div>
				</div>

				<div class="w3-col l3 m6 s12 w3-text-white footer-col-container">
					<div class="w3-margin-top">
						CONTACT INFO
					</div>
					<br>
					<div class="footer-contact-container">
						<div class="w3-row-padding w3-cursor w3-transition-03">
							<div class="w3-col l2 m2 s2 w3-xlarge w3-center">
								<span class="fa fa-map-signs"></span>
							</div>
							<div class="w3-col l10 m10 s10">
								27, Genius Tower, Jamshedpur - 831006
							</div>
						</div>
						<div class="w3-row-padding w3-cursor w3-transition-03">
							<div class="w3-col l2 m2 s2 w3-xlarge w3-center">
								<span class="fa fa-phone-square"></span>
							</div>
							<div class="w3-col l10 m10 s10">
								0657-8899345
							</div>
						</div>
						<div class="w3-row-padding w3-cursor w3-transition-03">
							<div class="w3-col l2 m2 s2 w3-xlarge w3-center">
								<span class="fa fa-envelope-o"></span>
							</div>
							<div class="w3-col l10 m10 s10">
								contact@mail.{{ config('app.name', 'Laravel') }}.com
							</div>
						</div>
						<div class="w3-row-padding w3-cursor w3-transition-03">
							<div class="w3-col l2 m2 s2 w3-xlarge w3-center">
								<span class="fa fa-whatsapp"></span>
							</div>
							<div class="w3-col l10 m10 s10">
								9988345467
							</div>
						</div>
						<div class="w3-row-padding w3-cursor w3-transition-02">
							<div class="w3-col l2 m2 s2 w3-xlarge w3-center">
								<span class="fa fa-globe"></span>
							</div>
							<div class="w3-col l10 m10 s10">
								www.{{ config('app.name', 'Laravel') }}.com
							</div>
						</div>
					</div>
				</div>
			</div> {{-- inside row ends --}}
		</div> {{-- col 10 ends --}}
		<div class="w3-col l1 m12 s12">
			<br>
		</div>
	</div> {{-- main row ends --}}
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
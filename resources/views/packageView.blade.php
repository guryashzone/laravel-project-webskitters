@extends('layouts.header')
@section('title')
	{{ config('app.name', 'Laravel') }} | {{ $package->package_name }}
@endsection
@section('content')
	<div class="w3-display-container" style="height: 450px;margin-top:-140px;z-index:-1;">
		<img src="{{ asset('images/view-landing.jpg') }}" alt="" style="width:100%;height:100%">
		<div class="w3-display-middle w3-font-kaushan w3-xxlarge w3-text-white w3-center" style="text-shadow: 14px 17px 20px #000;">
			{{ $package->package_thought }}
		</div>
	</div>
	<br>
	<br>
	<br>
	<div class="w3-row">
		<div class="w3-col l1 m12 s12"><br></div>
		<div class="w3-col l10 m12 s12">
			<div class="package-view-container w3-border w3-padding w3-animate-opacity">
				<div class="w3-row">
					<div class="w3-col l4 m4 s12">
						<img src='../{{$package->img_src}}' class="w3-border-white w3-card-4 w3-bottombar w3-topbar w3-rightbar w3-leftbar" alt=" loading..">
					</div>
					<div class="w3-col l8 m4 s12">
						<div class="w3-bar w3-border-bottom">
							<div class="w3-bar-item w3-jumbo w3-text-orange w3-font-kaushan">
								{{ $package->package_name }}
							</div>
							<div class="w3-bar-item w3-right w3-round-xlarge w3-amber w3-padding w3-xxlarge w3-text-white">
								{{ $package->package_rating }}
							</div>
							<div class="w3-bar-item w3-right" style="text-align: right;">
								<b class="w3-opacity">
									{{ $package->package_review }}
								</b>
								<span class="w3-small w3-opacity-max w3-block">
									{{ $package->package_rating*100 / 5 }} reviews
								</span>
							</div>
						</div>
						<div class="w3-padding-large w3-opacity w3-justify">
							{{ $package->package_description }}
						</div>
						<hr>
						<div class="w3-padding w3-opacity">
							<table class="w3-table">
								<tr class="w3-text-orange">
									<td> Package id </td>
									<td> Start date </td>
									<td> Package place </td>
									<td> Package rate </td>
								</tr>
								<tr>
									<td> {{ $package->package_id }} </td>
									<td> {{ $package->package_start_date }} </td>
									<td> {{ $package->package_place }} </td>
									<td> <span class="fa fa-inr"></span> {{ $package->package_rate }} </td>
								</tr>
							</table>
						</div>
						<hr>
						<div class="w3-bar w3-margin-left">
							<div class="w3-orange w3-bar-item w3-transition-05 btn-shine w3-cursor w3-font-kaushan w3-xlarge w3-round-xxlarge w3-padding-small w3-border w3-border-orange w3-opacity-min">
								&nbsp;&nbsp;&nbsp;Book now ..&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w3-opacity-max w3-padding w3-right w3-bar-item">
	                            <i class="fa fa-map-signs offer-cont-icon"></i>
	                            <i class="fa fa-globe offer-cont-icon"></i>
	                            <i class="fa fa-bicycle offer-cont-icon"></i>
	                            <i class="fa fa-binoculars offer-cont-icon"></i>
	                            <i class="fa fa-ship offer-cont-icon"></i>
	                        </div>	
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="w3-col l1 m12 s12"><br></div>
	</div>
	{{-- {{$package->package_rating}} --}}
	<br>
	<br>
	@include('searchBox')	
@endsection
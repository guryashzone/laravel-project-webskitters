@extends('layouts.header')
@section('title')
	Bookings
@endsection
@section('content')
	<div class="w3-display-container" style="height:300px;margin-top:-124px;z-index:-1">
        <img src="{{ asset('images/elements_background.jpg')}}" style="height:100%;width:100%">   
        <div class="w3-animate-opacity w3-display-middle w3-font-kaushan w3-xxlarge w3-text-white w3-center" style="text-shadow: 14px 17px 20px #000;">
        	<br>
            A journey of a thousand miles starts with a single step...    
        </div>
    </div>
		<br>
		<br>
		<br>
		<br>
	<div class="w3-row">
		<div class="w3-col l1 m12 s12">
			<br>
		</div>
		<div class="w3-col l10 m12 s12">
			<div class="w3-padding-large">
				<div class="w3-bar w3-teal w3-font-kaushan w3-xxlarge w3-card-4">
					<div class="w3-center">
						Bookings for a step ahead..
					</div>
				</div>
				<div class="w3-border">
					<table class="w3-table w3-hover-label w3-border w3-small" border>
						<tr class="w3-teal w3-opacity">
							<td class="w3-center">SL</td>
							<td class="w3-center">PACKAGE</td>
							<td class="w3-center">CHECK IN DATE</td>
							<td class="w3-center">CHECK OUT DATE</td>
							<td class="w3-center">ADULTS</td>
							<td class="w3-center">CHILDREN</td>
							<td class="w3-center">TOTAL PERSONS</td>
							<td class="w3-center">BOOKING DATE</td>
						</tr>
						<div class="w3-hide">{{ $i = 0 }}</div>
						@if ( count($packages) > 0 )
							@foreach ($packages as $pack)
								<tr>
									<td class="w3-center">{{ ++$i }}</td>
									<td class="w3-center">{{ $pack['package_name'] }}</td>
									<td class="w3-center">{{ $pack['check_in'] }}</td>
									<td class="w3-center">{{	 $pack['check_out'] }}</td>
									<td class="w3-center">{{ $pack['adults'] }}</td>
									<td class="w3-center">{{ $pack['children'] }}</td>
									<td class="w3-center">{{ $pack['adults']+$pack['children'] }}</td>
									<td class="w3-center">{{ $pack['created_at'] }}</td>
								</tr>
							@endforeach	
						@else	
							<tr>
								<td colspan="8" class="w3-opacity w3-small"> No bookings yet.. </td>
							</tr>
						@endif
						
					</table>
				</div>
			</div>
		</div>
		<div class="w3-col l1 m12 s12">
			<br>
		</div>
	</div>
	<br>
	<br>
	@include('searchBox')
@endsection
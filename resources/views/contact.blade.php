@extends('layouts.header')
@section('title')
	Contact
@endsection
@section('content')
		<script src={{ asset('js/parallax.min.js') }}></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('css/contact_styles.css') }}">

		<div class="home" style="margin-top: -124px">
		<div class="home_background" data-parallax="scroll" data-image-src={{asset('images/contact_background.jpg')}}></div>
		<div class="home_content">
			<div class="home_title">contact us</div>
		</div>
	</div>
	<div class="contact_form_section w3-animate-opacity">
		<div class="container">
			<div class="row">
				<div class="col">
					@if (session()->has('success'))
						<script>
							alert(`{{ Session::get('success') }}`);
						</script>
					@endif
					<div class="contact_form_container">
						<div class="contact_title text-center">get in touch</div>
						<form action="/contact_form" method="POST" id="contact_form" class="contact_form text-center">
							@csrf
							<input type="text" id="contact_form_name" name="customer_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" name="customer_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" name="subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" name="message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					{{-- About - Image - --}}
					<div class="about_image">
						<img src={{asset('images/man.png')}} alt="">
					</div>

				</div>

				<div class="col-lg-4">
					<!-- About Info -->

					<div class="about_info ">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src={{ asset('images/placeholder.svg')}} alt=""></div></div>
								<div class="contact_info_text">27, Genius Tower, Jamshedpur - 831006</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src={{ asset('images/phone-call.svg')}} alt=""></div></div>
								<div class="contact_info_text">0657-88993</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src={{ asset('images/message.svg')}} alt=""></div></div>
								<div class="contact_info_text"><a>contact@mail.{{ config('app.name', 'Laravel') }}.com</a></div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src={{ asset('images/planet-earth.svg')}} alt=""></div></div>
								<div class="contact_info_text"><a>www.{{ config('app.name', 'Laravel') }}.com</a></div>
							</li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>
	{{-- Google Map --}}
	<div class="travelix_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14713.05045624742!2d86.18112498058746!3d22.792731004196924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e31989f0e2b5%3A0xeeec8e81ce9b344!2sJamshedpur%2C+Jharkhand!5e0!3m2!1sen!2sin!4v1561188833668!5m2!1sen!2sin" frameborder="0" style="border:0;height:700px;width:100%" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<hr>
@endsection
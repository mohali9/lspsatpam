@extends('home.navigation.master')

@section('content')

	<!-- banner -->
	<div class="banner inner-banner" id="home">
		<div class="container">

		</div>
	</div>
	<!-- //banner -->

	<!-- Contact page -->
	<section class="contact py-5 my-lg-5">
		<div class="container">
			<h3 class="heading mb-5">Contact Us</h3>
			<div class="row contact_information">
				<div class="col-md-6">
					<div class="contact_right p-lg-5 p-4">
						<form action="#" method="post">
							<div class="w3_agileits_contact_left">
								<h3 class="mb-3">Contact form</h3>
								<input type="text" name="Name" placeholder="Your Name" required="">
								<input type="email" name="Email" placeholder="Your Email" required="">
								<input type="text" name="Phone" placeholder="Phone Number" required="">
								<textarea placeholder="Your Message Here..." required=""></textarea>
							</div>
							<div class="w3_agileits_contact_right">
								<button type="submit" >Submit</button>
							</div>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
				<div class="col-md-6 contact_left p-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6350041.310790406!2d30.68773492426509!3d39.0014851732576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2sTurkey!5e0!3m2!1sen!2sin!4v1522753415269"></iframe>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="mt-5 information">
						<h4 class="text-uppercase mb-4"><span class="fa fa-comments"></span> Communication</h4>
						<p class="mb-3 text-capitalize">for general queries, including property Sales and constructions, please email us at <a href="mailto:info@example.com">info@example.com</a></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-md-5 mt-2 information">
					<h4 class="text-uppercase mb-4"><span class="fa fa-life-ring"></span> Technical Support</h4>
					<p class="mb-3 text-capitalize">we are ready to help! if you have any queries or issues, contact us for support <span>+12 388 455 6789</span>.</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-md-5 mt-2 information">
					<h4 class="text-uppercase mb-4"><span class="fa fa-map"></span> Others</h4>
					<p class="mb-3 text-capitalize">we are ready to help! if you have any queries or issues, contact us for support <span>+12 388 455 6789</span>.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- //Contact page -->
@endsection
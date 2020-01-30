@extends('layouts.index4')

@section('content')
<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="./images/index.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Contact</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact -->

		<div class="contact container_custom">
			<div class="container">
				<div class="row">

					<!-- Contact Content -->
					<div class="col-xl-6">
						<div class="contact_content">
							<div class="contact_form_container">
								<div class="section_title"><h1>Get in touch</h1></div>
								<form action="#" class="contact_form" id="contact_form">
									<div class="row">
										<div class="col-lg-6 contact_form_col">
											<input type="text" class="contact_input" placeholder="Your name" required="required">
										</div>
										<div class="col-lg-6">
											<input type="email" class="contact_input" placeholder="Your e-mail" required="required">
										</div>
									</div>
									<div>
										<input type="text" class="contact_input" placeholder="Subject">
									</div>
									<div>
										<textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
									</div>
									<button class="contact_button trans_200">Send message</button>
								</form>
								<div class="contact_info">
									<div class="section_title"><h1>Contact Info</h1></div>
									<div class="contact_info_list">
										<ul>
											<li class="d-flex flex-row align-items-start justify-content-start">
												<div class="contact_info_icon"><img src="./images/info_1.png" alt=""></div>
												<div class="contact_info_content"><span>Address: </span>Lagos State University</div>
											</li>
											<li class="d-flex flex-row align-items-start justify-content-start">
												<div class="contact_info_icon"><img src="./images/info_2.png" alt=""></div>
												<div class="contact_info_content"><span>Phone: </span>+234810754362</div>
											</li>
											<li class="d-flex flex-row align-items-start justify-content-start">
												<div class="contact_info_icon"><img src="./images/info_3.png" alt=""></div>
												<div class="contact_info_content"><span>E-mail: </span>emergencyfinder@gmail.com</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Contact Map -->
					<div class="col-xl-6">
						<div class="contact_map_container">

							<!-- Google Map -->

							<div class="map">
								{{-- <div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div> --}}
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
@endsection

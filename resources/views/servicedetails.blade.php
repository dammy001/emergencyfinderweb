@extends('layouts.index3')

@section('content')
<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="container fill_height">
				<div class="row fill_height">
					<div class="col fill_height">
						<div class="listing_image">
							<div class="listing_background_image_left">
								<div class="background_image" style="background-image:url(.images/listing_image_2.jpg)"></div>
							</div>
							<div class="listing_background_image_right">
								<div class="background_image" style="background-image:url(images/listing_image_3.jpg)"></div>
							</div>
							<div class="background_image" style="background-image:url(../uploads/service/damilare.jpg)"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
                            <div class="listing_title"><h1>{{$services->name}}</h1></div>
								<div class="listing_info_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
									<div class="listing_info d-flex flex-row align-items-center justify-content-start">
										<div class="listing_rating">4,5</div>
                                    <div class="listing_price">{{$services->city}}</div>
                                    <div class="listing_type">{{$services->category}}</div>
										<div class="listing_status">Open</div>
									</div>
									<div class="listin_info_options d-flex flex-row align-items-start justify-content-start ml-lg-auto">
										<div class="listing_info_button listing_info_button_1"><a href="#">Write a review</a></div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Listing -->

		<div class="listing">
			<div class="container">
				<div class="row">

					<!-- Listing Content -->
					<div class="col-lg-8">
						<div class="listing_content">
                        <div class="section_title"><h1>About {{$services->name}}</h1></div>
							<div class="listing_text">
                            <p>{{$services->description}}</p>
							</div>

							<!-- Reviews -->
							<div class="reviews">
								<div class="section_title"><h1>2 Reviews</h1></div>
								<div class="reviews_container">

									<!-- Review -->
									<div class="review d-flex flex-lg-row flex-column align-items-start justify-content-start">
										<div class="review_user_container">
											<div>
												<div class="review_user d-flex flex-lg-column flex-row align-items-center justify-content-start">
													<div class="review_user_image"><img src="../images/user_3.jpg" alt=""></div>
													<div class="text-lg-center">
														<div class="review_user_name"><a href="#">Maria Smith</a></div>
														<div class="review_count"><a href="#">5 reviews</a></div>
													</div>
												</div>
											</div>
										</div>
										<div class="review_content">
											<div class="review_title_container d-flex flex-row align-items-start justify-content-start">
												<div class="review_title">"I love it there"</div>
												<div class="review_rating ml-auto">4,5</div>
											</div>
											<div class="review_text">
												<p>Great place to visit, the food is awesome, I really love it. I would recommend it to other people.</p>
											</div>
										</div>
									</div>

									<!-- Review -->
									<div class="review d-flex flex-lg-row flex-column align-items-start justify-content-start">
										<div class="review_user_container">
											<div>
												<div class="review_user d-flex flex-lg-column flex-row align-items-center justify-content-start">
													<div class="review_user_image"><img src="../images/user_4.jpg" alt=""></div>
													<div class="text-lg-center">
														<div class="review_user_name"><a href="#">Maria Smith</a></div>
														<div class="review_count"><a href="#">5 reviews</a></div>
													</div>
												</div>
											</div>
										</div>
										<div class="review_content">
											<div class="review_title_container d-flex flex-row align-items-start justify-content-start">
												<div class="review_title">"Great place"</div>
												<div class="review_rating ml-auto">4,5</div>
											</div>
											<div class="review_text">
												<p>Great place to visit, the food is awesome, I really love it. I would recommend it to other people.</p>
											</div>
											<div class="review_images d-flex flex-row align-items-start justify-content-start flex-wrap">
												<div class="review_image"><a class="colorbox" href="./images/review_1_large.jpg"><img src="images/review_1.jpg" alt=""></a></div>
												<div class="review_image"><a class="colorbox" href="./images/review_2_large.jpg"><img src="images/review_2.jpg" alt=""></a></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Listing Sidebar -->
					<div class="col-lg-4 sidebar_col">
						<div class="sidebar">

							<!-- Work Hours -->
							<div class="work_hours d-flex flex-row align-items-center justify-content-start">
								<div class="closed">Open Now!</div>
								<div class="ml-auto">Open : 09:00 - 24:00</div>
							</div>

							<!-- Info -->
							<div class="sidebar_info">
								<ul>
									<li class="d-flex flex-row align-items-start justify-content-start">
										<div class="sidebar_info_icon"><img src="../images/info_1.png" alt=""></div>
                                    <div class="sidebar_info_content"><span>Address: </span>{{$services->address}}</div>
									</li>
									<li class="d-flex flex-row align-items-start justify-content-start">
										<div class="sidebar_info_icon"><img src="../images/info_2.png" alt=""></div>
                                    <div class="sidebar_info_content"><span>Phone: </span>{{$services->contact}}</div>
									</li>
									<li class="d-flex flex-row align-items-start justify-content-start">
										<div class="sidebar_info_icon"><img src="../images/info_3.png" alt=""></div>
                                    <div class="sidebar_info_content"><span>E-mail: </span>{{$services->email}}</div>
									</li>
								</ul>
							</div>

							<!-- Location -->
							<div class="location">
								<div class="location_icon"><img src="../images/loc.png" alt=""></div>

								<!-- Google Map -->

								<div class="map">
									<div id="google_map" class="google_map">
										<div class="map_container">
											<div id="map"></div>
										</div>
									</div>
								</div>

							</div>

							<!-- Similar Places -->
							<div class="similar_places">
								<div class="section_title"><h1>Similar places</h1></div>
								<div class="similar_places_container d-flex flex-lg-column flex-row align-items-start justify-content-between flex-wrap">

									<!-- Similar Place -->
									<div class="similar_place">
										<div class="similar_place_image">
											<div class="location_icon"><a href="#"><img src="../images/loc.png" alt=""></a></div>
											<div class="similar_place_rating">4,5</div>
											<img src="../images/similar.jpg" alt="">
										</div>
										<div class="similar_place_title"><a href="#">The Lunch</a></div>
									</div>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
@endsection

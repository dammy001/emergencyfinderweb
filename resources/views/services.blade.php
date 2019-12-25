@extends('layouts.index2')

@section('content')
<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Listings -->

		<div class="listings container_custom">
			<div class="container">
				<div class="row">

					<!-- Listings Content -->
					<div class="col-xl-8">
						<div class="listings_content">

							<!-- Listing Search -->
							<div class="listing_search_container">
                            <form action="{{route('search')}}" method="GET" class="search_form" id="search_form">
									<div class="d-flex flex-md-row flex-column align-items-start justify-content-start">
										<div>
                                        <input type="text" class="search_input" name="searchfor" value="{{request()->input('searchfor')}}" placeholder="What are you looking for?" required="required">
										</div>
										<div>
                                        <input type="text" class="search_input" name="location" value="{{request()->input('location')}}" placeholder="Your Location" required="required">
                                        </div>
                                        <button class="search_button" id="search" style="margin-left: 160px;">Search</button>
									</div>
								</form>
							</div>
                        </div>


							<!-- Results -->
							<div class="results_container">

								<div class="results grid">
                                    <div class="col-md-5">
                                    @foreach($services as $service)
									<!-- Result Item -->
									<div class="grid-item result coffee">
										<div class="listing">
											<div class="listing_image">
												<div class="listing_icon"><a href="#"><img src="images/loc.png" alt=""></a></div>
                                            <img src="{{$service->image}}" alt="">
											</div>
											<div class="listing_title_container">
                                            <div class="listing_title"><a href="{{route('service.view', $service->id)}}">{{$service->name}}</a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4.5</div>
                                                    <div class="listing_price">{{$service->city}}</div>
													<div class="listing_divider">|</div>
                                                <div class="listing_type">{{$service->category}}</div>
													<div class="listing_divider">|</div>

                                                    <div class="listing_price">{{$service->address}}</div>

												</div>
                                            </div>

                                            @endforeach
											{{-- <div class="listing_testimonial">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="testimonial_image"><img src="images/user_1.jpg" alt=""></div>
													<div class="testimonial_text">
														<p>Great place to visit, the food is awesome, I really love it.</p>
													</div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                        <div class="testimonial_image"><img src="images/user_1.jpg" alt=""></div>
                                                        <div class="testimonial_text">
                                                            <p>Great place to visit, the food is awesome, I really love it.</p>
                                                        </div>
                                                    </div>
                                            </div> --}}

										</div>
									</div>

									<!-- Result Item -->
									 {{-- <div class="grid-item result food">
										<div class="listing">
											<div class="listing_image">
												<div class="listing_icon"><a href="listing.html"><img src="images/loc.png" alt=""></a></div>
												<img src="images/listing_2.jpg" alt="">
											</div>
											<div class="listing_title_container">
												<div class="listing_title"><a href="listing.html">Lunch Box</a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4,5</div>
													<div class="listing_price">$$$</div>
													<div class="listing_divider">|</div>
													<div class="listing_type">Restaurant</div>
													<div class="listing_divider">|</div>
													<div class="listing_status">Closed</div>
												</div>
											</div>
											 <div class="listing_testimonial">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="testimonial_image"><img src="images/user_2.jpg" alt=""></div>
													<div class="testimonial_text">
														<p>Great place to visit, the food is awesome, I really love it.</p>
													</div>
												</div>
											</div>
										</div>
									</div> --}}

									<!-- Result Item -->
									{{-- <div class="grid-item result drinks">
										<div class="listing">
											<div class="listing_image">
												<div class="listing_icon"><a href="listing.html"><img src="images/loc.png" alt=""></a></div>
												<img src="images/listing_1.jpg" alt="">
											</div>
											<div class="listing_title_container">
												<div class="listing_title"><a href="listing.html">The Lunch</a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4,5</div>
													<div class="listing_price">$$$</div>
													<div class="listing_divider">|</div>
													<div class="listing_type">Restaurant</div>
													<div class="listing_divider">|</div>
													<div class="listing_status">Closed</div>
												</div>
											</div>
											 <div class="listing_testimonial">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="testimonial_image"><img src="images/user_1.jpg" alt=""></div>
													<div class="testimonial_text">
														<p>Great place to visit, the food is awesome, I really love it.</p>
													</div>
												</div>
											</div>
										</div>
									</div> --}}

									<!-- Result Item -->
									{{-- <div class="grid-item result coffee">
										<div class="listing">
											<div class="listing_image">
												<div class="listing_icon"><a href="listing.html"><img src="images/loc.png" alt=""></a></div>
												<img src="images/listing_2.jpg" alt="">
											</div>
											<div class="listing_title_container">
												<div class="listing_title"><a href="listing.html">Vegan Space</a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4,5</div>
													<div class="listing_price">$$$</div>
													<div class="listing_divider">|</div>
													<div class="listing_type">Restaurant</div>
													<div class="listing_divider">|</div>
													<div class="listing_status">Closed</div>
												</div>
											</div>
											<div class="listing_testimonial">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="testimonial_image"><img src="images/user_2.jpg" alt=""></div>
													<div class="testimonial_text">
														<p>Great place to visit, the food is awesome, I really love it.</p>
													</div>
												</div>
											</div>
										</div>
									</div> --}}

                                </div>
                                {{ $services->links() }}
                            </div>

						</div>
					</div>

					<!-- Listings Map -->
					 <div class="col-xl-6">
						<div class="listings_map">

							<!-- Google Map -->

							<div class="map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
@endsection

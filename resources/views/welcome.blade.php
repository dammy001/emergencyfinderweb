@extends('layouts.app')

@section('content')
<div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Home -->

        <div class="home">

            <!-- Home Slider -->
            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Slide -->
                    <div class="slide">
                        <div class="background_image" style="background-image:url(images/index.jpg)"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="home_content text-center">
                                            <div class="home_title"><h1>Get Road <span>Assistance</span></h1></div>
                                            <div class="search_form_container">
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            <form action="{{route('search')}}" method="GET" class="search_form" id="search_form">
                                                    <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center justify-content-sm-between">
                                                        <input type="text" name="searchfor" class="search_input" placeholder="What are you looking for?" style="margin-right: 25px;">
                                                        <input type="text" name="location" class="search_input" placeholder="Location" style="margin-right: 25px;">
                                                        <button class="search_button">Search</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="slide">
                        <div class="background_image" style="background-image:url(images/index.jpg)"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="home_content text-center">
                                            <div class="home_title"><h1>Get Road <span>Assistance</span></h1></div>
                                            <div class="search_form_container">
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                    <form action="{{route('search')}}" method="GET" class="search_form" id="search_form">
                                                            <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center justify-content-sm-between">
                                                                <input type="text" name="searchfor" class="search_input" placeholder="What are you looking for?" style="margin-right: 25px;">
                                                                <input type="text" name="location" class="search_input" placeholder="Location" style="margin-right: 25px;">
                                                                <button class="search_button">Search</button>
                                                            </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="slide">
                        <div class="background_image" style="background-image:url(images/index.jpg)"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="home_content text-center">
                                            <div class="home_title"><h1>Get Road <span>Assistance</span></h1></div>
                                            <div class="search_form_container">
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                    <form action="{{route('search')}}" method="GET" class="search_form" id="search_form">
                                                            <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center justify-content-sm-between">
                                                            <input type="text" name="searchfor" class="search_input" value="{{request()->input('searchfor')}}" placeholder="What are you looking for?" style="margin-right: 25px;">
                                                                <input type="text" name="location" class="search_input" value="{{request()->input('location')}}" placeholder="Location" style="margin-right: 25px;">
                                                                <button class="search_button">Search</button?>
                                                            </div>
                                                        </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Home Slider Dots -->

                <div class="home_slider_dots">
                    <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                        <li class="home_slider_custom_dot active">01.</li>
                        <li class="home_slider_custom_dot">02.</li>
                        <li class="home_slider_custom_dot">03.</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="categories">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="categories_container d-flex flex-md-row flex-column align-items-start justify-content-start">

                                <!-- Category -->
                                <div class="category text-center">
                                    <a href="listings.html">
                                        <div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
                                            <div class="cat_icon"><img src="images/icon_1.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
                                            <div class="cat_title">Hospitals</div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Category -->
                                <div class="category text-center">
                                    <a href="listings.html">
                                        <div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
                                            <div class="cat_icon"><img src="images/icon_2.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
                                            <div class="cat_title">Mechanics</div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Category -->
                                <div class="category text-center">
                                    <a href="listings.html">
                                        <div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
                                            <div class="cat_icon"><img src="images/icon_3.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
                                            <div class="cat_title">Fire Stations</div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Category -->
                                <div class="category text-center">
                                    <a href="listings.html">
                                        <div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
                                            <div class="cat_icon"><img src="images/icon_4.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
                                            <div class="cat_title">Petrol Stations</div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Category -->
                                <div class="category text-center">
                                    <a href="listings.html">
                                        <div class="d-flex flex-md-column flex-row align-items-md-center align-items-md-start align-items-center justify-content-start">
                                            <div class="cat_icon"><img src="images/icon_5.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
                                            <div class="cat_title">Towing</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How it works -->

		<div class="how container_custom">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title text-center"><h1>How Emergency<span>Finder+</span> works</h1></div>
                            <div class="icon_box_container d-flex flex-row align-items-start justify-content-between flex-wrap">

                                <!-- Icon Box -->
                                <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                                    <div class="icon_box_num">01.</div>
                                    <div class="icon_box_icon"><img src="images/icon_6.svg" alt="https://www.flaticon.com/authors/monkik"></div>
                                    <div class="icon_box_title">Choose Nearest Provider</div>
                                    <div class="icon_box_text">
                                        <p>Donec cursus, risus non fermentum lacinia, felis lectus interdum velit, in pulvinar enim justo at sem. Quisque ut semper neque. Suspendisse quam est</p>
                                    </div>
                                </div>

                                <!-- Icon Box -->
                                <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                                    <div class="icon_box_num">02.</div>
                                    <div class="icon_box_icon"><img src="images/icon_7.svg" alt="https://www.flaticon.com/authors/monkik"></div>
                                    <div class="icon_box_title">Find your pick</div>
                                    <div class="icon_box_text">
                                        <p>Donec cursus, risus non fermentum lacinia, felis lectus interdum velit, in pulvinar enim justo at sem. Quisque ut semper neque. Suspendisse quam est</p>
                                    </div>
                                </div>

                                <!-- Icon Box -->
                                <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                                    <div class="icon_box_num">03.</div>
                                    <div class="icon_box_icon"><img src="images/icon_8.svg" alt="https://www.flaticon.com/authors/monkik"></div>
                                    <div class="icon_box_title">Get Assistance</div>
                                    <div class="icon_box_text">
                                        <p>Donec cursus, risus non fermentum lacinia, felis lectus interdum velit, in pulvinar enim justo at sem. Quisque ut semper neque. Suspendisse quam est</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cta container_custom">
                    <div class="parallax_background" data-image-src="images/cta.jpg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="cta_content">
                                    <div class="cta_title"><h1>Find Service Provider Near You</h1></div>
                                    <div class="cta_text">

                                    </div>
                                <div class="button cta_button"><a href="{{route('service')}}">See the list</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA 2 -->

                <div class="cta_2">
                    <div class="container">
                        <div class="row row-lg-eq-height">
                            <div class="col-lg-9 cta_2_col">
                                <div class="cta_2_content">
                                    <div class="cta_2_title"><h1>Get the Emergency<span>Finder+</span> App</h1></div>
                                    <div class="cta_2_text">

                                    </div>
                                    <div class="store_links d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <div class="store_link"><a href="#"><img src="images/store_1.jpg" alt=""></a></div>
                                        <div class="store_link"><a href="#"><img src="images/store_2.jpg" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 cta_2_col">
                                <div class="cta_2_image">
                                    <img src="images/mobile.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection

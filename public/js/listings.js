/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Isotope
5. Init Google Map


******************************/

$(document).ready(function() {
    "use strict";

    /*

    1. Vars and Inits

    */

    var header = $('.header');
    var map;

    setHeader();

    $(window).on('resize', function() {
        setHeader();

        setTimeout(function() {
            $(window).trigger('resize.px.parallax');
        }, 375);
    });

    $(document).on('scroll', function() {
        setHeader();
    });

    initMenu();
    initIsotope();
    initMap();

    /*

    2. Set Header

    */

    function setHeader() {
        if ($(window).scrollTop() > 91) {
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    }

    /*

    3. Init Menu

    */

    function initMenu() {
        if ($('.menu').length) {
            var header = $('.header');
            var hOverlay = $('.header_overlay');
            var menu = $('.menu');
            var hamb = $('.hamburger');
            var sup = $('.super_container_inner');
            var close = $('.menu_close');
            var overlay = $('.super_overlay');

            hamb.on('click', function() {
                header.toggleClass('active');
                sup.toggleClass('active');
                menu.toggleClass('active');
            });

            close.on('click', function() {
                header.toggleClass('active');
                sup.toggleClass('active');
                menu.toggleClass('active');
            });

            overlay.on('click', function() {
                header.toggleClass('active');
                sup.toggleClass('active');
                menu.toggleClass('active');
            });

            hOverlay.on('click', function() {
                header.toggleClass('active');
                sup.toggleClass('active');
                menu.toggleClass('active');
            });
        }
    }

    /*

    4. Init Isotope

    */

    function initIsotope() {
        if ($('.grid').length) {
            var grid = $('.grid');
            grid.isotope({
                itemSelector: '.grid-item',
                layoutMode: 'fitRows'
            });

            // Filtering
            var checkboxes = $('.listing_checkbox label input');
            checkboxes.on('click', function() {
                var checked = checkboxes.filter(':checked');
                var filters = [];
                checked.each(function() {
                    var filterValue = $(this).attr('data-filter');
                    filters.push(filterValue);
                });

                filters = filters.join(', ');
                grid.isotope({ filter: filters });
            });
        }
    }

    /*

    5. Init Google Map

    */
    var map, infoWindow;
    var customLabel = {
        restaurant: {
            label: 'R'
        },
        bar: {
            label: 'B'
        }
    };

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            draggable: true,
            scrollwheel: false,
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.RIGHT_CENTER
            },
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            fullscreenControl: true,
            styles: [{
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffeba1"
                }]
            }]
        });
        infoWindow = new google.maps.InfoWindow;

        google.maps.event.addDomListener(window, 'resize', function() {
            setTimeout(function() {
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            }, 1400);
        });


        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                var marker = new google.maps.Marker({
                    map: map,
                    position: pos,
                });

                infoWindow.setPosition(pos);

                infoWindow.setContent('You are here.');
                infoWindow.open(map, marker);
                map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }

    /* function initGoogleMap()
	{
		var myLatlng = new google.maps.LatLng(47.495962, 19.050966);
    	var mapOptions =
    	{
    		center: myLatlng,
	       	zoom: 14,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			draggable: true,
			scrollwheel: false,
			zoomControl: true,
			zoomControlOptions:
			{
				position: google.maps.ControlPosition.RIGHT_CENTER
			},
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			rotateControl: false,
			fullscreenControl: true,
			styles:
			[
			  {
			    "featureType": "road.highway",
			    "elementType": "geometry.fill",
			    "stylers": [
			      {
			        "color": "#ffeba1"
			      }
			    ]
			  }
			]
    	}

    	// Initialize a map with options
    	map = new google.maps.Map(document.getElementById('map'), mapOptions);

		// Re-center map after window resize
		google.maps.event.addDomListener(window, 'resize', function()
		{
			setTimeout(function()
			{
				google.maps.event.trigger(map, "resize");
				map.setCenter(myLatlng);
			}, 1400);
		});
	} */

});
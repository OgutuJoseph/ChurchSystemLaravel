<!DOCTYPE html>
<html lang="en">
	<head>
		<title>St. Jude Donholm Catholic</title>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    	<link rel="stylesheet" href="{{ asset('Content/open-iconic-bootstrap.min.css') }}">
    	<link rel="stylesheet" href="{{ asset('Content/animate.css') }}">
    
    	<link rel="stylesheet" href="{{ asset('Content/owl.carousel.min.css') }}">
    	<link rel="stylesheet" href="{{ asset('Content/owl.theme.default.min.css') }}">
    	<link rel="stylesheet" href="{{ asset('Content/magnific-popup.css') }}">

    	<link rel="stylesheet" href="{{ asset('Content/aos.css') }}">

    	<link rel="stylesheet" href="{{ asset('Content/ionicons.min.css') }}">
    
    	<link rel="stylesheet" href="{{ asset('Content/flaticon.css') }}">
    	<link rel="stylesheet" href="{{ asset('Content/icomoon.css') }}">
    	<link rel="stylesheet" href="{{ asset('Content/style.css') }}">
	</head>
  	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300"> 
	  
    	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    	<div class="container">
	     		<a class="navbar-brand" href="index.html"><span class="flaticon-bible"></span>Donholm Catholic</a>
				 @if (\Session::has('success'))
    				<div class="alert alert-success">
        				<ul>
            				<li>{!! \Session::get('success') !!}</li>
       					</ul>
    				</div>
				@endif
	      		<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	       			<span class="oi oi-menu"></span> Menu
	      		</button>

	      		<div class="collapse navbar-collapse" id="ftco-nav">
	        		<ul class="navbar-nav nav ml-auto">
	          			<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          			<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          			<li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
	          			<li class="nav-item"><a href="#events-section" class="nav-link"><span>Events</span></a></li> 
	          			<li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
	          			<li class="nav-item"><a href="#priest-section" class="nav-link"><span>Priests</span></a></li>
	          			<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
						<?php $member_id=Session::get('member_id'); ?>
						<?php if($member_id != NULL){?>
						<li class="nav-item"><a href="{{URL::to('/member/logout')}}" class="nav-link"> <span>Logout</span></a></li>
						<?php  
						} ?>
	        		</ul>
	      		</div>
	    	</div>
	  	</nav>
	  	<section class="home-slider js-fullheight owl-carousel">
      		<div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
      			<div class="overlay"></div>
	       		<div class="container">
	          		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          			<div class="col-md-8 text-center ftco-animate mt-5">
	          				<div class="text">
	          					<div class="subheading">
	          						<span>St. Jude Donholm Catholic</span>
	          					</div> 
		            			<h2>Come Worship With Us.</h2>
		            			<p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
	            			</div>
	          			</div>
	       			</div>
        		</div>
      		</div>

      		<div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
      			<div class="overlay"></div>
	        	<div class="container">
	          		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          			<div class="col-md-8 text-center ftco-animate mt-5">
	          				<div class="text">
	          					<div class="subheading">
	          						<span>St. Jude Donholm Catholic</span>
	          					</div>
		            			<p class="mb-4">We <span>Love</span> God, We Believe in God</p>
		            			<h2>The Light. The Truth. The Way</h2>
		            			<p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
	            			</div>
	          			</div>
	        		</div>
        		</div>
      		</div>
    	</section>

    	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section" id="about-section">
    		<div class="container-fluid px-0">
    			<div class="row d-md-flex text-wrapper">
					<div class="one-half img" style="background-image: url('images/about.jpg');"></div>
						<div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
							<div class="text-inner pl-md-5">
              					<h3 class="heading">Welcome to <span>St. Jude</span> Donholm Catholic</h3>
                				<p>St. Jude  Parish, Donholm, is a Catholic Parish in the Archdiocese of Nairobi, established in 1982. Residents living in Donholm and other Christians who can make it to mass at Donholm parish, are warmly welcome to join the family of St. Jude in Eucharistic celebrations during Sunday and weekday masses.</p>
                				<ul class="my-4">
              						<li><span class="ion-ios-checkmark-circle mr-2"></span> Even the all-powerful Pointing</li>
              						<li><span class="ion-ios-checkmark-circle mr-2"></span> Behind the word mountains</li>
              						<li><span class="ion-ios-checkmark-circle mr-2"></span> Separated they live in Bookmarksgrove</li>
              					</ul>
            				</div>
						</div>
    				</div>
    			</div>
    	</section>

    	<section class="ftco-counter" id="section-counter">
    		<div class="container-fluid px-0">
    			<div class="row no-gutters">
          			<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            			<div class="block-18 text-center py-5">
              				<div class="text">
              					<div class="icon d-flex justify-content-center align-items-center">
              						<span class="icon-users"></span>
              					</div>
                				<strong class="number" data-number="3500">0</strong>
               					 <span>Members</span>
              				</div>
            			</div>
          			</div>
          			<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            			<div class="block-18 text-center py-5">
              				<div class="text">
              					<div class="icon d-flex justify-content-center align-items-center">
              						<span class="icon-user"></span>
              					</div>
                				<strong class="number" data-number="7">0</strong>
                				<span>Priests</span>
              				</div>
            			</div>
          			</div>
          			<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            			<div class="block-18 text-center py-5">
              				<div class="text">
              					<div class="icon d-flex justify-content-center align-items-center">
              						<span class="icon-money"></span>
              					</div>
                				<strong class="number" data-number="9350500">0</strong>
                				<span>Donations</span>
              				</div>
            			</div>
          			</div>
          			<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            			<div class="block-18 text-center py-5">
              				<div class="text">
              					<div class="icon d-flex justify-content-center align-items-center">
              						<span class="icon-home"></span>
              					</div>
                				<strong class="number" data-number="15">0</strong>
                				<span>Weekly Mass Services</span>
              				</div>
            			</div>
          			</div>
        		</div>
    		</div>
    	</section>
		
		<section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          			<div class="col-md-12 heading-section text-center ftco-animate">
          				<span class="subheading">Services</span>
           				<h2 class="mb-4">Donholm Catholic Mass Services</h2>
            			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          			</div>
        		</div>
        		<div class="row">
        			<div class="col-md d-flex align-self-stretch ftco-animate">
            			<div class="media block-6 services text-center d-block">
              				<div class="icon"><span class="flaticon-praying"></span></div>
              				<div class="media-body">
                			<h3 class="heading mb-3">Daily Prayers</h3>
                			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              			</div>
            		</div>      
          		</div>
          		<div class="col-md d-flex align-self-stretch ftco-animate">
            		<div class="media block-6 services text-center d-block">
              			<div class="icon"><span class="flaticon-bible"></span></div>
              			<div class="media-body">
                			<h3 class="heading mb-3">Continous Teaching</h3>
                			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              			</div>
            		</div>      
          		</div>
          		<div class="col-md d-flex align-self-stretch ftco-animate">
           			<div class="media block-6 services text-center d-block">
              			<div class="icon"><span class="flaticon-church"></span></div>
              			<div class="media-body">
                			<h3 class="heading mb-3">Set of Sermons</h3>
                			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              			</div>
           			</div>      
          		</div>
          		<div class="col-md d-flex align-self-stretch ftco-animate">
           			<div class="media block-6 services text-center d-block">
              			<div class="icon"><span class="flaticon-rings"></span></div>
              			<div class="media-body">
                			<h3 class="heading mb-3">Wedding</h3>
                			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              			</div>
            		</div>      
          		</div>
         		<div class="col-md d-flex align-self-stretch ftco-animate">
            		<div class="media block-6 services text-center d-block">
              			<div class="icon"><span class="flaticon-social-care"></span></div>
              			<div class="media-body">
                			<h3 class="heading mb-3">Community Helpers</h3>
                			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              			</div>
            		</div>      
          		</div>
        	</div> 
		</section>

		<section class="ftco-section bg-light" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          			<div class="col-md-12 heading-section text-center ftco-animate">
          				<span class="subheading">Services</span>
            			<h2 class="mb-4">Order Of Mass Services</h2>
            			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          			</div>
        		</div>
				<div class="row">
				@foreach($services as $service)
        			<div class="col-md-4"> 
        				<div class="sermon-wrap ftco-animate"> 
                            <li class="item" id="">
								<a href="">
                                    <img src="{{ asset('uploads/service/'.$service->image) }}" class="img d-flex align-items-center justify-content-center" alt="Item" style="height: 400px; width: 350px">
                                    <div class="menu-desc text-center">
										<span>
                                        <h2>{{ $service->service_name }}</h2> 
                                        </span>
                                    </div>
                                </a>
                                <h4 class="white text-center"> {{ $service->start_time }} to {{ $service->end_time }}</h4>
								<a href="/confirm-membership" value="Search" class="btn btn-success btn-block">Reserve Seat </a>  
                            </li>
							<div class="text pt-3 text-center">
    							<h2 class="mb-0"><a href="">{{ $service->theme }}</a></h2>
    							<div class="meta">
		  							<p class="mb-0">
			  							<span>{{ $service->date->format('d/m/Y') }}</span>
		  							</p>
		  						</div>
    						</div> 
  						</div> 
        			</div>   
					@endforeach   
        		</div>
			</div>
		</section>

		<section class="ftco-intro img" id="events-section" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
				</div>
			</div>
		</section>

		<section class="ftco-section bg-light ftco-event" id="events-section">
			<div class="container-fluid px-4 ftco-to-top">
				<div class="row justify-content-center pb-5">
          			<div class="col-md-12 heading-section text-center ftco-animate">
          				<span class="subheading">Events</span>
            			<h2 class="mb-5">Upcoming Events</h2>
          			</div>
        		</div>
				<div class="row">
					<div class="col-md-12 col-lg-6 col-xl-4">
        				<div class="event-wrap d-flex ftco-animate">
        					<div class="img" style="background-image: url(images/event-1.jpg);"></div>
        					<div class="text p-4 d-flex align-items-center">
        						<div>
	        						<span class="time">8:30am - 11:30am</span>
	        						<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        						<div class="meta">
		        						<p><span class="icon-user mr-1"></span> by Father: <a href="#">Jerry Simon</a></p>
		        						<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        						<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        						</div>
	        					</div>
        					</div>
        				</div>
        			</div>
        		<div class="col-md-12 col-lg-6 col-xl-4">
        			<div class="event-wrap d-flex ftco-animate">
        				<div class="img" style="background-image: url(images/event-2.jpg);"></div>
        				<div class="text p-4 d-flex align-items-center">
        					<div>
	        					<span class="time">8:30am - 11:30am</span>
	        					<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        					<div class="meta">
		        					<p><span class="icon-user mr-1"></span> by Father: <a href="#">Jerry Simon</a></p>
		        					<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        					<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        		<div class="col-md-12 col-lg-6 col-xl-4">
        			<div class="event-wrap d-flex ftco-animate">
        				<div class="img" style="background-image: url(images/event-3.jpg);"></div>
        				<div class="text p-4 d-flex align-items-center">
        					<div>
	        					<span class="time">8:30am - 11:30am</span>
	        					<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        					<div class="meta">
		        					<p><span class="icon-user mr-1"></span> by Father: <a href="#">Jerry Simon</a></p>
		        					<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        					<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        					</div>
	        				</div>
        				</div>
        			</div>	
        		</div>

        		<div class="col-md-12 col-lg-6 col-xl-4">
        			<div class="event-wrap d-flex ftco-animate">
        				<div class="img" style="background-image: url(images/event-4.jpg);"></div>
        				<div class="text p-4 d-flex align-items-center">
        					<div>
	        					<span class="time">8:30am - 11:30am</span>
	        					<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        					<div class="meta">
		        					<p><span class="icon-user mr-1"></span> by Father: <a href="#">Jerry Simon</a></p>
		        					<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        					<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        		<div class="col-md-12 col-lg-6 col-xl-4">
        			<div class="event-wrap d-flex ftco-animate">
        				<div class="img" style="background-image: url(images/event-5.jpg);"></div>
        				<div class="text p-4 d-flex align-items-center">
        					<div>
	        					<span class="time">8:30am - 11:30am</span>
	        					<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        					<div class="meta">
		        					<p><span class="icon-user mr-1"></span> by Father: <a href="#">Jerry Simon</a></p>
		        					<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        					<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        		<div class="col-md-12 col-lg-6 col-xl-4">
        			<div class="event-wrap d-flex ftco-animate">
        				<div class="img" style="background-image: url(images/event-6.jpg);"></div>
        				<div class="text p-4 d-flex align-items-center">
        					<div>
	        					<span class="time">8:30am - 11:30am</span>
	        					<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        					<div class="meta">
		        					<p><span class="icon-user mr-1"></span> by Father: <a href="#">Jerry Simon</a></p>
		        					<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        					<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
			</div> 
		</section>
		 

    	<section class="ftco-section bg-light" id="blog-section">
      		<div class="container">
        		<div class="row justify-content-center mb-5 pb-5">
         	 		<div class="col-md-7 heading-section text-center ftco-animate">
            			<span class="subheading">Blog</span>
            			<h2 class="mb-4">Read the Latest Blog</h2>
            			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          			</div>
        		</div>
        		<div class="row d-flex">
          			<div class="col-md-4 d-flex ftco-animate">
          				<div class="blog-entry justify-content-end">
              				<a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              				</a>
              				<div class="text float-right d-block">
              					<div class="d-flex align-items-center pt-2 mb-4 topp">
              						<div class="one mr-2">
              							<span class="day">04</span>
              						</div>	
              					<div class="two">
              						<span class="yr">2019</span>
              						<span class="mos">June</span>
              					</div>	
              				</div>
                			<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
               				<div class="d-flex align-items-center mt-4 meta">
	                			<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                			<p class="ml-auto mb-0">
	                				<a href="#" class="mr-2">Admin</a>
	                				<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                			</p>
                			</div>
              			</div>
           			</div>
          		</div>
          		<div class="col-md-4 d-flex ftco-animate">
          			<div class="blog-entry justify-content-end">
              			<a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
             			</a>
              			<div class="text float-right d-block">
              				<div class="d-flex align-items-center pt-2 mb-4 topp">
              					<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">June</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">June</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="priest-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          		<div class="col-md-6 heading-section text-center ftco-animate">
          			<span class="subheading">Priests</span>
            		<h2 class="mb-4">Church Priests</h2>
            		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          		</div>
        	</div>
        	<div class="row">
				@foreach($priests as $priest)
				<div class="col-md-4"> 
                    <li class="item" id="">
						<a href="">
                            <img src="{{ asset('uploads/priest/'.$priest->image) }}" class="img d-flex align-items-center justify-content-center" alt="Item" style="height: 400px; width: 300px">
                            <div class="menu-desc text-center">
								<span>
                                    <h3>{{ $priest->priest_name }}</h3> 
                                </span> 
								<p>{{ $priest->email }}</p>
                            </div>
                        </a> 
                     </li> 
					 <div class="faded">
                        <ul class="ftco-social text-center">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div> 
				</div>   
				@endforeach 
			</div>
    	</div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            <form action="{{ route('contact.send') }}" class="bg-light p-4 p-md-5 contact-form" method="post">
			{{ csrf_field() }}
			@if (\Session::has('success'))
    			<div class="alert alert-success">
        			<ul>
            			<li>{!! \Session::get('success') !!}</li>
       				</ul>
    			</div>
			@endif
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" id="name" name="name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" id="email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject">
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" class="form-control" placeholder="Message" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div id="map" class="bg-white"></div>
		</section>

		<section class="ftco-gallery ftco-section ftco-no-pb mb-4">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">Donholm Catholic Church Photo Gallery</h2>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><span>St. Jude</span>Donholm Catholic Church</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">About</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Staff</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Beliefs</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>History</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Mission</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Wedding &amp; Funerals</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Jobs &amp; Internship</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fellowships</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Connect</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home Groups</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Recovery Groups</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Memberships</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Children &amp; Students</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Volunteer</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Counseling</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Assistance</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Service Hours</h2>
              <div class="opening-hours">
              	<p>Saturday Prayer Meeting: <span class="mb-3">10:00 am to 11:30 am</span></p>
              	<p>Sunday Service: <span class="mb-3">8:30 am to 11:30 am</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('Scripts/jquery.min.js') }}"></script>
  <script src="{{ asset('Scripts/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('Scripts/popper.min.js') }}"></script>
  <script src="{{ asset('Scripts/bootstrap.min.js') }}"></script>
  <script src="{{ asset('Scripts/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('Scripts/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('Scripts/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('Scripts/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('Scripts/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('Scripts/aos.js') }}"></script>
  <script src="{{ asset('Scripts/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('Scripts/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('Scripts/google-map.js') }}"></script>
  
  <script src="{{ asset('Scripts/main.js') }}"></script>
    
  </body>
</html>
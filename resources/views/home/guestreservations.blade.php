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
	                <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link"><span>Home</span></a></li>
	                <li class="nav-item"><a href="{{ route('welcome') }}#about-section" class="nav-link"><span>About</span></a></li>
	                <li class="nav-item"><a href="{{ route('welcome') }}#services-section" class="nav-link"><span>Services</span></a></li>
	                <li class="nav-item"><a href="{{ route('welcome') }}#events-section" class="nav-link"><span>Events</span></a></li> 
	                <li class="nav-item"><a href="{{ route('welcome') }}#blog-section" class="nav-link"><span>Blog</span></a></li>
	                <li class="nav-item"><a href="{{ route('welcome') }}#pastor-section" class="nav-link"><span>Pastor</span></a></li>
	                <li class="nav-item"><a href="{{ route('welcome') }}#contact-section" class="nav-link"><span>Contact</span></a></li>
                  <?php $guest_id=Session::get('guest_id'); ?>
						      <?php if($guest_id != NULL){?>
						      <li class="nav-item"><a href="{{URL::to('/guest/logout')}}" class="nav-link"> <span>Logout</span></a></li>
						      <?php  
						      } ?>
	            </ul>
	        </div>
	    </div>
	</nav>
	  
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Make Reservation</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Contacts <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
      </div>
    </section>
		 
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate"> 
 
                    <div class="pt-5 mt-5">
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Make A Reservation</h3>
                            <form action="{{ action('GuestReservationsController@store') }}" class="p-5 bg-light" method="post">
                            {{ csrf_field() }}
			                      @if (\Session::has('success'))
    			                    <div class="alert alert-success">
        			                  <ul>
            			                <li>{!! \Session::get('success') !!}</li>
       				                  </ul>
    			                    </div>
			                      @endif
                                <div class="form-group">
                                    <label for="service">Mass Service *</label>
                                    <select class="form-control" name="service_id">
                                        @foreach($services as $service)
                                            <option value="{{ $service->service_id }}">{{ $service->service_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date">Date *</label>
                                    <input type="date" class="form-control" id="date" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="email">Start Time *</label>
                                    <input type="time" class="form-control" id="start_time" name="start_time">
                                </div>
                                <div class="form-group">
                                    <label for="email">End Time *</label>
                                    <input type="time" class="form-control" id="end_time" name="end_time">
                                </div>
                                <div class="form-group">
                                    <label for="email">Number Of Seats *</label>
                                    <input type="number" class="form-control" id="number_of_seats" name="number_of_seats">
                                </div>
                                <div class="form-group">
                                    <label for="email">Name *</label>
                                    <select class="form-control" name="guest_id">
                                        @foreach($guests as $guest)
                                            <option value="{{ $guest->guest_id }}">{{ $guest->other_names }}</option>
                                        @endforeach
                                    </select>                                </div>
                                <div class="form-group">
                                    <label for="website">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
 
                                <div class="form-group">
                                    <input type="submit" value="Reserve" class="btn py-3 px-4 btn-primary">
                                </div> 
                            </form>
                        </div>
                    </div> 
                </div> <!-- .col-md-8 -->  
            </div>
        </div>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><span>St Jude</span> Donholm Catholic Church</h2>
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
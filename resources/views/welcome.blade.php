
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->
<link rel="stylesheet" href="{{asset('assets/landing/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/landing/css/colors/default.css')}}">
<link rel="stylesheet" href="{{asset('assets/landing/css/style.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{asset('assets/landing/css/responsive.css')}}">
<!-- Title -->
<title>Toko Rakyat</title>
<!-- Favicon -->
<!-- <link href="{{asset('assets/landing/images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon"> -->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>
	<!-- Header Styles -->
	<header class="header-nav">
		<div class="main-header-nav navbar-fixed-top">
			<div class="container">
			    <nav class="navbar navbar-default bootsnav navbar-sticky navbar-scrollspy menu-style1" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
			        <div class="container ulockd-pdng0">
			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
		                	<a class="navbar-brand ulockd-main-logo2" href="#brand"><img src="{{asset('assets/landing/images/header-logo2.png')}}" class="logo" alt=""></a>
			            </div>
			            <!-- End Header Navigation -->

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			            </div>
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right single-page">
								<li class="active scroll"><a href="#home">Home</a></li>
								<li class="scroll"><a href="#about">About</a></li>
								<li class="scroll"><a href="#feature">Feature</a></li>
								<li class="scroll"><a href="#testimonial">Review</a></li>
								<li class="scroll"><a href="#screenshot">Screenshot</a></li>
								<li class="scroll"><a href="#contact">Support</a></li>
			                </ul>
			            </div><!-- /.navbar-collapse -->
			        </div>
			    </nav>
			</div>
		</div>
	</header>

	<!-- Home Design -->
	<div id="home" class="ulockd-home-slider">
		<div class="container-fluid ulockd-pdng0">
			<div class="row">
				<div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1" class=""></li>
						<li data-target="#carousel" data-slide-to="2" class=""></li>
					</ol>
					<!-- Carousel items -->
					<div class="carousel-inner carousel-zoom">
						<div class="item active"><img class="img-responsive" src="{{asset('assets/landing/images/home/h1.jpg')}}" alt="h1.jpg">
						  <div class="carousel-caption">
							<h1 data-animation="animated zoomInLeft" class="cap-txt">We are amazing</h1>
							<p data-animation="animated bounceInDown">Powerful Responsive App Landing Page</p>
							<button data-animation="animated bounceInUp" class="btn btn-lg ulockd-btn-thm2 hidden-xs"><span class="fa fa-android"> Download Now</span></button>
							<button data-animation="animated bounceInUp" class="btn btn-lg ulockd-btn-thm2 hidden-xs"><span class="fa fa-apple"> Download Now</span></button>
						  </div>
						</div>
					   <div class="item"><img class="img-responsive" src="{{asset('assets/landing/images/home/h2.jpg')}}" alt="h2.jpg">
						  <div class="carousel-caption style2">
							<h1 data-animation="animated zoomInLeft" class="cap-txt">bMax App Landing Template</h1>
							<p data-animation="animated bounceInDown">bMax Powerful Responsive App Landing Page</p>
							<button data-animation="animated bounceInUp" class="btn btn-lg ulockd-btn-thm2 hidden-xs"><span class="fa fa-android"> Download Now</span></button>
						  </div>
						</div>
						<div class="item"><img class="img-responsive" src="{{asset('assets/landing/images/home/h3.jpg')}}" alt="h3.jpg">
						  <div class="carousel-caption animated slideInLeft style3">
							<h1 data-animation="animated zoomInLeft" class="cap-txt">We are innovative</h1>
							<p data-animation="animated bounceInDown">Get start your next awesome project</p>
							<button data-animation="animated bounceInUp" class="btn btn-lg ulockd-btn-thm2 hidden-xs"><span class="fa fa-apple"> Download Now</span></button>
						  </div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
						<a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our About -->
	<section id="about" class="ulockd-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2>About <span class="text-thm2">bMax</span></h2>
						<p>Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan.</p>
						<div class="mt-separator"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="about-box text-center wow fadeInUp" data-wow-duration="1s">
						<div class="ab-thumb">
							<div class="about-icon text-center"><i class="fa fa-sliders"></i></div>
						</div>
						<div class="ab-details">
							<h3>Dedicated support</h3>
							<p class="small">Zorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ipsa ullam dicta suscipit ipsum porro molestias cum nihil.</p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="about-box text-center wow fadeInUp" data-wow-duration="1.3s">
						<div class="ab-thumb">
							<div class="about-icon text-center"><i class="fa fa-download"></i></div>
						</div>
						<div class="ab-details">
							<h3>Easy setup</h3>
							<p class="small">Eorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ipsa ullam dicta suscipit ipsum porro molestias cum nihil.</p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="about-box text-center wow fadeInUp" data-wow-duration="1.6s">
						<div class="ab-thumb">
							<div class="about-icon text-center"><i class="fa fa-mobile"></i></div>
						</div>
						<div class="ab-details">
							<h3>On-the-go</h3>
							<p class="small">Torem ipsum dolor sit amet, consectetur adipisicing elit. Quis ipsa ullam dicta suscipit ipsum porro molestias cum nihil.</p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="about-box text-center wow fadeInUp" data-wow-duration="1.9s">
						<div class="ab-thumb">
							<div class="about-icon text-center"><i class="fa fa-users"></i></div>
						</div>
						<div class="ab-details">
							<h3>Social connect</h3>
							<p class="small">Worem ipsum dolor sit amet, consectetur adipisicing elit. Quis ipsa ullam dicta suscipit ipsum porro molestias cum nihil.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Divider -->
	<section class="ulockd-divider ulockd-bgthm">
		<div class="container">
			<div class="row">
				<div class="col-md-8 wow fadeInLeft" data-wow-duration="1s">
					<h1 class="color-white">bMax Multipurpose Bootstrap Template.</h1>
					<p class="color-white">Sed ut Perspiciatis Unde Omnis Iste Sed ut sit voluptatem accusan tium </p>
				</div>
				<div class="col-md-4 text-center tal-smd wow fadeInRight" data-wow-duration="1.3s">
					<button type="submit" class="btn btn-lg ulockd-btn-white ulockd-mrgn1225">PURCHASE</button>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Service -->
	<section id="feature" class="ulockd-service ulockd-bb-solid-thm">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2>About <span class="text-thm2">bMax</span> Service</h2>
						<p>Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan.</p>
						<div class="mt-separator"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="icon_box text-right tac-smd wow fadeInLeft" data-wow-duration="1s">
						<div class="icon pull-right fn-smd"><i class="fa fa-cogs text-thm2"></i></div>
						<div class="ib_details left">
							<h4>User Settings</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
					<div class="icon_box text-right tac-smd wow fadeInLeft" data-wow-duration="1.3s">
						<div class="icon pull-right fn-smd"><i class="fa fa-envelope text-thm2"></i></div>
						<div class="ib_details left">
							<h4>Messages Inbox</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
					<div class="icon_box text-right tac-smd wow fadeInLeft" data-wow-duration="1.6s">
						<div class="icon pull-right fn-smd"><i class="fa fa-users text-thm2"></i></div>
						<div class="ib_details left">
							<h4>Friends List</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
					<div class="icon_box text-right tac-smd dn-smd wow fadeInLeft" data-wow-duration="1.9s">
						<div class="icon pull-right fn-smd"><i class="fa fa-comments text-thm2"></i></div>
						<div class="ib_details left">
							<h4>Live Chat Messages</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
					<div class="icon_box text-right tac-smd dn-smd dn-md wow fadeInLeft" data-wow-duration="2.1s">
						<div class="icon pull-right fn-smd"><i class="fa fa-calendar text-thm2"></i></div>
						<div class="ib_details left">
							<h4>Calendar / Planner</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-4 dn-xsd text-center wow fadeInUp" data-wow-duration="1s">
					<img class="mt50-smd" src="{{asset('assets/landing/images/service/1.png')}}" alt="1.png">
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="icon_box text-left tac-smd wow fadeInRight" data-wow-duration="1s">
						<div class="icon pull-left fn-smd"><i class="fa fa-map-marker text-thm2"></i></div>
						<div class="ib_details">
							<h4>My Places</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
					<div class="icon_box text-left tac-smd wow fadeInRight" data-wow-duration="1.6s">
						<div class="icon pull-left fn-smd"><i class="fa fa-film text-thm2"></i></div>
						<div class="ib_details">
							<h4>Media Player™</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
					<div class="icon_box text-left tac-smd wow fadeInRight" data-wow-duration="1.6s">
						<div class="icon pull-left fn-smd"><i class="fa fa-picture-o text-thm2"></i></div>
						<div class="ib_details">
							<h4>Weather on-the-go</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
					<div class="icon_box text-left tac-smd dn-smd wow fadeInRight" data-wow-duration="1.9s">
						<div class="icon pull-left fn-smd"><i class="fa fa-plus text-thm2"></i></div>
						<div class="ib_details">
							<h4>And much more!</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
					<div class="icon_box text-left tac-smd dn-smd dn-md wow fadeInRight" data-wow-duration="2.1s">
						<div class="icon pull-left fn-smd"><i class="fa fa-compass text-thm2"></i></div>
						<div class="ib_details">
							<h4>Intuitive Statistics</h4>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Gallery -->
	<section id="screenshot" class="ulockd-service-three">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-uppercase">Our <span class="text-thm2">Screenshot</span></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit necessitatibus maiores fugiat eaque.</p>
					</div>
				</div>
			</div>
            <div class="row">
	            <div class="col-md-12">
	                <!-- Masonry Grid -->
	                <div id="grid" class="masonry-gallery grid-4 clearfix wow bounceIn">

		                <!-- Masonry Item -->
		                <div class="isotope-item creative corporate">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{asset('assets/landing/images/gallery/9.jpg')}}" alt="project">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Gallery Title Here</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{asset('assets/landing/images/gallery/9.jpg')}}" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item corporate design coding">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{asset('assets/landing/images/gallery/10.jpg')}}" alt="project">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Gallery Title Here</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{asset('assets/landing/images/gallery/10.jpg')}}" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item corporate coding">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{asset('assets/landing/images/gallery/11.jpg')}}" alt="project">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Gallery Title Here</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{asset('assets/landing/images/gallery/11.jpg')}}" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item creative">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{asset('assets/landing/images/gallery/12.jpg')}}" alt="project">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Gallery Title Here</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{asset('assets/landing/images/gallery/12.jpg')}}" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item corporate coding">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{asset('assets/landing/images/gallery/13.jpg')}}" alt="project">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Gallery Title Here</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{asset('assets/landing/images/gallery/13.jpg')}}" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item design development">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{asset('assets/landing/images/gallery/14.jpg')}}" alt="project">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Gallery Title Here</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{asset('assets/landing/images/gallery/14.jpg')}}" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>
		                <!-- Masonry = Masonry Item -->
	                </div>
	                <!-- Masonry Gallery Grid Item -->
	            </div>
            </div>
		</div>
	</section>

	<!-- Our Testimonials -->
	<section id="testimonial" class="ulockd-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2>About <span class="text-thm2">bMax</span> Testimonials</h2>
						<p>Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="ulockd-testimonials text-center wow fadeInLeft" data-wow-duration="1s">
						<div class="testi-details">
							<h4><i class="fa fa-quote-left text-thm2"></i></h4>
							<p>Consectetur adipisicing elit. Maiores a molestias, exercitationem at? Neque eaque modi minus consequuntur sapiente quasi amet? Animi.</p>
						</div>
						<div class="testi-thumb">
							<img class="img-responsive img-circle" src="{{asset('assets/landing/images/testimonial/1.jpg')}}" alt="1.jpg">
							<h4>Daniel Forg</h4>
							<p><em>-Designer</em></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="ulockd-testimonials text-center wow fadeInUp" data-wow-duration="1s">
						<div class="testi-details">
							<h4><i class="fa fa-quote-left text-thm2"></i></h4>
							<p>Consectetur adipisicing elit. Maiores a molestias, exercitationem at? Neque eaque modi minus consequuntur sapiente quasi amet? Animi.</p>
						</div>
						<div class="testi-thumb">
							<img class="img-responsive img-circle" src="{{asset('assets/landing/images/testimonial/2.jpg')}}" alt="2.jpg">
							<h4>Daniel Forg</h4>
							<p><em>-Developer</em></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="ulockd-testimonials text-center wow fadeInRight" data-wow-duration="1s">
						<div class="testi-details">
							<h4><i class="fa fa-quote-left text-thm2"></i></h4>
							<p>Consectetur adipisicing elit. Maiores a molestias, exercitationem at? Neque eaque modi minus consequuntur sapiente quasi amet? Animi.</p>
						</div>
						<div class="testi-thumb">
							<img class="img-responsive img-circle" src="{{asset('assets/landing/images/testimonial/3.jpg')}}" alt="3.jpg">
							<h4>Daniel Forg</h4>
							<p><em>-Designer & Developer</em></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our First Divider -->
	<section class="ulockd-service-three ulockd-bgthm">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 text-center">
					<iframe src="" width="100%" height="320" allowfullscreen></iframe>
				</div>
				<div class="col-sm-6 col-md-6 text-center">
					<div class="playstore-details">
						<h2 class="color-white">Get App</h2>
						<h4 class="color-white">Choose your native platform and get started!</h4>
                        <a class="btn ulockd-btn-white wow fadeInLeft ulockd-mrgn1240" href="#">
                            <i class="fa fa-android fa-3x pull-left"></i>
                            <span>Download for</span><br>
                            <b>Android</b>
                        </a>
                        <a class="btn ulockd-btn-white wow fadeInRight ulockd-mrgn1240" href="#">
                            <i class="fa fa-apple fa-3x pull-left"></i>
                            <span>Download for</span><br>
                            <b>Apple IOS</b>
                        </a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Contact -->
	<section id="contact" class="ulockd-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2>About <span class="text-thm2">bMax</span> Support</h2>
						<p>For more info and support, contact us! unde omnis iste natu error sit voluptatem accusan.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="contact-info wow fadeInLeft">
						<div class="contact-details one">
							<ul class="contact-place one">
								<li><span class="flaticon-black-back-closed-envelope-shape" title="bMaxyour@email.com"> <small>bMaxyour@email.com </small></span></li>
								<li><span class="flaticon-old-handphone" title="99 55 66 88 526"> <small> +99 55 66 88 526 </small></span></li>
								<li><span class="flaticon-map-marker" title="Victoria 8007 Australia Envato HQ 121 King Street, Melbourne"> <small>Victoria 8007 Australia Envato  </small></span></li>
								<li><span class="flaticon-checkbox-pen-outline" title="Written Your Message"> <small>Left Some Word </small></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="ulockd-contact-form wow fadeInRight">
                        <form id="contact_form" name="contact_form" class="contact-form" action="#" method="post" novalidate="novalidate">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_name" name="form_name" class="form-control ulockd-form-fg required" placeholder="Your name" required="required" data-error="Name is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_email" name="form_email" class="form-control ulockd-form-fg required email" placeholder="Your email" required="required" data-error="Email is required." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
	                            <div class="col-md-3">
	                                <div class="form-group">
	                                    <input id="form_phone" name="form_phone" class="form-control ulockd-form-fg required" placeholder="Phone" required="required" data-error="Phone Number is required." type="text">
	                                    <div class="help-block with-errors"></div>
	                                </div>
	                            </div>
	                            <div class="col-md-3">
	                                <div class="form-group">
	                                    <input id="form_subject" name="form_subject" class="form-control ulockd-form-fg required" placeholder="Subject" required="required" data-error="Subject is required." type="text">
	                                    <div class="help-block with-errors"></div>
	                                </div>
	                            </div>
                                <div class="col-md-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control ulockd-form-tb required" rows="12" placeholder="Your massage" required="required" data-error="Message is required."></textarea>
		                                <div class="help-block with-errors"></div>
		                            </div>
		                            <div class="form-group ulockd-contact-btn">
		                                <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
		                                <button type="submit" class="btn btn-default ulockd-btn-thm2" data-loading-text="Getting Few Sec...">SUBMIT</button>
		                            </div>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="ulockd-footer">
		<div class="container">
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="ulockd-footer-widget">
    					<img alt="" src="{{asset('assets/landing/images/footer-logo.png')}}" class="img-responsive ulockd-footer-log">
    					<p class="ulockd-ftr-text">Regardless of whether you need to stay in your own house, are searching for help with a more established relative, looking for exhortation on paying for development, we can help you.</p>
    					<ul class="list-unstyled">
    						<li><a href="#"><span class="flaticon-old-handphone text-thm2"></span> +99 55 66 88 526</a> </li>
    						<li><a href="#"><span class="flaticon-black-back-closed-envelope-shape text-thm2"></span> bMaxyour@email.com</a></li>
    						<li><a href="#"><span class="flaticon-house text-thm2"></span> Victoria 8007 Australia Envato HQ 121 King Street, Melbourne.</a></li>
    					</ul>
    				</div>
					<ul class="list-inline footer-font-icon ulockd-mrgn1220">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-feed"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="ulockd-footer-lnews">
						<h3 class="text-uppercase">Latest News</h3>
						<div class="ulockd-media-box">
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="{{asset('assets/landing/images/blog/s1.jpg')}}" alt="s1.jpg">
								    </a>
							    </div>
							    <div class="media-body">
									<a href="#" class="post-date">21 January, 2017</a>
							    	<h4 class="media-heading">Let's Move Blog</h4>
							    	<p>Notice coding for Alzheimer's conclusion steps nearer...</p>
							    </div>
							</div>
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="{{asset('assets/landing/images/blog/s2.jpg')}}" alt="s2.jpg">
								    </a>
							    </div>
							  	<div class="media-body">
									<a href="#" class="post-date">21 January, 2017</a>
							    	<h4 class="media-heading">Let's Move Blog</h4>
							    	<p>Notice coding for Alzheimer's conclusion steps nearer...</p>
							  	</div>
							</div>
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="{{asset('assets/landing/images/blog/s3.jpg')}}" alt="s3.jpg">
								    </a>
							    </div>
							  	<div class="media-body">
									<a href="#" class="post-date">21 January, 2017</a>
							    	<h4 class="media-heading">Let's Move Blog</h4>
							    	<p>Notice coding for Alzheimer's conclusion steps nearer...</p>
							  	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-2 ulockd-pad395">
					<div class="ulockd-footer-qlink">
						<h3 class="text-uppercase">TWITTER</h3>
						<div class="twitter"></div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="ulockd-footer-flickr">
						<h3 class="text-uppercase">Flickr Feed</h3>
						<ul class="list-inline">
							<li>
								<div class="thumb">
									<img alt="flckr1.jpg" src="{{asset('assets/landing/images/gallery/flckr1.jpg')}}" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="{{asset('assets/landing/images/gallery/flckr2.jpg')}}" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="{{asset('assets/landing/images/gallery/flckr3.jpg')}}" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="{{asset('assets/landing/images/gallery/flckr4.jpg')}}" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="{{asset('assets/landing/images/gallery/flckr5.jpg')}}" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="{{asset('assets/landing/images/gallery/flckr6.jpg')}}" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="{{asset('assets/landing/images/gallery/flckr7.jpg')}}" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="{{asset('assets/landing/images/gallery/flckr8.jpg')}}" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our CopyRight Section -->
	<section class="ulockd-copy-right">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="color-white">Copyright© 2019</p>
				</div>
			</div>
		</div>
	</section>

<a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{asset('assets/landing/js/jquery-1.12.4.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/bootsnav.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/scrollto.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/gallery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/video-player.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/jquery.barfiller.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/timepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/tweetie.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/landing/js/script.js')}}"></script>
</body>
</html>

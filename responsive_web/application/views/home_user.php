<html lang="en">
<head>
<title>ZanTrav</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url()?>template/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template/styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">ZanTrav</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li class="active"><a href="../objectwisata/data_user">artikel</a></li>
									<li><a href="../objectwisata/data_jell">Gallery</a></li>
									<li><a href="<?php echo base_url()?>template/contact.html">Home</a></li>
								</ul>
							</nav>
							<div class="header_phone ml-auto">Call us:0822-6891-6913</div>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.html">ZanTrav</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="../template/inex.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(<?php echo base_url()?>template/images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>LIBURAN TIBA!</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(<?php echo base_url();?>template/images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Jadikan liburanmu menyenangkan</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(<?php echo base_url();?>template/images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Kami ada untuk anda </h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="home_page_nav">
				<ul class="d-flex flex-column align-items-end justify-content-end">
					<li><a href="#" data-scroll-to="#destinations">promosi </a></li>
					<li><a href="#" data-scroll-to="#testimonials">Testimonials</span></a></li>
					<li><a href="#" data-scroll-to="#news">Latest</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Intro -->

<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_container">
						<div class="row">

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="<?php echo base_url()?>template/images/beach.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Destinasi Terbaik</div>
									</div>
								</div>
							</div>

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="<?php echo base_url()?>template/images/wallet.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Harga Yang Pas Kantong</div>
									</div>
								</div>
							</div>

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="<?php echo base_url()?>template/images/suitcase.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Pelayanan Yang Memuaskan</div>
        							</div>
								</div>
							</div>

						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Destinations -->

	<div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">Peomosi!</div>
					<div class="section_title"><h2>Destinasi Yang Populer </h2></div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="<?php echo base_url()?>template/images/Jam-Gadang-di-Bukit-Tinggi.jpg" alt="">
								<div class="spec_offer text-center"><a href="#">Special Offer</a></div>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">Bukittinggi</a></div>
								<div class="destination_subtitle"><p>Jam Gadang</p></div>
								<div class="destination_price">200K</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="<?php echo base_url()?>template/images/Basilica-of-Sacre-Coeur-in-Montmartre1-1_u867rf.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">Paris</a></div>
								<div class="destination_subtitle"><p>Basilica-of-Sacre-Coeur-in-Montmartre</p></div>
								<div class="destination_price">679K</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="<?php echo base_url()?>template/images/destination_3.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">San Francisco</a></div>
								<div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
								<div class="destination_price">2M</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="<?php echo base_url()?>template/images/destination_4.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">Paris</a></div>
								<div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
								<div class="destination_price">700K</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials" id="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" style="background-image:url(<?php echo base_url()?>template/images/testimonials.jpg)" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">HI Pelanggan</div>
					<div class="section_title"><h2>Selamat Datang</h2></div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial"><h1>Ingin Liburan ?</h1></div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>Jangan Galau...</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Disini tempat untuk memesan tiket yang tepat menuju destinasi liburan yang luar biasa,elegan,dan berkelas</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Dapatkan diskon dan promosi spesial dari kami setiap tahun</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="test_nav">
			<ul class="d-flex flex-column align-items-end justify-content-end">
				<li><a href="#">City Breaks Clients<span>01</span></a></li>
				<li><a href="#">Cruises Clients<span>02</span></a></li>
				<li><a href="#">All Inclusive Clients<span>03</span></a></li>
			</ul>
		</div>
	</div>

	<!-- News -->

	<div class="news" id="news">
		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div class="news_container">
						
						<!-- News Post -->
						<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="news_post_image"><img src="<?php echo base_url()?>template/images/news_1.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>19</div>
									<div>november</div>
								</div>
								<div class="news_post_title"><a href="#">News 1</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">simpan sebahagian uangmu!</a></li>
									</ul>
								</div>
								<div class="news_post_text">
								</div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="news_post_image"><img src="<?php echo base_url()?>template/images/news_2.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>20</div>
									<div>Nov</div>
								</div>
								<div class="news_post_title"><a href="#">News 2</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">Tips liburan</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>hindari pemakaian cream kulit berlebihan </p>
								</div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="news_post_image"><img src="<?php echo base_url()?>template/images/news_3.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>21</div>
									<div>Nov</div>
									<div>Hari ini</div>
								</div>
								<div class="news_post_title"><a href="#">News 3</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">Tips liburan</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>perhatikan barang yang dibawa!</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- News Sidebar -->
				<div class="col-xl-4">
					<div class="travello">
						<div class="background_image" style="background-image:url(<?php echo base_url()?>template/images/travello.jpg)"></div>
						<div class="travello_content">
							<div class="travello_content_inner">
								<div></div>
								<div></div>
							</div>
						</div>
						<div class="travello_container">
							<a href="#">
								<div class="d-flex flex-column align-items-center justify-content-end">
									<span class="travello_title">dapatkan 20% Diskon</span>
									<span class="travello_subtitle">4 Orang pembeli pertama</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" style="background-image:url(<?php echo base_url()?>template/images/footer_1.jpg)" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">ayo berlangganan!
							</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<div><input type="text" class="newsletter_input newsletter_input_name" id="newsletter_input_name" placeholder="nama" required="required"><div class="input_border"></div></div>
									<div><input type="email" class="newsletter_input newsletter_input_email" id="newsletter_input_email" placeholder="alamat email" required="required"><div class="input_border"></div></div>
								</div>
								<div><button class="newsletter_button">langganan</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="<?php echo base_url()?>template/images/sign.svg" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Smk It negeri 2 kec.guguak</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="<?php echo base_url()?>template/images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">address</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>tan malaka km 13</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="<?php echo base_url()?>template/images/around.svg" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li>zandri082@gmail.com</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
	</footer>
</div>

<script src="<?php echo base_url()?>template/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>template/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url()?>template/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url()?>template/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/easing/easing.js"></script>
<script src="<?php echo base_url()?>template/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url()?>template/js/custom.js"></script>
</body>
</html>
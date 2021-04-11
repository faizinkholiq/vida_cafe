<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vida Café & Bistro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>css/style.css">

	<!-- Modernizr JS -->
	<script src="<?=base_url('assets/public/')?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.html">Vida Café & Bistro<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li><a href="<?=site_url()?>">Home</a></li>
							<li class="active"><a href="<?=site_url('menu')?>">Menu</a></li>
							<li><a href="<?=site_url('gallery')?>">Gallery</a></li>
							<li><a href="<?=site_url('reservation')?>">Reservation</a></li>
							<li><a href="<?=site_url('about')?>">About</a></li>
							<li><a href="<?=site_url('contact')?>">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?=base_url('assets/public/')?>images/hero_3.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>See <em>Our</em> Menu</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-featured-menu" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Our Delicous Menu</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Dibawah ini adalah menu-menu kami yang selalu jadi favorit pelanggan.</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="<?=base_url('assets/public/')?>images/menu/americano.JPG" class="img-responsive" loading="lazy" alt="Kopi" style="
							    width: 255px;
								height: 170px;
								object-fit: cover;
							">
						<h3>Americano</h3>
						<span class="fh5co-price"><sup>Rp</sup>11.000</span>
						<p>Americano adalah minuman kopi yang berbasis Espresso dengan komposisi kopi 60ml yang dicampur dengan air panas.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="<?=base_url('assets/public/')?>images/menu/kopi_sanger.JPG" class="img-responsive" loading="lazy" alt="French Fries" style="
							width: 255px;
							height: 170px;
							object-fit: cover;
						">
						<h3>Sanger Arabica</h3>
						<span class="fh5co-price"><sup>Rp</sup>12.000</span>
						<p>Sanger Arabica adalah minuman kopi yang berbasis Americano yang dicampur dengan susu kental manis.</p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="<?=base_url('assets/public/')?>images/menu/smoked_chicken_fried_rice.jpeg" class="img-responsive" loading="lazy" alt="Fried Chicken" style="
							width: 255px;
							height: 170px;
							object-fit: cover;
						">
						<h3>Smoked Chicken Rice</h3>
						<span class="fh5co-price"><sup>Rp</sup>10.000</span>
						<p>Smoked Chicken Rice adalah nasi goreng dengan daging asap yang memiliki rasa gurih dan aroma yang khas, pasti bikin nagih.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="<?=base_url('assets/public/')?>images/menu/cappucino.JPG" class="img-responsive" loading="lazy" alt="Cappucino" style="
							width: 255px;
							height: 170px;
							object-fit: cover;
						">
						<h3>Capucinno</h3>
						<span class="fh5co-price"><sup>Rp</sup>10.000</span>
						<p>Capucinno adalah minuman kopi yang berbasis Espresso dengan komposisi kopi 60ml yang dicampur dengan susu yang disteam dengan suhu 60°c dan memiliki busa atau foam yang tebal dibagian atasnya.</p>
					</div>
				</div>
				<div class="col-md-12" style="height: 5rem;"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="<?=base_url('assets/public/')?>images/menu/french_fries.jpg" class="img-responsive" loading="lazy" alt="Kopi" style="
							width: 170px;
							height: 255px;
							object-fit: cover;
							transform: rotate(270deg);
							">
						<h3>French Fries</h3>
						<span class="fh5co-price"><sup>Rp</sup>11.000</span>
						<p>Kentang goreng dengan rasa gurih dipadukan dengan saus, pasti yummy banget</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="<?=base_url('assets/public/')?>images/menu/nasi_goreng.JPG" class="img-responsive" loading="lazy" alt="French Fries" style="
							width: 255px;
							height: 170px;
							object-fit: cover;
						">
						<h3>Nasi Goreng</h3>
						<span class="fh5co-price"><sup>Rp</sup>12.000</span>
						<p>Nasi Goreng dengan bumbu khas cafe kami dijamin kalian suka</p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="<?=base_url('assets/public/')?>images/menu/cafe_latte.JPG" class="img-responsive" loading="lazy" alt="Fried Chicken" style="
							width: 255px;
							height: 170px;
							object-fit: cover;
						">
						<h3>Caffe Late</h3>
						<span class="fh5co-price"><sup>Rp</sup>10.000</span>
						<p>Cafe Latte adalah minuman kopi yang berbasis Espresso dengan komposisi kopi 30ml yang dicampur susu yang disteam dengan suhu 60°c dan memiliki busa atau foam yang tipis di bagian atasnya.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="<?=base_url('assets/public/')?>images/menu/mojito_bluesky.JPG" class="img-responsive" loading="lazy" alt="Cappucino" style="
							width: 255px;
							height: 170px;
							object-fit: cover;
							object-position: bottom;
						">
						<h3>Mojito Blue Sky</h3>
						<span class="fh5co-price"><sup>Rp</sup>10.000</span>
						<p>Minuman yang bikin mood mu baik.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
			<div class="container">
				<div class="row row-pb-md col-md-10 col-md-push-1">
					<div class="col-md-4 fh5co-widget">
						<h4>Vida Café & Bistro</h4>
						<p>Cafe kesukaan kalian tempatnya nongkrong, kencan, temu kangen dll.</p>
					</div>
					<div class="col-md-4 fh5co-widget">
						<h4>Links</h4>
						<ul class="fh5co-footer-links" style="display: inline-flex;">
							<li style="margin-right: 20px"><a href="#">Home</a></li>
							<li style="margin-right: 20px"><a href="#">About</a></li>
							<li style="margin-right: 20px"><a href="#">Menu</a></li>
							<li style="margin-right: 20px"><a href="#">Gallery</a></li>
						</ul>
					</div>
	
					<div class="col-md-4 col-md-push-1 fh5co-widget">
						<h4>Contact Information</h4>
						<ul class="fh5co-footer-links"> 
							<li>8, Jl. Raya Pasar Minggu No.29, RT.8/RW.9, Pancoran, Kec. Pancoran, Kota Jakarta Selatan, <br> Daerah Khusus Ibukota Jakarta 12780</li>
							<li><a href="tel://1234567920">0812-1341-7778</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						</ul>
					</div>
	
				</div>
	
				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2020 Vida Cafe & Bistro. All Rights Reserved.</small> 
							<small class="block">Made with 🖤 <a href="http://nnf-pro.com" target="_blank">NNF Production</a></small>
							<!-- <small class="block">Template by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a></small> -->
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-linkedin2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
	
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?=base_url('assets/public/')?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=base_url('assets/public/')?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url('assets/public/')?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url('assets/public/')?>js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url('assets/public/')?>js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="<?=base_url('assets/public/')?>js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="<?=base_url('assets/public/')?>js/main.js"></script>

	</body>
</html>


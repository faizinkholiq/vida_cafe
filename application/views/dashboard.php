<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vida Café & Bistro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
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
	<link rel="shortcut icon" type="<?=base_url('assets/images/profile/').$profile['logo'] ?>" href="Favicon_Image_Location"/>
	
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
    	<!-- jQuery -->
	<script src="<?=base_url('assets/public/')?>js/jquery.min.js"></script>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.html"><?=$profile['name'] ?><span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul class="list-menu">
							<li class="mn_home"><a href="<?=site_url()?>">Home</a></li>
							<li class="mn_menu"><a href="<?=site_url('menu')?>">Menu</a></li>
							<li class="mn_gallery"><a href="<?=site_url('gallery')?>">Gallery</a></li>
							<li class="mn_reservation"><a href="<?=site_url('reservation')?>">Reservation</a></li>
							<li class="mn_about"><a href="<?=site_url('about')?>">About</a></li>
							<li class="mn_contact"><a href="<?=site_url('contact')?>">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
	</nav>

    <?php $this->load->view($content_view) ?>
	
	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md col-md-10 col-md-push-1">
				<div class="col-md-4 fh5co-widget">
					<h4><?=$profile['name'] ?></h4>
					<p><?=$profile['description'] ?></p>
				</div>
				<div class="col-md-4 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links" style="display: inline-flex;">
						<li style="margin-right: 20px"><a href="<?=site_url('home') ?>">Home</a></li>
						<li style="margin-right: 20px"><a href="<?=site_url('about') ?>">About</a></li>
						<li style="margin-right: 20px"><a href="<?=site_url('menu') ?>">Menu</a></li>
						<li style="margin-right: 20px"><a href="<?=site_url('gallery') ?>">Gallery</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links"> 
						<li><?=$profile['address'].', '.$profile['city'].' '.$profile['zip'] ?> <br> <?=$profile['state'] ?></li>
						<li><a href="tel://1234567920">0812-1341-7778</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2020 <?=$profile['name'] ?>. All Rights Reserved.</small> 
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

    <script>
        var highlight_menu = "<?php echo !empty($highlight_menu)? $highlight_menu : '' ?>";

        $(document).ready(function () {
            $(".list-menu li").removeClass('active');
            if(highlight_menu != ""){
                $('nav .mn_'+highlight_menu).addClass('active');
            }
        });
    </script>
	</body>
</html>


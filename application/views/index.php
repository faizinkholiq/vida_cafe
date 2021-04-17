	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?=base_url('assets/public/')?>images/bc.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn" style="padding-top: 5vw;">
							<img src="<?=base_url('assets/images/profile/').$profile['logo'] ?>" style="    
								    width: 14vw;
									filter: grayscale(1);
									margin-bottom: 5vh;">
							<h1>The Best Café <em>&amp;</em> Restaurant <em>in</em> Your Heart <span style="font-size: 45px; color: #e9262c;">🖤</span></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
					<img src="<?=base_url('assets/images/profile/').$profile['cover'] ?>" alt="Vida Cafe & Bistro" style="width: 900px;height: 425px; object-fit: cover;
				">
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>The Restaurant</h2>
						<p><?=$profile['story'] ?></p>
						<p><a href="<?=site_url('about')?>" class="btn btn-primary btn-outline">Our History</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-featured-menu" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box" style="height: 1rem;">
					<h2>Favorite Menu</h2>
					<div class="row">
						<div class="col-md-12">
							<p>Daftar menu yang tersedia sekarang, semuanya enak kok. Semoga kalian suka :)</p>
						</div>
					</div>
				</div>
				<?php foreach($favorite_menu as $key => $value): ?>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="<?=base_url('assets/images/menu/').$value['photo']?>" class="img-responsive" loading="lazy" alt="Kopi" style="
							    width: 255px;
								height: 170px;
								object-fit: cover;
							">
						<h3><?=$value['name'] ?></h3>
						<span class="fh5co-price"><sup>Rp</sup><?=number_format($value['price'],2,',','.') ?></span>
						<p><?=$value['description'] ?></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<div id="fh5co-featured-testimony" class="fh5co-section" style="margin-top:100px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box" style="margin-bottom:50px;">
					<h2>Testimony</h2>
				</div>
				<div class="row">
					<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
							<img src="<?=base_url('assets/public/')?>images/bob_sadino.jpeg" alt="" style="width: 100%;object-fit: contain; filter: grayscale(1);">
					</div>
					<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
						<blockquote>
							<p> &ldquo; <?=$profile['motto'] ?> &rdquo;</p>
							<p class="author"><cite>&mdash; Owner</cite></p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-slider" class="fh5co-section animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="fh5co-heading">
						<h2>Our Best <em>&amp;</em> Unique Menu</h2>
						<p>Di bawah ini adalah menu andalan kami yang selalu menjadi favorit pelanggan, hope you like it :)</p>
					</div>
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<aside id="fh5co-slider-wrwap">
					<div class="flexslider">
						<ul class="slides">
						<?php foreach($unique_menu as $key => $value): ?>
							<li style="background-image: url(<?=base_url('assets/images/menu/').$value['photo'] ?>">
								<div class="overlay-gradient"></div>
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
											<div class="slider-text-inner">
												<div class="desc">
														<h2><?=$value['name'] ?></h2>
														<p><?=$value['description'] ?></p>
														<!-- <a><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<?php endforeach; ?>		   	
					  	</ul>
				  	</div>
				</aside>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(<?=base_url('assets/public/')?>images/bc.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Book a Table</h2>
					<p>Untuk melakukan booking silahkan menuju halaman reservasi melalui link di bawah ini.</p>
					<p><a href="<?=site_url('reservation') ?>" class="btn btn-primary btn-outline">Book Now</a></p>
				</div>
			</div>
		</div>
	</div>
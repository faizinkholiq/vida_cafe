<style>
	.fh5co-heading{
		margin-bottom: 10px!important;
	}
</style>
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
			<div class="row" style="margin-top:50px; margin-bottom: 50px;">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Our Delicous Menu</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Dibawah ini adalah menu-menu kami yang selalu jadi favorit pelanggan.</p>
						</div>
					</div>
				</div>

				<?php foreach($menu as $key => $value): ?>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box" style="margin-top:50px;">
						<div class="fh5co-item">
							<img src="<?=base_url('assets/images/menu/').$value['photo'] ?>" class="img-responsive" loading="lazy" alt="<?=$value['name'] ?>" style="
									width: 255px;
									height: 170px;
									object-fit: cover;
								">
							<h3><?=$value['name'] ?></h3>
							<span class="fh5co-price"><sup>Rp</sup><?=number_format($value['price'],2,',','.') ?></span>
							<p style="min-height: 50px;"><?=$value['description'] ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

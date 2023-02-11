<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?=base_url('assets/public/')?>images/nbg.png);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						<h1>See <em>Our</em> Gallery</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div id="fh5co-gallery" class="fh5co-section">
	<div class="container">
		<div class="row" style="margin-top:50px;">
			<div class="col-md-12 fh5co-heading animate-box" style="height: 0; margin-bottom: 130px!important;">
				<h2>Our Gallery</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Beberapa momen di Vida Cafe & Bistro yang berhasil kami abadikan</p>
					</div>
				</div>
			</div>
			
			<?php foreach($menu as $key => $value): ?>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img lozad" data-background-image="<?=base_url('assets/images/gallery/').$value['source'] ?>" data-trigger="zoomerang"></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?=base_url('assets/public/')?>js/zoomerang.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
	const observer = lozad();

	$(document).ready(function(){
		observer.observe()
		
		Zoomerang
		.config({
		maxHeight: 600,
		maxWidth: 900,
		bgColor: '#000',
		bgOpacity: .85
		})
		.listen('[data-trigger="zoomerang"]')
	});
</script>


<style>
	.fh5co-heading {
		margin-bottom: 10px !important;
	}

	.modal-window {
		position: fixed;
		background-color: rgba(0, 0, 0, 0.5);
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 999;
		visibility: hidden;
		opacity: 0;
		pointer-events: none;
		transition: all 0.3s;
	}

	.modal-window:target {
		visibility: visible;
		opacity: 1;
		pointer-events: auto;
	}

	.modal-window>div {
		width: 400px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		padding: 2em;
		background: #232323;
		color:white;
		font-weight:bold;
		font-size: 15px;
	}

	.modal-window header {
		font-weight: bold;
	}

	.modal-window h1 {
		font-size: 150%;
		margin: 0 0 15px;
	}

	.modal-close {
		color: #aaa;
		line-height: 50px;
		font-size: 80%;
		position: absolute;
		right: 0;
		text-align: center;
		top: 0;
		width: 70px;
		text-decoration: none;
	}

	.modal-close:hover {
		color: black;
	}
</style>
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
	style="background-image: url(<?=base_url('assets/public/')?>images/bc.png);" data-stellar-background-ratio="0.5">
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
			<div onclick="DetailAction(<?=$value['id']?>)"
				class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box"
				style="margin-top:50px; max-height: 35rem;">
				<div class="fh5co-item">
					<img src="<?=base_url('assets/images/menu/').$value['photo'] ?>" class="img-responsive"
						loading="lazy" alt="<?=$value['name'] ?>" style="
								width: 255px;
								height: 170px;
								object-fit: cover;
								cursor: pointer;
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

<div id="menu_modal" class="modal-window">
	<div>
		<a href="#!" onclick="CloseModal('menu_modal')" title="Close" class="modal-close">Close</a>
		<div>
			<img id="dtImg" src="" alt="">
			<div id="dtName"></div>
			<div id="dtPrice"></div>
			<div id="dtDescription"></div>
		</div>
	</div>
</div>

<script>
	let data = <?=json_encode($menu) ?> ;
	let base = '<?=base_url() ?>';

	function DetailAction(id) {
		let row = data.filter(a => a.id == id)
		if (row.length > 0) {
			$('#dtImg').attr('src', base + 'assets/images/menu/'+ row[0].photo)
			$('#dtName').text(row[0].name);
			$('#dtPrice').text(row[0].price);
			$('#dtDescription').text(row[0].description);
			OpenModal('menu_modal');
		}
	}

	function OpenModal(el) {
		$('#' + el).css({
			'visibility': 'visible',
			'opacity': '1',
			'pointer-events':'all',
		})
	}

	function CloseModal(el) {
		$('#' + el).css({
			'visibility': 'hidden',
			'opacity': '0',
			'pointer-events':'none',
		})
	}
</script>
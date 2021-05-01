<style>
	.fh5co-nav {
		z-index: 998;
	}

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
		width: 80rem;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background: #232323;
		color: white;
		font-size: 15px;
	}

	.modal-window .my-modal-container{
		display: flex;
		flex-direction: column;
		padding: 0;
		margin: 0;
		height: 10%;
		width: 100%;
		min-height: 100%;
	}

	.modal-window .my-modal-body{
		padding: 1rem 3rem 1rem;
		flex: 1;
		width: 100%;
		display: flex;
    	flex-direction: column;
	}

	.my-modal-body .description{
		font-size: 18px;
		line-height: 25px;
		width: 95%;
		text-align: justify;
	}

	.modal-window .my-modal-footer{
		padding: 1rem 2rem 1rem;
		height: 7rem;
		width: 100%;
		display: flex;
		justify-content: flex-end;
	}

	.modal-close {
		color: #aaa;
		line-height: 50px;
		font-size: 80%;
		position: absolute;
		right: 0;
		text-align: center;
		top: 0;
		text-decoration: none;
	}

	.modal-close svg:hover {
		color: black;
		opacity: 1;
	}

	.modal-close svg{
		width: 2rem;
		margin-top: 1.5rem;
		margin-right: 1.6rem;
		filter: invert(1);
		opacity: 0.7;
		transition: all 0.5s ease;
	}

	.sub-category {
		color: white;
		font-weight: bold;
		font-size: 30px;
		font-family: 'Satisfy', cursive;
		display: flex;
		flex-direction: row;
		width: 100%;
	}
	.sub-category:before, .sub-category:after{
		content: "";
		flex: 1 1;
		border: dotted #656565;
		border-width: 0.2em 0 0;
		margin: auto;
	}
	.sub-category:before {
		margin-right: 20px
	}
	.sub-category:after {
		margin-left: 20px
	}
	#fh5co-footer{
		padding: 0!important;
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
			<div class="col-md-12 fh5co-heading animate-box" style="margin-bottom: 5rem!important;">
				<h2>Our Delicous Menu</h2>
				<div class="row">
					<div class="col-md-12">
						<p>Dibawah ini adalah menu-menu kami yang selalu jadi favorit pelanggan.</p>
					</div>
				</div>
			</div>

			<?php foreach($list_category as $k => $v): ?>
			<div class="col-md-12">
				<div class="sub-category">
					<?=$v['name'] ?><span style="color: #ea272d; margin-left: 5px; font-size: 3rem;">.</span>
				</div>
			</div>
			<?php foreach($menu as $key => $value): ?>
			<?php if($value['category'] == $v['id']): ?>
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box"
				style="margin-top:50px; cursor: pointer;">
				<div onclick="DetailAction(<?=$value['id']?>)" class="fh5co-item" style="height: 35rem;">
					<img data-src="<?=base_url('assets/images/menu/').$value['photo'] ?>" class="img-responsive lozad"
						loading="lazy" alt="<?=$value['name'] ?>" style="
								width: 255px;
								height: 170px;
								object-fit: cover;
								cursor: pointer;
							">
					<h3><?=$value['name'] ?></h3>
					<span class="fh5co-price"><sup>Rp</sup><?=number_format($value['price'],2,',','.') ?></span>
					<!-- <p style="min-height: 50px;"><?php //echo $value['description'] ?></p> -->
				</div>
			</div>
			<?php endif; ?>
			<?php endforeach; ?>
			<div class="col-md-12" style="height: 2rem;"></div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div id="menu_modal" class="modal-window" onclick="CloseModal('menu_modal')">
	<div>
		<a href="#!" onclick="CloseModal('menu_modal')" title="Close" class="modal-close">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
		</a>
		<div class="my-modal-container">
			<img style="
				width: 100%;
				height: 35rem;
				object-fit: cover;
			" id="dtImg" src="" alt="Menu Image">
			<div class="my-modal-body">
				<div style="font-size: 35px;">
					<span id="dtName" style="font-weight:bold;"></span>
					<span style="font-size: 25px; margin: 0 10px;">|</span>
					<span id="dtPrice" style="font-size: 30px; color: #fee856;"></span>
				</div>
				<div class="description" id="dtDescription"></div>
			</div>
			<div class="my-modal-footer">
				<button type="button" class="btn btn-primary btn-outline" onclick="CloseModal('menu_modal')" style="height: 4rem;">Close</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
	const data = <?=json_encode($menu) ?> ;
	const base = '<?=base_url() ?>';
	const observer = lozad();
		
	$(document).ready(function(){
		observer.observe()
		$('#menu_modal').find('div').click(function(e){
			e.stopPropagation();
		})
	});

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
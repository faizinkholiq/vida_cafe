<style>
	#fh5co-reservation-form .fh5co-heading {
		margin-bottom: 50px;		
	}  

	.fh5co-nav {
		z-index: 998;
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
		width: 55rem;
		position: absolute;
		top: 30%;
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
		padding: 6rem 4rem 1rem;
		flex: 1;
		font-size: 25px;
		font-weight: bold;
		width: 100%;
		text-align: center;
		display: flex;
		flex-direction: column;
	}


	.modal-window .my-modal-footer{
		padding: 0rem 2rem 2rem;
		height: 7rem;
		width: 100%;
		display: flex;
		justify-content: center;
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

	.custom_select option{
		color: #555;
	}
</style>
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?=base_url('assets/public/')?>images/nbg.png);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						<h1>Reserved a Table Today!</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div id="fh5co-reservation-form" class="fh5co-section">
	<div class="container">
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2>Reservation</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Silahkan isi form di bawah ini untuk melakukan reservasi</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
				<form action="<?=site_url('admin/reservation/send') ?>" id="form-wrap" method="POST">
					<div class="row form-group">
						<div class="col-md-12">
							<label for="name">Your Name</label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="name">Contact</label>
							<input type="text" class="form-control" id="contact" name="contact" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="many">How Many People</label>
							<input type="number" class="form-control" id="many" name="people" min="1" value="1" required>
							<!-- <select name="people" id="many" class="form-control custom_select">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="> 10">> 10</option>
								<option value="> 20">> 20</option>
								<option value="> 30">> 30</option>
							</select> -->
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="many">Type</label>
							<select name="type" id="type" class="form-control custom_select">
								<option value="Indoor">Indoor</option>
								<option value="Outdoor">Outdoor</option>
								<option value="Indoor + Outdoor">Indoor + Outdoor</option>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="taskdatetime">When</label>
							<input name="time" type="text" name="task-datetime" id="taskdatetime" class="form-control" required/>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<div id="reservation_modal" class="modal-window">
	<div>
		<a href="#!" onclick="CloseModal('reservation_modal')" title="Close" class="modal-close">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
		</a>
		<div class="my-modal-container">
			<div class="my-modal-body">
				<p id="my_message">Terimakasih Telah Melakukan Pemesanan, Silahkan Cetak Tiket Booking Anda</p>
			</div>
			<div class="my-modal-footer">
				<button id="btn_print_invoice" type="button" class="btn btn-primary btn-outline" data-id="" style="height: 4rem;" onclick="PrintAction()">Print Invoice</button>
				<button id="btn_close" type="button" class="btn btn-primary btn-outline" onclick="CloseModal('reservation_modal')" style="height: 4rem;">Close</button>
			</div>
		</div>
	</div>
</div>

<script src="<?=base_url('assets/public/')?>js/moment.min.js"></script>
<script src="<?=base_url('assets/public/')?>js/bootstrap-datetimepicker.js"></script>
<script>
	let flash_msg = <?=json_encode($this->session->flashdata('msg')) ?>;
	let site = "<?=site_url() ?>";

	$(document).ready(function(){
		if(flash_msg != null){
			if(flash_msg.success === 1){
				$('#btn_close').hide();
				$('#btn_print_invoice').show();
				$('#btn_print_invoice').attr('data-id', flash_msg.new_id);
			}else{
				$('#btn_close').show();
				$('#btn_print_invoice').hide();
				$('#btn_print_invoice').attr('data-id', null);
			} 
			$('#my_message').text(flash_msg.message);
			OpenModal('reservation_modal')
		}
	});

	function PrintAction() {
		const id = $('#btn_print_invoice').data('id');
		window.open(site+"/reservation/print/"+id, '_blank');
		CloseModal('reservation_modal')
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


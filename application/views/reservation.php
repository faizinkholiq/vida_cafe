<style>
	#fh5co-reservation-form .fh5co-heading {
		margin-bottom: 50px;		
	}  
</style>
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?=base_url('assets/public/')?>images/hero_3.png);" data-stellar-background-ratio="0.5">
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
			
			<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
				<form action="<?=site_url('admin/reservation/send') ?>" id="form-wrap" method="POST">
					<div class="row form-group">
						<div class="col-md-12">
							<label for="name">Your Name</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="name">Contact</label>
							<input type="text" class="form-control" id="contact" name="contact">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="many">How Many People</label>
							<select name="people" id="many" class="form-control custom_select">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4+">4+</option>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="taskdatetime">When</label>
							<input name="time" type="text" name="task-datetime" id="taskdatetime" class="form-control"/>
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



<style>
	#fh5co-contact .fh5co-heading {
		margin-bottom: 50px;		
	}  

	#fh5co-contact {
		padding: 5em 0 1em;
	}
</style>
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?=base_url('assets/public/')?>images/bc.png);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						<h1>Get <em>in</em> Touch</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div id="fh5co-contact" class="fh5co-section animate-box">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Don&#39;t be shy, let&#39;s say.</h2>
				<p>Karena kesan dan saran anda sangat bermakna bagi kami, untuk lebih baik dalam melayani</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
				<form action="<?=site_url('admin/inbox/send') ?>" id="form-wrap" method="POST">
					<div class="row form-group">
						<div class="col-md-12">
							<label for="name">Your Name</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="email">Your Email</label>
							<input type="text" class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="message">Your Message</label>
							<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
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
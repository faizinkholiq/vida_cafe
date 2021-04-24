	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?=base_url('assets/public/')?>images/bc.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>About <em>our</em> Restaurant</h1>
							<!-- <h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="fh5co-section" style="padding-bottom: 0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
					<img src="<?=base_url('assets/images/profile/').$profile['cover'] ?>" alt="Vida Cafe & Bistro" style="
						width: 615px;
						height: 380px;
						object-fit: cover;
						margin-left: 39rem;
					">
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>The Restaurant</h2>
						<p><?=$profile['story'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-timeline" style="padding:5em">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Our Experience</h3></div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-genius"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading" style="margin-top: 4.7rem;">
									<h3 class="timeline-title">The Founders Meet</h3>
								</div>
							</div>
						</li><br/>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-genius"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading" style="margin-top: 4.7rem;">
									<h3 class="timeline-title">Create A Restaurant</h3>
								</div>
							</div>
						</li><br/>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-genius"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading" style="margin-top: 4.7rem;">
									<h3 class="timeline-title">Added Employees</h3>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
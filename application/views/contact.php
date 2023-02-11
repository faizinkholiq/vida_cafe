<style>
	#fh5co-contact .fh5co-heading {
		margin-bottom: 50px;		
	}  

	#fh5co-contact {
		padding: 5em 0 1em;
	}

	.testimony-container{
		padding: 1rem 2rem;
		max-height: 60rem;
   		overflow: auto;
	}

	.testimony-container::-webkit-scrollbar {
		width: 8px;
	}

		/* Track */
	.testimony-container::-webkit-scrollbar-track {
		border-radius: 30px;
	}

		/* Handle */
	.testimony-container::-webkit-scrollbar-thumb {
		background: #fff;;
		border-radius: 30px;
	}


	.testimony-item.left{
		margin-bottom: 2rem;
		background: #f9f9f9;
		padding: 1.5rem 2rem;
		border-radius: 2rem;
		color: #46464a;
		width: 90%;
    	float: left;
	}

	.testimony-item.right{
		margin-bottom: 2rem;
		background: #6c6fd6;
		padding: 1.5rem 2rem;
		border-radius: 2rem;
		color: white;
		width: 90%;
    	float: right;
	}

	.testimony-item.right .item-header{
		width: 100%;
	}

	.testimony-item.right .item-body{
		float: left;
		width: 100%;
	}

	.testimony-item .item-header{
		font-size: 2rem;
		font-weight: bold;
		margin-bottom: 1rem;
		width: 100%;
		height: auto;
	}

	.testimony-item .item-header .item-email{
		margin-left:10px;
	}

	.testimony-item .item-body{
		margin-bottom: 1rem;
		text-align: justify;
		width: 100%;
	}

	.testimony-pagination{
		display: flex;
   		justify-content: center;
		margin-top: 2rem;
	}

	.testimony-pagination .pagination a {
		color: white;
		float: left;
		padding: 5px 16px;
		text-decoration: none;
		font-size: 20px;
		font-family: monospace;
	}

	.paginationjs-page.active {
		background: #e9262c;
	}

	.paginationjs-pages ul{
		display: flex;
    	list-style: none;
	}
</style>
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?=base_url('assets/public/')?>images/nbg.png);" data-stellar-background-ratio="0.5">
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
			<div class="col-md-6 col-sm-12">
				<div class="testimony-container" id="data-container"></div>
				<div class="testimony-pagination">
					<div class="pagination" id="pagination-container"></div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
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

<script src="<?=base_url('assets/public/')?>js/pagination.min.js"></script>
<script>
let data = <?=json_encode($list_testimony); ?>

$(document).ready(function(){
	if(data.length > 0) {
		$('#pagination-container').pagination({
			dataSource: data,
			pageSize: 5,
			callback: function(data, pagination) {
				var html = simpleTemplating(data);
				$('#data-container').html(html);
			}
		})
	}
});

function simpleTemplating(data) {
    var html = '';
    $.each(data, function(index, item){
		html += `
			<div class="testimony-item ${index%2=== 0? 'left' : 'right' }" style="margin-bottom: 2rem;">
				<div class="item-header">
					${item.name} &lt;${item.email}&gt;
				</div>
				<div class="item-body">${item.message}</div>
			</div>`
    });
    return html;
}

</script>
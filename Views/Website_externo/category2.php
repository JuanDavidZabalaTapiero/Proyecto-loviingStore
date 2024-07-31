<?php

require_once ('../../Controllers/Cliente/mostrarContenido.php');

require_once ('../../Controllers/Cliente/mostrarInfoProducto.php');

require_once ('../../Models/consultasAdmin.php');

?>

<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>Loviing Store | E-commerce</title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

	<!-- favicon -->
	<link href="images/favicon.png" rel="shortcut icon">

	<!-- Essential stylesheets
  	=====================================-->
	<link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="plugins/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick/slick-theme.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">

	<?php

	mostrarHeader();

	?>
	<section class="page-search">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Advance Search -->
					<div class="advance-search nice-select-white">
						<form>
							<div class="form-row align-items-center">
								<div class="form-group col-xl-4 col-lg-3 col-md-6">
									<input type="text" class="form-control my-2 my-lg-0" id="inputtext4"
										placeholder="What are you looking for">
								</div>
								<div class="form-group col-lg-3 col-md-6">
									<select class="w-100 form-control my-2 my-lg-0">
										<option>Category</option>
										<option value="1">Top rated</option>
										<option value="2">Lowest Price</option>
										<option value="4">Highest Price</option>
									</select>
								</div>
								<div class="form-group col-lg-3 col-md-6">
									<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4"
										placeholder="Location">
								</div>
								<div class="form-group col-xl-2 col-lg-3 col-md-6">

									<button type="submit" class="btn btn-buscador active w-100">Search Now</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-sm">
		<div class="container">
			<!-- No c si dejarlo o no -->
			<!-- <div class="row">
				<div class="col-md-12">
					<div class="search-result bg-gray">
						<h2>Results For "Electronics"</h2>
						<p>123 Results on 12 December, 2017</p>
					</div>
				</div>
			</div> -->
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="category-sidebar">
						<div class="widget category-list">
							<h4 class="widget-header">All Category</h4>
							<ul class="category-list">
								<li><a href="category2.php">Laptops <span>93</span></a></li>
								<li><a href="category2.php">Iphone <span>233</span></a></li>
								<li><a href="category2.php">Microsoft <span>183</span></a></li>
								<li><a href="category2.php">Monitors <span>343</span></a></li>
							</ul>
						</div>

						<div class="widget category-list">
							<h4 class="widget-header">Nearby</h4>
							<ul class="category-list">
								<li><a href="category2.php">New York <span>93</span></a></li>
								<li><a href="category2.php">New Jersy <span>233</span></a></li>
								<li><a href="category2.php">Florida <span>183</span></a></li>
								<li><a href="category2.php">California <span>120</span></a></li>
								<li><a href="category2.php">Texas <span>40</span></a></li>
								<li><a href="category2.php">Alaska <span>81</span></a></li>
							</ul>
						</div>

						<div class="widget filter">
							<h4 class="widget-header">Show Produts</h4>
							<select>
								<option>Popularity</option>
								<option value="1">Top rated</option>
								<option value="2">Lowest Price</option>
								<option value="4">Highest Price</option>
							</select>
						</div>

						<div class="widget price-range w-100">
							<h4 class="widget-header">Price Range</h4>
							<div class="block">
								<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000"
									data-slider-step="5" data-slider-value="[0,5000]">
								<div class="d-flex justify-content-between mt-2">
									<span class="value">$10 - $5000</span>
								</div>
							</div>
						</div>

						<div class="widget product-shorting">
							<h4 class="widget-header">By Condition</h4>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Brand New
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Almost New
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Gently New
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Havely New
								</label>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="category-search-filter">
						<div class="row">
							<div class="col-md-6 text-center text-md-left">
								<strong>Short</strong>
								<select>
									<option>Most Recent</option>
									<option value="1">Most Popular</option>
									<option value="2">Lowest Price</option>
									<option value="4">Highest Price</option>
								</select>
							</div>
							<div class="col-md-6 text-center text-md-right mt-2 mt-md-0">
								<div class="view">
									<strong>Views</strong>
									<ul class="list-inline view-switcher">
										<li class="list-inline-item">
											<a href="#!" onclick="event.preventDefault();" class="text-info"><i
													class="fa fa-th-large"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="ad-list-view.html"><i class="fa fa-reorder"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product-grid-list">
						<div class="row mt-30">
							

						<?php
						
						mostrarProductosCategoria();
						
						?>



							</div>
						</div>
					</div>
					<div class="pagination justify-content-center">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item">
									<a class="page-link" href="category2.php" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
										<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="category2.php">1</a></li>
								<li class="page-item active"><a class="page-link" href="category2.php">2</a></li>
								<li class="page-item"><a class="page-link" href="category2.php">3</a></li>
								<li class="page-item">
									<a class="page-link" href="category2.php" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
										<span class="sr-only">Next</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--============================
	=            Footer            =
	=============================-->
	<!-- Footer Bottom -->
	<?php
	
	mostrarFooterCliente();
	
	?>

	<!-- Essential Scripts
	=====================================-->
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/bootstrap/popper.min.js"></script>
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<script src="plugins/bootstrap/bootstrap-slider.js"></script>
	<script src="plugins/tether/js/tether.min.js"></script>
	<script src="plugins/raty/jquery.raty-fa.js"></script>
	<script src="plugins/slick/slick.min.js"></script>
	<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
	<script src="plugins/google-map/map.js" defer></script>

	<script src="js/script.js"></script>

</body>

</html>
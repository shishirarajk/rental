<?php /* Template Name: Shop template */ ?>
	<?php
	$pageno=1;
	if ((isset($_GET['pageno'])) ) {		
		$pageno=$_GET['pageno'];
	}
	$script_run = 0;
	function title_filter($where, $wp_query)
	{
		global $wpdb;
		// 2. pull the custom query in here:
		if ($search_term = $wp_query->get('search_prod_title')) {
			$where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql(like_escape($search_term)) . '%\'';
		}
		return $where;
	}
	if (isset($_GET['subcategory'])) {
		$slug = $_GET['subcategory'];
	} else {
		$slug = $_GET['category'];
	}
	// $slug= $_GET['subcategory'];
	$category = get_term_by('slug', $slug, 'product_cat');

	$cat_id = $category->term_id;
	$parent = $category->parent;


	if (isset($_GET['search'])) {
		$search = $_GET['search'];
	}
	// $all_categories = get_categories(array('posts_per_page' => -1,'taxonomy' => 'product_cat') ); 
	if (isset($_GET['category']) && $_GET['category'] != '') {
		if ($parent == 0) {
			$all_categories = get_categories(array('posts_per_page' => -1, 'taxonomy' => 'product_cat', 'parent' => $cat_id));
		} else {
			$all_categories = get_categories(array('posts_per_page' => -1, 'taxonomy' => 'product_cat', 'parent' => $parent));
		}
	} else {
		if (isset($_GET['search']) && $_GET['search'] != '') {
			$search_slug = $_GET['search'];
			$category = get_term_by('slug', $search_slug, 'product_cat');
			if ($category) {
				$cat_id = $category->term_id;

				$parent = $category->parent;

				if ($parent == 0) {
					$all_categories = get_categories(array('posts_per_page' => -1, 'taxonomy' => 'product_cat', 'parent' => $cat_id));
				} else {
					$all_categories = get_categories(array('posts_per_page' => -1, 'taxonomy' => 'product_cat', 'parent' => $parent));
				}
			} else {
				$script_run = 1;
				$all_categories = get_categories(array('posts_per_page' => -1, 'taxonomy' => 'product_cat'));
			}
		} else {
			$script_run = 1;
			$all_categories = get_categories(array('posts_per_page' => -1, 'taxonomy' => 'product_cat'));
		}
	}
	$category_name = '';
	if ($parent == 0) {
		$category_name = $category->name;
	} else {
		$parent_category = get_term_by('id', $parent, 'product_cat');
		$category_name = $parent_category->name;
	}
	if (isset($_GET['city'])) {
		$Cityname = $_GET['city'];
	}
	?>


	<?php get_header(); ?>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	<style>
		#container {
			display: none;
		}

		/* .product {
		
   
}
		} */

		.product_wrap {
			width: 100%;
		}

		.shop_wrap {
			margin-top: 100px !important;
		}
         .pagi a{color :#C60967 !important;
		 text-decoration: none !important;}
		 .pagi a:hover{color :#C60967 !important;
		 text-decoration: none !important;}
		.section {
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			flex-wrap: wrap;
			-webkit-flex-wrap: wrap;
			width: 100%;
			position: relative;
			text-decoration: none;
			float: left;
			border: 1px solid #C60967;
			margin-bottom: 20px;


		}



		.heading {
			height: 84px;
			width: 474px;
			color: #484848;
			font-family: Poppins;
			font-size: 60px;
			font-weight: 500;
			line-height: 84px;
		}

		.solid {
			border-style: solid;
			border-width: 30%;
			border-color: #C60967;
		}

		.imgclass {

			display: flex;
			float: left;
			max-height: 130px;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
			width: 232px;
			margin: 0 auto;
		}

		.content_wrap-left {

			float: left;
			text-align: left;

			-webkit-flex-direction: column;
			flex-direction: column;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			width: 70%;
			font-size: .9em;
		}

		.content-wrap-right {
			font-size: 1.3em;
			width: 30%;
			text-align: right;
			line-height: 1em;
			float: left;
			color: #C60967;
			font-weight: 700;
		}

		.content {
			margin: 5px 0;
			padding: 0 12px 0 12px;
			width: calc(100% - 232px);
		}






		.productname {

			color: #C60967 !important;

			font-size: 15.84px !important;
			font-weight: 500;
			display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
			text-align: justify;
		}

		.price {

			font-family: Poppins;
			font-size: 16px;
			font-weight: bold;
			line-height: 35px;
			text-align: justify;
		}

		.locationName {

			color: #151616;
			font-family: Poppins;
			font-size: 20px;
			font-weight: 500;
			line-height: 35px;
			text-align: justify;
		}

		.btnRegi {


			font-size: 20px;
    margin: 0;
    line-height: 1;
    cursor: pointer;
    position: relative;
    text-decoration: none;
    overflow: visible;
    padding: .618em 1em;
    font-weight: 00;
    border-radius: 3px;
    left: auto;
    color: #fff;
    border-radius: 10px;
    background: linear-gradient(
134.05deg
, #c60967 0%, #603 100%);
    width: 150px;
    height: 50px;
    border: none;
	margin-right: 60px;
		}

		.button1 {
			background-color: white;
			color: white;
			border: 3px solid #C60967;
			width: 25%;
			height: 15px;
		}

		.section a {
			color: #000;
			text-decoration: none;
		}

		.section a:hover {
			color: #000;
			text-decoration: none;
		}

		.prodimg {
			height: 130px;
			max-height: 130px;
			width: 232px;
			max-width: 232px;
		}

		.abc {
			background-color: #C60967 !important;
			font-size: 15px;
		}

		#slct {
			width: 100%;
		}

		#city {
			color: #C60967;
		}

		.shop_wrap {
			margin: 30px;
		}

		h1 {
			font-size: 28px;
			font-weight: 700;
			margin-bottom: 5px;
		}

		.price {
			margin-bottom: 10px;
		}

		.wrapper {
			margin: 0 auto;
			width: 860px;
		}

		.columns {
			margin: 0 auto;
			max-width: 900px;
		}

		.details {
			position: relative;
			width: 100%;
			height: 100%;
			float: left;
		}

		.thumbnail-container {
			position: relative;
			width: 100%;
			height: 100%;
			float: left;
		}





		.columns {
			margin-top: 30px;
		}



		.select,
		select {
			width: 100%;
			/* border-radius: 0 !important; */
		}


		#buy-container {
			padding-right: 0;
		}

		.small-text {
			font-size: 14px;
		}

		.small-text span {
			font-weight: bold;
		}

		.buy-button {
			background: #fff;
			color: black;
			border-color: #C60967;
			border-radius: 5px;
			width: 200px;
		}



		/* readmore styleing here */
		ul#list_wrap {
			margin: 0;
		}
		ul#datalist{
			margin:0;
			padding:0;
		}
		ul#datalist li:nth-child(n+3) {
			display:none;			
		}
		span#more-city-dropdown {
			cursor: pointer;
			color: #C60967;
			font-weight: 600;
			text-align: right;
			padding: 0 10px;
		}
		p#no-city-here{
			display:none;
		
			font-weight: 600;
			text-align: left;
			padding: .75rem 1.25rem;
		}
		p#no-products-found{
			display:none;
			margin-bottom: .5rem;
			font-family: inherit;
			font-weight: 600;
			line-height: 1.2;
			color: inherit;
			text-align: center;
			font-size: 40px;
		}
		/* DROP DOWN STYLING */

		ul {
			list-style-type: none;
		}

		a {
			color: #b63b4d;
			text-decoration: none;
		}

		/** =======================
 * Contenedor Principal
 ===========================*/


		h1 {
			color: #FFF;
			font-size: 24px;
			font-weight: 400;
			text-align: center;
			margin-top: 80px;
		}

		h1 a {
			color: #c12c42;
			font-size: 16px;
		}

		.accordion {
			width: 100%;
			/* max-width: 360px; */
			/* margin: 30px auto 20px; */
			background: #FFF;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			padding: 0;
			margin: 0;
		}

		.accordion .link {
			cursor: pointer;
			display: block;
			padding: 15px 0px 15px 0px;
			color: #C60967;
			font-size: 14px;
			font-weight: 700;
			border-bottom: 1px solid #CCC;
			position: relative;
			-webkit-transition: all 0.4s ease;
			-o-transition: all 0.4s ease;
			transition: all 0.4s ease;
		}

		/* .accordion li:last-child .link { border-bottom: 0; } */

		.accordion li i {
			position: absolute;
			top: 16px;
			left: 12px;
			font-size: 18px;
			color: #595959;
			-webkit-transition: all 0.4s ease;
			-o-transition: all 0.4s ease;
			transition: all 0.4s ease;
		}

		.accordion li i.fa-chevron-down {
			right: 12px;
			left: auto;
			font-size: 16px;
		}

		.accordion li.open .link {
			color: #b63b4d;
		}

		.accordion li.open i {
			color: #b63b4d;
		}

		.accordion li.open i.fa-chevron-down {
			-webkit-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			-o-transform: rotate(180deg);
			transform: rotate(180deg);
		}

		/**
 * Submenu
 -----------------------------*/


		.submenu {
			display: none;
			/* background: #444359; */
			font-size: 14px;
			margin: 0;
			padding: 0;
		}

		/* .submenu li { border-bottom: none; } */

		.submenu a {
			display: block;
			text-decoration: none;
			font-weight: 400;
			color: black;
			padding: 12px;
			padding-left: 42px;
			-webkit-transition: all 0.25s ease;
			-o-transition: all 0.25s ease;
			transition: all 0.25s ease;
		}

		.submenu a:hover {
			background: #b63b4d;
			color: #FFF;
		}

		.fa-chevron-down:before {
			content: "\f078";
			color: #C60967;
		}

		.list-group-item {
			/* border: none !important; */
		}

		/* END OF DROPDOWN STYLING */

		@media only screen and (max-width: 350px) {}

		@media only screen and (max-width: 769px) {

			#buy-container {
				padding: 0 0 15px 0;
			}
		}

		@media only screen and (max-width: 769px) {
			.section {
				display: flex;
				flex-direction: column;
			}

			/* .imgclass {
				width: 100%;
			} */


		}

		@media screen and (max-width:990px) {
			.imgclass {
				width: 130px;
				max-width: 130px;
			}

			.content {
				display: flex;
				flex-direction: column;
				width: calc(100% - 130px);
				max-width: calc(100% - 130px);
			}

			.content_wrap-left,
			.content-wrap-right {
				width: 100% !important;
			}

			.content-wrap-right {
				font-size: 10px !important;
			}

			.section {
				height: 130px;
				max-height: 130px;
			}

			.productname {
				font-size: 12px !important;
				width: 100px;
			}

			.price {
				font-size: 10px !important;
			}

			.btnRegi {
				font-size: 10px;

			}

			.fa {
				font-size: 12px !important;
			}

			.prodimg {
				max-height: 130px;
				height: 130px;
				width: 130px;
				max-width: 130px;
			}

			.desc {
				display: none;
			}

			.locationName {
				font-size: 13px;
			}
		}
		@media  (min-width: 1091px) and (max-width:1230px){
			.btnRegi{font-size:12px;
			width:90px;
		height:36px;}	
		}
		@media only screen and (max-width: 1091px) {
			.btnRegi {
				display: none;
			}

		}

		@media screen and (min-width: 1700px) {
			.shop_wrap {
				display: flex;
				align-items: flex-start;
				justify-content: center;
				min-height: calc(100vh - 300px);
			}

			.shop2 {
				width: 1460px;
			}
		}

		@media screen and (max-width: 735px) {
			#left-navigation-column {
				display: none;
			}

			#container {
				display: block;
			}

			.shop_wrap {
				margin-top: 0px !important;
			}

			.row {
				flex-direction: column;
			}

			.col-sm-8 {
				max-width: 100% !important;
			}

			.col-sm-4 {
				max-width: 100% !important;
			}
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<div class="shop_wrap">
		<div class="shop2">
			<div class="row">
				<div class="col-sm-4" id="container">
					<ul id="accordion" class="accordion">
						<li>
							<div class="link">Wo möchten Sie mieten?<i class="fa fa-chevron-down"></i></div>
							<ul class="submenu">
								<?php

								// $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' =>$_GET['category'], 'orderby' => 'title' );
								if (isset($_GET['category']) && ($_GET['category']) != '' && (isset($_GET['search'])) && ($_GET['search']) != '') {
									$args = array('post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => $_GET['category'], 'orderby' => 'date', 'search_prod_title' => $_GET['search'],'posts_per_page'  => '2', 'offset' => $offset*2);
								} else if (isset($_GET['category']) && ($_GET['category']) != '') {
									$args = array('post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => $_GET['category'], 'orderby' => 'date','posts_per_page'  => '2', 'offset' => $offset*2,);
								} else if (isset($_GET['search'])) {

									$args = array('post_type' => 'product', 'posts_per_page' => -1, 'search_prod_title' => $_GET['search'], 'orderby' => 'date','posts_per_page'  => '2', 'offset' => $offset*2,);
									$args2 = array('post_type' => 'product', 'posts_per_page' => -1, 'orderby' => 'date', 'product_tag' => $_GET['search'],'posts_per_page'  => '2', 'offset' => $offset*2,);
								}
								$CityArray = array();
								add_filter('posts_where', 'title_filter', 10, 2);
								$loop = new WP_Query($args);
								remove_filter('posts_where', 'title_filter', 10);
								$c = 1;
								while ($loop->have_posts()) : $loop->the_post();
									global $product;

									$City = get_post_meta($loop->post->ID, "_product_attributes");

									if (!in_array($City[0]["options"]["Cities"], $CityArray)) {
										$html = '';
										if (isset($_GET['search'])) {
											$html .= '&search=' . $_GET['search'];
										}

								?>
										<li><a href="https://fair-hand.com/produktliste?city=<?php echo $City[0]["options"]["Cities"]; ?>&category=<?php echo $_GET['category'] . $html ?>" class="list-group-item list-group-item-action"><?php print_r($City[0]["options"]["Cities"]); ?></a></li>

									<?php  } ?>
									<?php $CityArray[] = $City[0]["options"]["Cities"]; ?>
								<?php endwhile; ?>
								<?php
								// $CityArray=array();
								add_filter('posts_where', 'title_filter', 10, 2);
								$loop = new WP_Query($args2);
								remove_filter('posts_where', 'title_filter', 10);
								$c = 1;
								while ($loop->have_posts()) : $loop->the_post();
									global $product;

									$City = get_post_meta($loop->post->ID, "_product_attributes");

									if (!in_array($City[0]["options"]["Cities"], $CityArray)) {
										$html = '';
										if (isset($_GET['search'])) {
											$html .= '&search=' . $_GET['search'];
										}

								?>
										<li><a href="https://fair-hand.com/produktliste?city=<?php echo $City[0]["options"]["Cities"]; ?>&category=<?php echo $_GET['category'] . $html ?>" class="list-group-item list-group-item-action"><?php print_r($City[0]["options"]["Cities"]); ?></a></li>


									<?php  } ?>
									<?php $CityArray[] = $City[0]["options"]["Cities"]; ?>
								<?php endwhile; ?>
								<li><a href="https://fair-hand.com/stadt" class="list-group-item list-group-item-action">Top Städte</a></li>
							</ul>
						</li>
						<li>

							<ul class="submenu">
								<li><a href="#"><select class="form-select" id="slct" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" aria-label="Default select example">

											<option selected>Stadt wählen</option>
											<?php

											$args = array('post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => $_GET['category'], 'orderby' => 'title');


											$CityArray = array();
											$loop = new WP_Query($args);
											while ($loop->have_posts()) : $loop->the_post();
												global $product;
												$City = get_post_meta($loop->post->ID, "_product_attributes");

												if (!in_array($City[0]["options"]["Cities"], $CityArray)) {


											?>
													<option value="https://fair-hand.com/produktliste?city=<?php echo $City[0]["options"]["Cities"]; ?>&category=<?php echo $_GET['category'] ?>"><?php print_r($City[0]["options"]["Cities"]); ?></option>
												<?php  } ?>
												<?php $CityArray[] = $City[0]["options"]["Cities"]; ?>
											<?php endwhile; ?>
										</select></a></li>

							</ul>
						</li>


						<li>
							<div class="link">Was möchten Sie mieten?<i class="fa fa-chevron-down"></i></div>
							<ul class="submenu">
								<?php
								if ($category_name != '') { ?>
									<a class="list-group-item list-group-item-action "><b><?php echo $category_name; ?></b></a>

									<?php   }
								foreach ($all_categories as $category) {

									if ($category->parent == $cat_id && $category->name != 'Uncategorized' && $category->name != 'Subscription') {

									?>
										<li><a data-catid=<?php echo $category->term_id ?> class="list-group-item list-group-item-action product-list-category" href="https://fair-hand.com/produktliste?category=<?php echo $category->slug; ?>">
												<?php echo $category->name . ' (' . $category->count . ')';
												?>
											</a>
										</li>
									<?php } else if ($category->name != 'Uncategorized' && $category->name != 'Subscription') { ?>

										<li><a data-catid=<?php echo $category->term_id ?> class="list-group-item list-group-item-action product-list-category" href="https://fair-hand.com/produktliste?category=<?php echo $category->slug; ?>">
												<?php echo $category->name . ' (' . $category->count . ')';;
												?>
											</a></li>

										<?php } else if ($category->name != 'Uncategorized' && $category->name != 'Subscription') {
										if ($category_name != '') { ?>
											<li><a><?php echo $category_name ?></a></li>
										<?php } ?>


								<?php
									}
								} ?>

						</li>

					</ul>
					</li>


					</ul>

				</div>

				<!-- CATEGORY DESKTOP VERSION STARTS HERE -->

				<div class="col-sm-4" id="left-navigation-column">
					<div class="list-group" id="list_wrap">
							<a href="#" class="list-group-item list-group-item-action active abc">
								Wo möchten Sie mieten?
							</a>
							<ul id="datalist">
								<?php

								$offset=$pageno - 1;
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

								// $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' =>$_GET['category'], 'orderby' => 'title' );
								if (isset($_GET['category']) && ($_GET['category']) != '' && (isset($_GET['search'])) && ($_GET['search']) != '') {
									$args = array('post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => $_GET['category'], 'orderby' => 'title', 'search_prod_title' => $_GET['search']);
								} else if (isset($_GET['category']) && ($_GET['category']) != '') {
									$args = array('post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => $_GET['category'], 'orderby' => 'title');
								} else if (isset($_GET['search'])) {

									$args = array('post_type' => 'product', 'posts_per_page' => -1, 'search_prod_title' => $_GET['search'], 'orderby' => 'title');
									$args2 = array('post_type' => 'product', 'posts_per_page' => -1, 'orderby' => 'title', 'product_tag' => $_GET['search']);
								}
								$CityArray = array();
								add_filter('posts_where', 'title_filter', 10, 2);
								$loop = new WP_Query($args);
								remove_filter('posts_where', 'title_filter', 10);
								$c = 1;
								while ($loop->have_posts()) : $loop->the_post();
									global $product;

									$City = get_post_meta($loop->post->ID, "_product_attributes");

									if (!in_array($City[0]["options"]["Cities"], $CityArray)) {
										$html = '';
										if (isset($_GET['search'])) {
											$html .= '&search=' . $_GET['search'];
										}
										if ($City[0]["options"]["Cities"] != '') {

								?>

											<li><a href="https://fair-hand.com/produktliste?city=<?php echo $City[0]["options"]["Cities"]; ?>&category=<?php echo $_GET['category'] . $html ?>" class="list-group-item list-group-item-action "><?php print_r($City[0]["options"]["Cities"]); ?></a></li>
									<?php  }
									} ?>
									<?php $CityArray[] = $City[0]["options"]["Cities"]; ?>
								<?php endwhile; ?>
								<?php
								// $CityArray=array();
								add_filter('posts_where', 'title_filter', 10, 2);
								$loop = new WP_Query($args2);
								remove_filter('posts_where', 'title_filter', 10);
								$c = 1;
								while ($loop->have_posts()) : $loop->the_post();
									global $product;

									$City = get_post_meta($loop->post->ID, "_product_attributes");

									if (!in_array($City[0]["options"]["Cities"], $CityArray)) {
										$html = '';
										if (isset($_GET['search'])) {
											$html .= '&search=' . $_GET['search'];
										}

								?>

										<li><a href="https://fair-hand.com/produktliste?city=<?php echo $City[0]["options"]["Cities"]; ?>&category=<?php echo $_GET['category'] . $html ?>" class="list-group-item list-group-item-action"><?php print_r($City[0]["options"]["Cities"]); ?></a></li>
									<?php  } ?>
									<?php $CityArray[] = $City[0]["options"]["Cities"]; ?>
								<?php endwhile; ?>	

							</ul>	
							<span id="more-city-dropdown" class="more-city-dropdown">mehr Städte</span>	
							<p id="no-city-here" class="no-city-here">Keine Stadt gefunden</p>					
					</div>

					<div class="list-group" id="list_wrap">
						<a href="#" class="list-group-item list-group-item-action active abc">
							Was möchten Sie mieten?
						</a>
						<?php
						if ($category_name != '') { ?>
							<a class="list-group-item list-group-item-action "><b><?php echo $category_name; ?></b></a>

							<?php   }
						$category_url_html = '';
						if (isset($_GET['search'])) {
							$category_url_html .= '&search=' . $_GET['search'];
						}
						foreach ($all_categories as $category) {

							if ($category->parent == $cat_id && $category->name != 'Uncategorized' && $category->name != 'Subscription') {

							?>


								<a data-catid=<?php echo $category->term_id ?> class="list-group-item list-group-item-action product-list-category" href="https://fair-hand.com/produktliste?category=<?php echo $category->slug . $category_url_html; ?>">
									<?php echo $category->name . ' (' . $category->count . ')';
									?>

								</a>
							<?php } else if ($category->name != 'Uncategorized' && $category->name != 'Subscription') { ?>
								<a data-catid=<?php echo $category->term_id ?> class="list-group-item list-group-item-action product-list-category" href="https://fair-hand.com/produktliste?category=<?php echo $category->slug . $category_url_html; ?>">
									<?php echo $category->name . ' (' . $category->count . ')';;
									?>

								</a>

						<?php
							}
						} ?>



					</div>
				</div>

				<div class="col-sm-8 listPage">

					<?php
					$offset=$pageno - 1;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					if (isset($_GET['category']) && ($_GET['category']) != '' && (isset($_GET['search'])) && ($_GET['search']) != '') {
						$args = array('post_type' => 'product',  'product_cat' => $_GET['category'], 'orderby' => 'date',  'search_prod_title' => $_GET['search'],'nopaging' => false,  'offset' => $offset*2,
						'paged'=> $paged);
						$args2 = array('post_type' => 'product',  'orderby' => 'date',  'product_tag' => $_GET['search'],'nopaging' => false,  'offset' =>$offset*2,
						'paged'   => $paged);
					} else if (isset($_GET['category']) && ($_GET['category']) != '') {
						$args = array('post_type' => 'product', 'product_cat' => $_GET['category'], 'orderby' => 'date' , 'nopaging' => false, 'offset' => $offset*2,
						'paged' => $paged );
					} else if (isset($_GET['search'])) {

						$args = array('post_type' => 'product',  'search_prod_title' => $_GET['search'], 'orderby' => 'date', 'nopaging' => false, 'offset' => $offset*2,
						'paged'                  => $paged, );
						$args2 = array('post_type' => 'product',  'orderby' => 'date' ,  'product_tag' => $_GET['search'],'nopaging' => false, 'offset' => $offset*2,
						'paged' => $paged);
					}

					add_filter('posts_where', 'title_filter', 10, 2);



					$loop = new WP_Query($args);


					remove_filter('posts_where', 'title_filter', 10);
					$product_category_array = array();
					$product_array = array();

					while ($loop->have_posts()) : $loop->the_post();
						global $product;


						$City = get_post_meta($loop->post->ID, "_product_attributes");
						$image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');


						if ((isset($Cityname)) && ($Cityname == $City[0]["options"]["Cities"] || $Cityname == strtolower($City[0]["options"]["Cities"])) || (!isset($Cityname)) || $Cityname == '') {
							$subscription = 0;
							foreach ($product->category_ids as $category_id) {
								$product_category_array[] = $category_id;
								if ($category_id == 275) {
									$subscription = 1;
								} else {
									$subscription;
								}
							}
							if ($subscription == 0) {
								if (!in_array($loop->post->ID, $product_array)) {
									$product_array[] = $loop->post->ID;


					?>



									<div class="product">
										<div class="product_wrap">

											<div class="section">
												<a href="https://fair-hand.com/produkt?id=<?php echo $loop->post->ID; ?>">

													<div class="imgclass"><img class="prodimg" src="<?php
																									echo $image[0];
																									// echo wp_get_attachment_image($attachment_id, array(800, 600));
																									?>" data-id="<?php echo $loop->post->ID; ?>"></div>
													<!-- Product Page -->
													<div class="content">
														<div class="content_wrap-left ">
															<div class="productname"><?php echo $product->name; ?> </div>
															<?php
															if (!function_exists('chop_string')) {
																function chop_string($str, $len)
																{
																	if (strlen($str) < $len)
																		return $str;

																	$str = substr($str, 0, $len);
																	if ($spc_pos = strrpos($str, " "))
																		$str = substr($str, 0, $spc_pos);

																	return $str . "...";
																}
															}
															?>

															<p class="desc" style="color: #404040;"><?php echo chop_string($product->description, 70); ?></p>


															<div class="location">
																<div>
																	<div class="locationName" style="color: #404040;"><i class="fa fa-map-marker" style="font-size:30px;color:#C60967"></i><?php print_r($City[0]["options"]["Cities"]); ?></div>
																</div>
															</div>
														</div>
														<div class="content-wrap-right">
															<div class="price" style="color: #404040;">Preis: €<?php echo $City[0]["options"]["Price"]; ?>/- <p style="color: #404040;"><?php echo $City[0]["options"]["Duration"]; ?></p>
															</div>

															<a href="https://fair-hand.com/produkt?id=<?php echo $loop->post->ID; ?>">
																<button class="btnRegi">Jetzt mieten</button>
															</a>
															<br>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<br>
									<br>
						<?php }
							}
						} ?>
					<?php endwhile; ?>

					<!-- <?php
				 $paginationhtml="";
				 if(isset($_GET['search'])) {
					$paginationhtml.='&search='.$_GET['search'];
				 }
				 if(isset($_GET['city'])) {
					$paginationhtml.='&city='.$_GET['city'];
				 }
				 if(isset($_GET['category'])) {
					$paginationhtml.='&category='.$_GET['category'];
				 }
				 echo $pageno;
				 ?>

				 <ul class="nav-posts">
					<li class="prev-link"><a href="https://fair-hand.com/produktliste?pageno=<?php echo ($pageno-1) ?><?php echo $paginationhtml ?>">previous </a></li>
					<li class="next-link"><a href="https://fair-hand.com/produktliste?pageno=<?php echo ($pageno+1) ?><?php echo $paginationhtml ?>">next </a></li>
				</ul> -->

					<?php $json_product_category_array = json_encode($product_category_array);
					?>
                



					<?php
					if (isset($args2)) {
						add_filter('posts_where', 'title_filter', 10, 2);



						$loop = new WP_Query($args2);
						remove_filter('posts_where', 'title_filter', 10);
						while ($loop->have_posts()) : $loop->the_post();
							global $product;
							$City = get_post_meta($loop->post->ID, "_product_attributes");
							$image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');




							if ((isset($Cityname))  && ($Cityname == $City[0]["options"]["Cities"] || strtolower($Cityname) == strtolower($City[0]["options"]["Cities"])) || (!isset($Cityname)) || $Cityname == '') {

								$subscription = 0;
								foreach ($product->category_ids as $category_id) {

									if ($category_id == 275) {
										$subscription = 1;
									} else {
										$subscription;
									}
								}
								if ($subscription == 0) {
									if (!in_array($loop->post->ID, $product_array)) {
										$product_array[] = $loop->post->ID;

					?>



										<div class="product">
											<div class="product_wrap">

												<div class="section">
													<a href="https://fair-hand.com/produkt?id=<?php echo $loop->post->ID; ?>">

														<div class="imgclass">

															<img class="prodimg" src="<?php echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
														</div>
														<!-- Product Page -->
														<div class="content">
															<div class="content_wrap-left">
																<div class="productname"><?php echo $product->name; ?> </div>
																<?php
																if (!function_exists('chop_string')) {
																	function chop_string($str, $len)
																	{
																		if (strlen($str) < $len)
																			return $str;

																		$str = substr($str, 0, $len);
																		if ($spc_pos = strrpos($str, " "))
																			$str = substr($str, 0, $spc_pos);

																		return $str . "...";
																	}
																}
																?>
																<p class="desc" style="color: #404040;"><?php echo $product->description; ?></p>
															</div>
															<div class="content-wrap-right">

																<div class="price" style="color: #404040;"> Preis: €<?php echo chop_string($product->price, 70); ?>/- <?php echo $City[0]["options"]["Duration"]; ?></div>

																<div class="location">
																	<div>
																		<div class="locationName" style="color: #404040;"><i class="fa fa-map-marker" style="font-size:30px;color:#C60967"></i><?php print_r($City[0]["options"]["Cities"]); ?></div>
																	</div>
																</div>
																<br>
																<a href="https://fair-hand.com/produkt?id=<?php echo $loop->post->ID; ?>">
																	<button class="btnRegi">Jetzt mieten</button>
																</a>
																<br>
															</div>
														</div>
													</a>
												</div>
											</div>
										</div>
										<br>
										<br>
							<?php }
								}
							} ?>
						<?php endwhile; ?>
				  <!-- <p class="pagi">
					<?php 
					// echo $loop->max_num_pages;
					previous_posts_link('Previous', $loop->max_num_pages); ?> </p>
				<p class="pagi"> <?php	next_posts_link( 'Next ', $loop->max_num_pages ); ?> </p> 
				 -->
				 <?php
				 $paginationhtml="";
				 if(isset($_GET['search'])) {
					$paginationhtml.='&search='.$_GET['search'];
				 }
				 if(isset($_GET['city'])) {
					$paginationhtml.='&city='.$_GET['city'];
				 }
				 if(isset($_GET['category'])) {
					$paginationhtml.='&category='.$_GET['category'];
				 }
				//  echo $pageno;
				 ?>

				 <ul class="nav-posts">
					<li class="prev-link"><a href="https://fair-hand.com/produktliste?pageno=<?php echo ($pageno-1) ?><?php echo $paginationhtml ?>">previous </a></li>
					<li class="next-link"><a href="https://fair-hand.com/produktliste?pageno=<?php echo ($pageno+1) ?><?php echo $paginationhtml ?>">next </a></li>
				</ul>
			
			<?php	} else if (empty($loop->have_posts())) { ?>

						<div>
							<h1>Keine Ergebnisse</h1>
						</div>

					<?php }
					wp_reset_query(); ?>
	

				</div>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<script>
		$(function() {
			var Accordion = function(el, multiple) {
				this.el = el || {};
				this.multiple = multiple || false;

				// Variables privadas
				var links = this.el.find('.link');
				// Evento
				links.on('click', {
					el: this.el,
					multiple: this.multiple
				}, this.dropdown)
			}

			Accordion.prototype.dropdown = function(e) {
				var $el = e.data.el;
				$this = $(this),
					$next = $this.next();

				$next.slideToggle();
				$this.parent().toggleClass('open');

				if (!e.data.multiple) {
					$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
				};
			}

			var accordion = new Accordion($('#accordion'), false);
		});

		$('li').filter(function() {
			return $(this).text().trim() === '';
		}).remove();

		// $('a').filter(function() {
		// 	return $(this).text().trim() === '';
		// }).remove();


		var script_run = <?php echo  $script_run ?>;
		console.log(script_run);
		if (script_run == 1) {
			console.log('a');
			jQuery('.product-list-category').hide();
			var json_category = <?php echo $json_product_category_array; ?>;
			jQuery(json_category).each(function(i, value) {
				jQuery('.product-list-category[data-catid="' + value + '"]').show();
			});
		}
     
		
		// readmore code here

		$(function () {
			$('span').click(function () {
				$('#datalist li:hidden').slice(0, 2).show();
				if ($('#datalist li').length == $('#datalist li:visible').length) {
					$('span ').hide();
				} 
			});
			if($('#datalist li').length < 1){
					$("span.more-city-dropdown").hide();
					$("p.no-city-here").show();
					$("p.no-products-found").show();
				} else if ($('#datalist li').length == $('#datalist li:visible').length) {
					$('span ').hide();
				} 
		});



	</script>
	

	<?php get_footer(); ?>
	<!-- global $product;

    $attachment_ids = $product->get_gallery_image_ids();

    foreach( $attachment_ids as $attachment_id ) {
        echo $image_link = wp_get_attachment_url( $attachment_id );
    } -->
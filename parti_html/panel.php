<?php

	class panel{

		public static function get_url(){
			$my_url="http://127.0.0.1/lacooperazione/";
		#	$my_url="https://lacooperazione.com/";
			return $my_url;
		}

		public static function head($title){
			$my_url=panel::get_url();
			$my_html='<!-- Mobile Specific Meta -->
						<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
						<!-- Favicon-->
						<link rel="shortcut icon" href="img/fav.png">
						<!-- Author Meta -->
						<meta name="author" content="CodePixar">
						<!-- Meta Description -->
						<meta name="description" content="">
						<!-- Meta Keyword -->
						<meta name="keywords" content="">
						<!-- meta character set -->
						<meta charset="UTF-8">
						<!-- Site Title -->
						<title>LaCooperazione | '.$title.'</title>
						<!--
							CSS
							============================================= -->
						<link rel="stylesheet" href="'.$my_url.'css/linearicons.css">
						<link rel="stylesheet" href="'.$my_url.'css/font-awesome.min.css">
						<link rel="stylesheet" href="'.$my_url.'css/themify-icons.css">
						<link rel="stylesheet" href="'.$my_url.'css/bootstrap.css">
						<link rel="stylesheet" href="'.$my_url.'css/owl.carousel.css">
						<link rel="stylesheet" href="'.$my_url.'css/nice-select.css">
						<link rel="stylesheet" href="'.$my_url.'css/nouislider.min.css">
						<link rel="stylesheet" href="'.$my_url.'css/ion.rangeSlider.css" />
						<link rel="stylesheet" href="'.$my_url.'css/ion.rangeSlider.skinFlat.css" />
						<link rel="stylesheet" href="'.$my_url.'css/magnific-popup.css">
						<link rel="stylesheet" href="'.$my_url.'css/main.css">';
			return $my_html;
		}

		public static function main_menu($active='home'){
			$my_html='
					<div class="main_menu">
						<nav class="navbar navbar-expand-lg navbar-light main_box">
							<div class="container">
								<!-- Brand and toggle get grouped for better mobile display -->
								<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
								 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
									<ul class="nav navbar-nav menu_nav ml-auto">';
							if( $active=='home' )
								$my_html.='<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>'; 
							else
								$my_html.='<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>';
						
							if( $active=='shop' )
								$my_html.='
										<li class="nav-item submenu dropdown active">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
											 aria-expanded="false">Shop</a>
											<ul class="dropdown-menu">
												<li class="nav-item active"><a class="nav-link" href="category.php">Shop Category</a></li>
												<li class="nav-item"><a class="nav-link" href="single-product.php">Product Details</a></li>
												<li class="nav-item"><a class="nav-link" href="checkout.header">Product Checkout</a></li>
												<li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
												<li class="nav-item"><a class="nav-link" href="confirmation.php">Confirmation</a></li>
											</ul>
										</li>
								';
							else if( $active=='single-product' ){
								$my_html.='
										<li class="nav-item submenu dropdown active">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
											 aria-expanded="false">Shop</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a class="nav-link" href="category.php">Shop Category</a></li>
												<li class="nav-item active"><a class="nav-link" href="single-product.php">Product Details</a></li>
												<li class="nav-item"><a class="nav-link" href="checkout.php">Product Checkout</a></li>
												<li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
												<li class="nav-item"><a class="nav-link" href="confirmation.php">Confirmation</a></li>
											</ul>
										</li>';
							}else
								$my_html.='			
										<li class="nav-item submenu dropdown" >
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
											 aria-expanded="false">Shop</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a class="nav-link" href="category.php">Shop Category</a></li>
												<li class="nav-item"><a class="nav-link" href="single-product.php">Product Details</a></li>
												<li class="nav-item"><a class="nav-link" href="checkout.php">Product Checkout</a></li>
												<li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
												<li class="nav-item"><a class="nav-link" href="confirmation.php">Confirmation</a></li>
											</ul>
										</li>';



							$my_html.=' <li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
											 aria-expanded="false">Blog</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
												<li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
											</ul>
										</li>
										<li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
											 aria-expanded="false">Pages</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
												<li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>
												<li class="nav-item"><a class="nav-link" href="elements.php">Elements</a></li>
											</ul>
										</li>
										<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
										<li class="nav-item">
											<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>';
			return $my_html;
		}

		public static function header( $active ){
			$my_html='<header class="header_area sticky-header">
						'.panel::main_menu($active).'
						<div class="search_input" id="search_input_box"  >
							<div class="container">
								<form class="d-flex justify-content-between">
									<input type="text" class="form-control" id="search_input" placeholder="Search Here">
									<button type="submit" class="btn"></button>
									<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
								</form>
							</div>
						</div>
					</header>';
			return $my_html;
		}

		public static function banner_area(){
			$my_html='
					<section class="banner-area">
						<div class="container">
							<div class="row fullscreen align-items-center justify-content-start">
								<div class="col-lg-12">
									<div class="active-banner-slider owl-carousel">
										<!-- single-slide -->
										<div class="row single-slide align-items-center d-flex">
											<div class="col-lg-5 col-md-6">
												<div class="banner-content">
													<h1>The best <br>Monopoly!</h1>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													<div class="add-bag d-flex align-items-center">
														<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
														<span class="add-text text-uppercase">Acquista</span>
													</div>
												</div>
											</div>
											<div class="col-lg-7">
												<div class="banner-img">
													<img class="img-fluid" src="img/monopoly.png" alt="">
												</div>
											</div>
										</div>
										<!-- single-slide -->
										<div class="row single-slide">
											<div class="col-lg-5">
												<div class="banner-content">
													<h1>Uno <br>Il gioco!</h1>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													<div class="add-bag d-flex align-items-center">
														<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
														<span class="add-text text-uppercase">Acquista</span>
													</div>
												</div>
											</div>
											<div class="col-lg-7">
												<div class="banner-img">
													<img class="img-fluid" src="img/uno2.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>';
			return $my_html;
		}

		public static function banner_area_single_product( $nome='' ){
			$my_html='<section class="banner-area organic-breadcrumb mb-0">
						<div class="container">
							<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
								<div id="testo-col-first" class="col-first">
									<h1>'.$nome.'</h1>
									<nav class="d-flex align-items-center">
										<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
										<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
										<a href="single-product.php">'.$nome.'</a>
									</nav>
								</div>
							</div>
						</div>
					  </section>';
			return $my_html;
		}

		public static function banner_area_organic_breadcrumb(){
			$my_html='
					<section class="banner-area organic-breadcrumb">
						<div class="container">
							<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
								<div id="testo-col-first" class="col-first">
									<h1>Shopping</h1>
									<nav class="d-flex align-items-center">
										<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
										<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
										<a href="category.php">Categorie</a>
									</nav>
								</div>
							</div>
						</div>
					</section>
			';
			return $my_html;
		}

		public static function features_area(){
			$my_html='
					<section class="features-area section_gap">
						<div class="container">
							<div class="row features-inner">
								<!-- single features -->
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="single-features">
										<div class="f-icon">
											<img src="img/features/f-icon4.png" alt="">
										</div>
										<h6>Scegli prodotti e quantità</h6>
										<p>Li vedrai nel tuo carrello</p>
									</div>
								</div>
								<!-- single features -->
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="single-features">
										<div class="f-icon">
											<img src="img/features/carrello_icona.png" alt="">
										</div>
										<h6>Conferma l\'ordine</h6>
										<p>Accetta il carrello</p>
									</div>
								</div>
								<!-- single features -->
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="single-features">
										<div class="f-icon">
											<img src="img/features/f-icon3.png" alt="">
										</div>
										<h6>Attendi la nostra telefonata</h6>
										<p>Ti confermeremo l\'ordine</p>
									</div>
								</div>
								<!-- single features -->
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="single-features">
										<div class="f-icon">
											<img src="img/features/f-icon1.png" alt="">
										</div>
										<h6>Attendi la spedizione</h6>
										<p>Subito disponibile</p>
									</div>
								</div>
							</div>
						</div>
					</section>
			';
			return $my_html;
		}

		public static function category_area( $v='false' ){
			$url=panel::get_url();
			$my_html='
					<section class="category-area">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-8 col-md-12">
									<div class="row">
										<div class="col-lg-8 col-md-8">
											<div class="single-deal">
												<div class="overlay"></div>
												<img class="img-fluid w-100" src="'.$url.''.$v[0]["foto"].'" alt="">
												<a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
													<div class="deal-details">
														<h6 class="deal-title">'.$v[0]["nome"].'</h6>
													</div>
												</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="single-deal">
												<div class="overlay"></div>
												<img class="img-fluid w-100" src="'.$url.''.$v[1]["foto"].'" alt="">
												<a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
													<div class="deal-details">
														<h6 class="deal-title">'.$v[1]["nome"].'</h6>
													</div>
												</a>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="single-deal">
												<div class="overlay"></div>
												<img class="img-fluid w-100" src="'.$url.''.$v[2]["foto"].'" alt="">
												<a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
													<div class="deal-details">
														<h6 class="deal-title">'.$v[2]["nome"].'</h6>
													</div>
												</a>
											</div>
										</div>
										<div class="col-lg-8 col-md-8">
											<div class="single-deal">
												<div class="overlay"></div>
												<img class="img-fluid w-100" src="'.$url.''.$v[3]["foto"].'" alt="">
												<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
													<div class="deal-details">
														<h6 class="deal-title">'.$v[3]["nome"].'</h6>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="single-deal">
										<div class="overlay"></div>
										<img class="img-fluid w-100" src="'.$url.'img/category/c5.jpg" alt="">
										<a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
											<div class="deal-details">
												<h6 class="deal-title">Offerte</h6>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</section>
			';
			return $my_html;
		}

		public static function single_product( $art, $col_lg='3'){
			$my_html='	<!-- single product -->
						<div class="col-lg-'.$col_lg.' col-md-6">
							<div class="single-product my_shadow">
								<div class="col-lg-12 bg-white border-top border-left border-right border-light p-3 d-none d-lg-inline-block text-center justify-content-center align-items-center" style="height:200px;overflow-y:hidden;"  >
									<input type="hidden" name="articolo" value="'.$art["id"].'" />
									<img class="img-fluid apri_prodotto pointer" style="vertical-align: middle;" src="'.$art["foto_mini"].'" style="height:200px;overflow-y:hidden;" alt="">
								</div>

								<div class="col-lg-12 bg-white border-top border-left border-right border-light p-3 d-none d-md-inline-block d-lg-none text-center justify-content-center align-items-center" style="height:250px;overflow-y:hidden;"  >
									<img class="img-fluid" style="vertical-align: middle;" src="'.$art["foto_mini"].'" style="height:200px;overflow-y:hidden;" alt="">
								</div>

								<img class="img-fluid d-lg-none d-md-none" src="'.$art["foto_mini"].'" alt="">
								<div class="product-details bg-light pt-2 pl-2 pr-2 pb-2 my_shadow">
									<h6>'.$art["nome"].'</h6>
									<div class="price">
										<h6>'.$art["prezzo"].' €</h6>
										<h6 class="l-through">'.$art["prezzo_cancellato"].' €</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info ">
											<span class="ti-bag"></span>
											<p class="hover-text">Acquista</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">Dettagli</p>
										</a>
									</div>
								</div>
							</div>
						</div>';
			return $my_html;
		}


		public static function single_product_slider( $v, $titolo, $testo ){
			$my_html='<!-- single product slide -->
						<div class="single-product-slider">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-lg-6 text-center">
										<div class="section-title">
											<h1>'.$titolo.'</h1>
											<p>'.$testo.'</p>
										</div>
									</div>
								</div>
								<div class="row">';
			foreach ( $v as $art ) {
				if( strlen($art["nome"])<20 )
					$art["nome"].='<br/><br/>';
				$my_html.=panel::single_product( $art, '3');
			}
			$my_html.='
								</div>
							</div>
						</div>';
			return $my_html;
		}

		public static function product_area( $v=false ){
			$my_html='
					<section class="owl-carousel active-product-area section_gap">
						'.panel::single_product_slider( $v["last_art"], 'Ultimi Prodotti', 'Gli ultimi prodotti arrivati direttamente nei nostri scaffali!!!' ).'
						'.panel::single_product_slider( $v["best_art"],'Le offerte', 'I migliori articoli in offerta, approfittane prima che finiscano' ).'
						'.panel::single_product_slider( $v["price_art"],'I Best', 'I migliori prodotti a prezzi convenienti' ).'
					</section>
			';
			return $my_html;
		}

		public static function exclusive_area( $v=false ){
			$my_html='
					<section class="exclusive-deal-area">
						<div class="container-fluid">
							<div class="row justify-content-center align-items-center">
								<div class="col-lg-6 no-padding exclusive-left">
									<div class="row clock_sec clockdiv" id="clockdiv">
										<div class="col-lg-12">
											<h1>Exclusive Hot Deal Ends Soon!</h1>
											<p>Who are in extremely love with eco friendly system.</p>
										</div>
										<div class="col-lg-12">
											<div class="row clock-wrap">
												<div class="col clockinner1 clockinner">
													<h1 class="days">150</h1>
													<span class="smalltext">Days</span>
												</div>
												<div class="col clockinner clockinner1">
													<h1 class="hours">23</h1>
													<span class="smalltext">Hours</span>
												</div>
												<div class="col clockinner clockinner1">
													<h1 class="minutes">47</h1>
													<span class="smalltext">Mins</span>
												</div>
												<div class="col clockinner clockinner1">
													<h1 class="seconds">59</h1>
													<span class="smalltext">Secs</span>
												</div>
											</div>
										</div>
									</div>
									<a href="" class="primary-btn">Shop Now</a>
								</div>
								<div class="col-lg-6 no-padding exclusive-right">
									<div class="active-exclusive-product-slider">';
				if( $v ){
					foreach ( $v as $art ) {
						$my_html.=' <!-- single exclusive carousel -->
									<div class="single-exclusive-slider">
										<img class="img-fluid" src="'.$art["foto"].'" alt="">
										<div class="product-details">
											<div class="price">
												<h6>'.$art["prezzo"].' €</h6>
												<h6 class="l-through">'.$art["prezzo_cancellato"].' €</h6>
											</div>
											<h4>'.$art["nome"].'</h4>
											<div class="add-bag d-flex align-items-center justify-content-center">
												<a class="add-btn" href=""><span class="ti-bag"></span></a>
												<span class="add-text text-uppercase">Compra</span>
											</div>
										</div>
									</div>';
					}	
				}				
					$my_html.='					
									</div>
								</div>
							</div>
						</div>
					</section>
			';
			return $my_html;
		}

		public static function brand_area(){
			$my_html='
					<section class="brand-area section_gap">
						<div class="container">
							<div class="row">
								<a class="col single-img" href="#">
									<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
								</a>
								<a class="col single-img" href="#">
									<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
								</a>
								<a class="col single-img" href="#">
									<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
								</a>
								<a class="col single-img" href="#">
									<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
								</a>
								<a class="col single-img" href="#">
									<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
								</a>
							</div>
						</div>
					</section>
			';
			return $my_html;
		}

		public static function related_product_area( $v ){
			$my_html='
				<section class="related-product-area section_gap_bottom">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 text-center">
								<div class="section-title">
									<h1>I Più venduti</h1>
									<p>Ecco la la lista degli articoli più venduti della settimana, la richiesta è alta, attento che potrebbero terminare!!!</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-9">
								<div class="row">';
			foreach ( $v as $art ) {
				$my_html.=' <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a class="d-inline-block" href="#" style="width:70px;height:70px;background:url(\''.$art["foto_mini"].'\');
											background-position:center center;background-size:contain;background-repeat:no-repeat;"; >
									</a>
									<div class="desc">
										<a href="#" class="title">'.$art["nome"].' €</a>
										<div class="price">
											<h6>'.$art["prezzo"].'</h6>
											<h6 class="l-through">'.$art["prezzo_cancellato"].' €</h6>
										</div>
									</div>
								</div>
							</div>';
			}
									
			$my_html.='						
								</div>
							</div>
							<div class="col-lg-3">
								<div class="ctg-right">
									<a href="#" target="_blank">
										<img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			';
			return $my_html;
		}

		public static function footer_area(){
			$my_html='
					<footer class="footer-area section_gap">
						<div class="container">
							<div class="row">
								<div class="col-lg-3  col-md-6 col-sm-6">
									<div class="single-footer-widget">
										<h6>About Us</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
											magna aliqua.
										</p>
									</div>
								</div>
								<div class="col-lg-4  col-md-6 col-sm-6">
									<div class="single-footer-widget">
										<h6>Newsletter</h6>
										<p>Stay update with our latest</p>
										<div class="" id="mc_embed_signup">

											<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
											 method="get" class="form-inline">

												<div class="d-flex flex-row">

													<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'Enter Email \'"
													 required="" type="email">


													<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
													<div style="position: absolute; left: -5000px;">
														<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
													</div>

													<!-- <div class="col-lg-4 col-md-4">
																<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
															</div>  -->
												</div>
												<div class="info"></div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-lg-3  col-md-6 col-sm-6">
									<div class="single-footer-widget mail-chimp">
										<h6 class="mb-20">Instragram Feed</h6>
										<ul class="instafeed d-flex flex-wrap">
											<li><img src="img/i1.jpg" alt=""></li>
											<li><img src="img/i2.jpg" alt=""></li>
											<li><img src="img/i3.jpg" alt=""></li>
											<li><img src="img/i4.jpg" alt=""></li>
											<li><img src="img/i5.jpg" alt=""></li>
											<li><img src="img/i6.jpg" alt=""></li>
											<li><img src="img/i7.jpg" alt=""></li>
											<li><img src="img/i8.jpg" alt=""></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-6">
									<div class="single-footer-widget">
										<h6>Follow Us</h6>
										<p>Let us be social</p>
										<div class="footer-social d-flex align-items-center">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-dribbble"></i></a>
											<a href="#"><i class="fa fa-behance"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
								<p class="footer-text m-0"><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
											Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
											<!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
								</p>
							</div>
						</div>
					</footer>
			';
			return $my_html;
		}

		public static function js_script(){
			$my_html='
				<script src="js/vendor/jquery-2.2.4.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
				 crossorigin="anonymous"></script>
				<script src="js/vendor/bootstrap.min.js"></script>
				<script src="js/jquery.ajaxchimp.min.js"></script>
				<script src="js/jquery.nice-select.min.js"></script>
				<script src="js/jquery.sticky.js"></script>
				<script src="js/nouislider.min.js"></script>
				<script src="js/countdown.js"></script>
				<script src="js/jquery.magnific-popup.min.js"></script>
				<script src="js/owl.carousel.min.js"></script>
				<!--gmaps Js-->
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
				<script src="js/gmaps.min.js"></script>
				<script src="js/main.js"></script>
				<script src="js/app.js"></script>
			';
			return $my_html;
		}

		public static function sidebar_categories( $cat ){

			$my_html='  <div class="sidebar-categories">
							<div class="head">Categorie</div>
							<ul class="main-categories">
								<input type="hidden" id="id_tag" name="id_tag" value="0" />';
			foreach ( $cat as $v ) {
					$my_html.=' <li class="main-nav-list">
									<a data-toggle="collapse" href="#'.$v["nome"].'" aria-expanded="false" aria-controls="'.$v["nome"].'">
										<span class="lnr lnr-arrow-right"></span>'.$v["nome"].'<span class="number">('.$v["numero"].')</span>
									</a>
									<ul class="collapse" id="'.$v["nome"].'" data-toggle="collapse" aria-expanded="false" aria-controls="'.$v["nome"].'" >';
				if( $v["tag"] ){	
						foreach ( $v["tag"] as $tag ) {
								$my_html.=' <li class="main-nav-list child">
												<a class="pointer sel_categoria" tag_code="'.$tag["id"].'" >'.$tag["nome"].'<span class="number">('.$tag["numero"].')</span></a>
											</li>';	
						}
				}
				$my_html.='			</ul>
								</li>';
			}
			$my_html.='		</ul>
						</div>';
			return $my_html;
		}

		public static function common_filters( $tag=false ){
			$my_html='  <div class="common-filter">
							<div class="head">Tag Popolari</div>
							<form action="#">
								<ul>';
			foreach ( $tag as $t ) {
				$my_html.=' <li class="filter-list">
								<input class="pixel-radio" type="radio" id="black" name="set_tag" value="'.$t["id"].'"  >
								<label for="black">'.$t["nome"].'<span>('.$t["numero"].')</span></label>
							</li>';
			}
			$my_html.='						
								</ul>
							</form>
						</div>';
			return $my_html;
		}

		public static function sidebar_filters( $marchi, $tags ){
			$my_html='<div class="sidebar-filter mt-50">
						<div class="top-filter-head">Filtra Prodotti</div>
						<div class="common-filter">
							<div class="head">Brands</div>
							<form action="#">
								<ul>';
			if( $marchi ){
				foreach ( $marchi as $v) {
					$my_html.=' <li class="filter-list">
									<input class="pixel-radio" type="radio" id="'.$v["nome"].'" name="brand">
									<label for="apple">'.$v["nome"].'<span>('.$v["numero"].')</span></label>
								</li>';
				}
			}
			$my_html.='						
								</ul>
							</form>
						</div>
						'.panel::common_filters( $tags ).'
						<div class="common-filter">
							<div class="head">Prezzo</div>
							<div class="price-range-area">
								<div id="price-range"></div>
								<div class="value-wrapper d-flex">
									<div class="price">Prezzo:</div>
									<span>€</span>
									<div id="lower-value"></div>
									<div class="to">to</div>
									<span>€</span>
									<div id="upper-value"></div>
								</div>
							</div>
						</div>
					</div>';
			return $my_html;
		}

		public static function lattest_product_area( $v_art ){
			$my_html='	<section class="lattest-product-area pb-40 category-list">
							<div id="" class="row">';
								foreach ( $v_art as $art ) {
									if( strlen($art["nome"])<20 )
										$art["nome"].='<br/><br/>';
									$my_html.=panel::single_product( $art, '4');
								}
								$my_html.='
							</div>
						</section>';
			return $my_html;
		}

		public static function category_container( $cat, $marchi, $v_art, $tags ){
			$my_html='<div id="category_container" class="container mb-5 pb-5">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-md-5">
								'.panel::sidebar_categories( $cat ).'
								'.panel::sidebar_filters( $marchi, $tags ).'
							</div>
							<div class="col-xl-9 col-lg-8 col-md-7">
								<!-- Start Filter Bar -->
								<div class="filter-bar d-flex flex-wrap align-items-center">
									<div class="sorting">
										<select class="order_by_class" id="order_by" name="order_by" >
											<option value="ord_pred">Ordinamento Predefinito</option>
											<option value="ord_nome_asc">Ordina nome A-Z</option>
											<option value="ord_nome_desc">Ordina nome Z-A</option>
											<option value="ord_prezzo_asc">Ordina Prezzo A-Z</option>
											<option value="ord_prezzo_desc">Ordina Prezzo Z-A</option>
										</select>
									</div>
									<div class="sorting mr-auto">
										<select id="limit_product" name="limit_product" >
											<option value="12">Show 12</option>
											<option value="24">Show 24</option>
											<option value="40">Show 40</option>
										</select>
									</div>
									<div class="pagination">
										<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
										<a href="#" class="active">1</a>
										<a href="#">2</a>
										<a href="#">3</a>
										<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
										<a href="#">6</a>
										<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
									</div>
								</div>
								<!-- End Filter Bar -->
								<!-- Start Best Seller -->
								'.panel::lattest_product_area( $v_art ).'
								<!-- End Best Seller -->
								<!-- Start Filter Bar -->
								<div class="filter-bar d-flex flex-wrap align-items-center">
									<div class="sorting mr-auto">
										 
									</div>
									<div class="pagination">
										<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
										<a href="#" class="active">1</a>
										<a href="#">2</a>
										<a href="#">3</a>
										<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
										<a href="#">6</a>
										<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
									</div>
								</div>
								<!-- End Filter Bar -->
							</div>
						</div>
					</div>';
			return $my_html;
		}

		public static function quick_product_view(){
			$my_html='<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="container relative">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="product-quick-view">
										<div class="row align-items-center">
											<div class="col-lg-6">
												<div class="quick-view-carousel">
													<div class="item" style="background: url(img/organic-food/q1.jpg);">

													</div>
													<div class="item" style="background: url(img/organic-food/q1.jpg);">

													</div>
													<div class="item" style="background: url(img/organic-food/q1.jpg);">

													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="quick-view-content">
													<div class="top">
														<h3 class="head">Mill Oil 1000W Heater, White</h3>
														<div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
														<div class="category">Category: <span>Household</span></div>
														<div class="available">Availibility: <span>In Stock</span></div>
													</div>
													<div class="middle">
														<p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are
															looking for something that can make your interior look awesome, and at the same time give you the pleasant
															warm feeling during the winter.</p>
														<a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
													</div>
													<div class="bottom">
														<div class="color-picker d-flex align-items-center">Color:
															<span class="single-pick"></span>
															<span class="single-pick"></span>
															<span class="single-pick"></span>
															<span class="single-pick"></span>
															<span class="single-pick"></span>
														</div>
														<div class="quantity-container d-flex align-items-center mt-15">
															Quantity:
															<input type="text" class="quantity-amount ml-15" value="1" />
															<div class="arrow-btn d-inline-flex flex-column">
																<button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
																<button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
															</div>

														</div>
														<div class="d-flex mt-20">
															<a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
															<a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
															<a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>';
			return $my_html;
		} 

		public static function product_image_area( $v ){  
			$my_html='<div class="product_image_area pt-0"  >
							<div class="container">
								<div class="row s_product_inner">
									<div class="col-lg-6 text-center  align-self-center justify-content-center p-4 border-orange mt-5">
										<div class="s_Product_carousel ">
											<div class="single-prd-item">
												<img class="img-fluid" src="'.$v["foto"].'" alt="">
											</div>
										</div>
									</div>
									<div class="col-lg-5 offset-lg-1">
										<div class="s_product_text">
											<h3>'.$v["nome"].'</h3>
											<h2>'.$v["prezzo"].' €</h2>
											<ul class="list">
												<li><a class="active" href="#"><span>Category</span> : '.$v["nome_categoria"].'</a></li>
												<li><a href="#"><span>Disponibilità</span> : '.$v["qnt"].'</a></li>
											</ul>
											<p>'.$v["descrizione"].'</p>
											<div class="product_count">
												<label for="qty">Quantity:</label>
												<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
												<button onclick="var result = document.getElementById(\'sst\'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
												 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
												<button onclick="var result = document.getElementById(\'sst\'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
												 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
											</div>
											<div class="card_area d-flex align-items-center">
												<a class="primary-btn" href="#">Compra</a>
												<a href="category.php" class="btn btn-outline-secondary mr-2">Indietro</button>
												<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>';
			return $my_html;
		}

		public static function product_description_area( $v ){
			$my_html='<section class="product_description_area">
						<div class="container">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descrizione</a>
								</li>
								
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									'.$v["descrizione"];
			if( $v["tag"] ){
				$my_html.='<br/>';
				foreach ( $v["tag"] as $tag ) {
					$my_html.=' <div class="mt-3" >
									<input type="hidden" value="'.$tag["id"].'" />
									<button type="button" id="apri_tag" class="btn btn-outline-primary">'.$tag["nome"].'</button>
								</div>';
				}
			}
			$my_html.='			
								</div>
							</div>
						</div>
					</section>';
			return $my_html;
		}

		public static function product_page( $v ){
			$my_html=panel::product_image_area( $v );
			$my_html.=panel::product_description_area( $v );
			return $my_html;
		}
	 

	}




?>
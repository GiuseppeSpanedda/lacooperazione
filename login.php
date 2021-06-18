<?php
        require_once("./panel.php");
        require_once("./some_query.php"); 
		if( $db=some_query::connect() ){
			$v['cat']=some_query::get_categories( $db, 'id' );  
			$v['marchi']=some_query::get_marchi( $db, 'nome' );
			$v['top_tags']=some_query::get_top_tags( $db );  
			$v['last_art']=some_query::get_products( $db, 'date DESC', 'LIMIT 8' );
			$v['name_art']=some_query::get_products( $db, 'nome', 'LIMIT 8' );
			$v['price_art']=some_query::get_products( $db, 'prezzo DESC', 'LIMIT 8' ); 
			$v['related_art']=some_query::get_products( $db, 'nome', 'LIMIT 9' );
			$v['exclusive_art']=some_query::get_products( $db, 'nome', 'LIMIT 5' );
		}

	?> 
<!DOCTYPE html>
<html lang="ita" class="no-js">

<head>
	<?= panel::head("Categorie Prodotti"); ?>
</head>
<body>
	<!-- Start Header Area -->
	<?php echo panel::header('shop'); ?>
	<!-- End Header Area -->
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="registrazione.html">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" action="login.php" method="POST" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
	
	<?php echo panel::footer_area(); ?>
	<!-- End footer Area -->
	<!-- Modal Quick Product View -->
	<?php echo panel::quick_product_view(); ?>
	<?php echo panel::js_script(); ?> 
</body>

</html>
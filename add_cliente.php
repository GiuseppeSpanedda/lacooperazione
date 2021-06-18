<?php
        require_once("./parti_html/panel.php");
        require_once("./php_file/some_query.php"); 
        require_once("./php_file/user.php"); 
        
		if( $db = some_query::connect() ){

		      $v = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);  // riceve i dati dal form in formato POST
              $error = user::create( $db, $v ) {  // crea un nuovo utente
 		         
		} else 
		    $error=true;

	?> 
<!DOCTYPE html>
<html lang="ita" class="no-js">
<head>
	<?= panel::head("Categorie Prodotti"); ?>
</head>
<body>
	<!-- Start Header Area -->
	<?= panel::header('shop'); ?>
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
		<?php if(!$error){ ?>	 
			<p>Utente Salvato</p>
		<?php }else ?>
			<p>Errore</p>
	</section>
	<!--================End Login Box Area =================-->
	
	<?php echo panel::footer_area(); ?>
	<!-- End footer Area -->
	<!-- Modal Quick Product View -->
	<?php echo panel::quick_product_view(); ?>
	<?php echo panel::js_script(); ?> 
</body>
</html>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<?php 
			require_once("./parti_html/panel.php");
			require_once("./php_file/some_query.php"); 
			echo panel::head("Homepage");
		?>
	</head>
	<body>

		<?php

			if( $db=some_query::connect() ){
				$v['cat']=some_query::get_categories( $db, 'id' ); 
				$v['last_art']=some_query::get_products( $db, 'date DESC', 'LIMIT 8' );
				$v['best_art']=some_query::get_products( $db, 'nome', 'LIMIT 8' );
				$v['price_art']=some_query::get_products( $db, 'prezzo DESC', 'LIMIT 8' ); 
				$v['related_art']=some_query::get_products( $db, 'nome', 'LIMIT 9' );
				$v['exclusive_art']=some_query::get_products( $db, 'nome', 'LIMIT 5' );
			}

		?>

		<!-- Start Header Area -->
		<?php echo panel::header('home'); ?>
		<!-- End Header Area -->
		
		<!-- start banner Area -->
		<?php echo panel::banner_area(); ?>
		<!-- End banner Area -->

		<!-- start features Area -->
		<?php echo panel::features_area(); ?>
		<!-- end features Area -->

		<!-- Start category Area -->
		<?php echo panel::category_area( $v['cat'] ); ?>
		<!-- End category Area -->

		<!-- start product Area -->
		<?php echo panel::product_area($v); ?>
		<!-- end product Area -->

		<!-- Start exclusive deal Area -->
		<?php echo panel::exclusive_area( $v['exclusive_art'] ); ?>
		<!-- End exclusive deal Area -->

		<!-- Start brand Area -->
		<?php echo panel::brand_area(); ?>
		<!-- End brand Area -->

		<!-- Start related-product Area -->
		<?php echo panel::related_product_area( $v['related_art'] ); ?>
		<!-- End related-product Area -->

		<!-- start footer Area -->
		<?php echo panel::footer_area(); ?>
		<!-- End footer Area -->

		<?php echo panel::js_script(); ?>
	</body>
</html>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<?php 
			require_once("./panel.php");
			require_once("./some_query.php"); 
			echo panel::head("Categorie Prodotti");
	?>
</head>

<body>
	<?php

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
	<!-- Start Header Area -->
	<?php echo panel::header('single-product'); ?>
	<!-- End Header Area -->
	<!-- Start Banner Area -->
	<?php echo panel::banner_area_single_product(); ?>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<?php echo panel::product_image_area(); ?>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<?php echo panel::product_description_area(); ?>
	<!--================End Product Description Area =================-->

	<!-- Start related-product Area -->
	<?php echo panel::related_product_area( $v['related_art'] ); ?>
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<?php echo panel::footer_area(); ?>
	<!-- End footer Area -->

	<?php echo panel::js_script(); ?>

</body>

</html>
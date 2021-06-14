<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<?php 
			require_once("./parti_html/panel.php");
			require_once("./php_file/some_query.php"); 
			echo panel::head("Categorie Prodotti");
	?>
</head>

<body id="category">

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
	<?php echo panel::header('shop'); ?>
	<!-- End Header Area -->
	<!-- Start Banner Area -->
	<?php echo panel::banner_area_organic_breadcrumb(); ?>
	<!-- End Banner Area -->
	<?php echo panel::category_container( $v['cat'], $v['marchi'], $v['name_art'], $v['top_tags'] ); ?>
	<!-- Start related-product Area -->
	<?php echo panel::related_product_area( $v['related_art'] ); ?>
	<!-- End related-product Area -->
	<!-- start footer Area -->
	<?php echo panel::footer_area(); ?>
	<!-- End footer Area -->
	<!-- Modal Quick Product View -->
	<?php echo panel::quick_product_view(); ?>
	<?php echo panel::js_script(); ?>
</body>

</html>
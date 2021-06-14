<?php
   	header('Content-Type: application/json'); 
    ob_start(); session_start(); ob_end_flush();

    class apri_prodotto{
        var $error=false;

		function __construct( $v ){ 
		   $this->v = $v;
		}  

		function connDB(){
		   if( $db = some_query::connect() ){
		        
		        $this->art = some_query::get_single_product( $this->v["id"], $db ); 
		   }else 
		   		$this->error=true;
		}

		function print(){
		    if( !$this->error ){
	        	$v_return["check"] = true;
				$v_return["testo_titolo"] = panel::banner_area_single_product( $this->art["nome"] ); 
				$v_return["text"] = panel::product_page( $this->art ); 

   		    }else
		        $v_return["check"] = false;
		    $myJSON = json_encode( $v_return );
		    echo $myJSON;
		}

    } 


	require('some_query.php');
	require('../parti_html/panel.php');
	$safePost = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	$do = new apri_prodotto($safePost);
	$do->connDB();
	$do->print();


?>
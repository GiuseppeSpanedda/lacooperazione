<?php
   	header('Content-Type: application/json'); 
    ob_start(); session_start(); ob_end_flush();

    class change_chat{
        var $error=false;

		function __construct( $v ){ 
		   $this->v = $v;
		} 

		function get_order_by(){
			$order="";
			switch ( $this->v["order_by"] ) {
					case 'ord_pred':
						$order="nome";
						break;
					case 'ord_nome_asc':
						$order="nome";
						break;
					case 'ord_nome_desc':
						$order="nome DESC";
						break;
					case 'ord_prezzo_asc':
						$order="prezzo";
						break;
					case 'ord_prezzo_desc':
						$order="prezzo DESC";
						break;
			}
			return $order;	
		}

		function connDB(){
		   if( $db = some_query::connect() ){
		        
		        $limit=" LIMIT ".$this->v["limit"];
		        $order=$this->get_order_by();
		        
		        if( !$this->v["tag"] )
		        	$this->v_art = some_query::get_products( $db, $order, $limit );
 				else
 					$this->v_art = some_query::get_products_with_tags( $db, $this->v["tag"], $order, $limit );

		   }else 
		   		$this->error=true;
		}

		function print(){
		    if( !$this->error ){
	        	$v_return["check"] = true;
				$v_return["text"] = panel::lattest_product_area( $this->v_art ); 

   		    }else
		        $v_return["check"] = false;
		    $myJSON = json_encode( $v_return );
		    echo $myJSON;
		}

    } 


	require('some_query.php');
	require('../parti_html/panel.php');
	$safePost = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	$do = new change_chat($safePost);
	$do->connDB();
	$do->print();


?>
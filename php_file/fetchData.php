<?php
   	ob_start(); session_start(); ob_end_flush();
   	header('Content-Type: application/json'); 
    
    class fetchData{
        var $error=false;

		function __construct( $v ){ 
			$this->search = $v["search"];
		} 

		function connDB(){
		   if( $db = some_query::connect() ){

		   		$response=some_query::get_comune($db, $this->search);
		   		echo json_encode($response);

		    }else 
		   		$this->error=true;
		}
    } 

    require('some_query.php');
	$safePost = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	$do = new fetchData($safePost);
	$do->connDB(); 

   	

?>
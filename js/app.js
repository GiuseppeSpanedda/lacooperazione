$(document).ready(function(){

	my_url='http://127.0.0.1/lacooperazione/';

	function show_products( order_by, limit, tag ){ 
	    let url = "./php_file/change_order_by.php";
	    let data = { "order_by":order_by, "limit":limit, "tag":tag };
	    let blocco=$(".lattest-product-area");

	    $.post(url, data, function ( msg ) { 
	        if( msg.check==true ){ 
	              blocco.replaceWith(msg.text);
	        }else 
	          	alert("Error!!!"); 
	    });
	}

	$("body").on('change', "#order_by",function(){ 
	  	let puls = $(this);
	  	
	  	let order_by=puls.val();
	  	let limit=$("#limit_product").val();
	  	let id_tag=$("#id_tag").val();
	  	
	  	show_products( order_by, limit, id_tag );
	});

	$("body").on('change', "#limit_product",function(){ 
	  	let puls = $(this);
	  	
	  	let limit=puls.val();
	  	let order_by=$("#order_by").val();
	  	let id_tag=$("#id_tag").val();
	  	
	  	show_products( order_by, limit, id_tag );
	});

	$("body").on('click', ".sel_categoria",function(){ 
	  	
		let puls = $(this);
		let tag_code=puls.attr("tag_code");
		$("#id_tag").val(tag_code);

		let limit=$("#limit_product").val();
		let order_by=$("#order_by").val();
		let id_tag=$("#id_tag").val();

	  	show_products( order_by, limit, id_tag );
	});

	$("body").on('click', ".apri_prodotto",function(){ 
	  	
		let puls = $(this);
		let id=puls.prev().val();
		
	  	let url = "./php_file/apri_prodotto.php";
	    let data = { "id":id  };
	    let blocco=$("#category_container");

	    $.post(url, data, function ( msg ) { 
	        if( msg.check==true ){ 
	             blocco.replaceWith(msg.text);
	            $(".organic-breadcrumb").replaceWith(msg.testo_titolo);
	        }else 
	          	alert("Error!!!"); 
	    });

	});



});
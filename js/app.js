$(document).ready(function(){

	my_url='http://127.0.0.1/lacooperazione/';
	// $my_url="https://lacooperazione.com/";

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
	
	$(document).on("focus","#comune_legale",function(e) {
	    if ( !$(this).data("autocomplete") ) { // If the autocomplete wasn't called yet:	       	
			 $(this).autocomplete({   
	            source: function( request, response ) {
	            // Fetch data

	              $.ajax({
	                  url: "./php_file/fetchData.php",
	                  type: 'post',
	                  dataType: "json",
	                  data: {
	                      search: request.term
	                  },
	                  success: function( data ) {
	                      response( data );
	                  }
	              });
	            },
	            select: function (event, ui) {
	               // Set selection 
				   $('#comune_legale').val(ui.item.label); // display the selected text
	               $('#id_comune_legale').val(ui.item.value); // save selected id to input
	               $('#provincia_legale').val( ui.item.provincia );
	               $('#cap_legale').val( ui.item.cap ); 
	               return false;
	            },
	            focus: function(event, ui){ 
	               $( "#comune_legale" ).val( ui.item.label );
	               $( "#id_comune_legale" ).val( ui.item.value );
	               $('#provincia_legale').val( ui.item.provincia );
	               $('#cap_legale').val( ui.item.cap ); 
	               return false;
	            }
	        });
	    }
	  });

	  $(document).on("focus","#comune_servizio",function(e) {
	    if ( !$(this).data("autocomplete") ) { // If the autocomplete wasn't called yet:	       	
			 $(this).autocomplete({   
	            source: function( request, response ) {
	            // Fetch data

	              $.ajax({
	                  url: "./php_file/fetchData.php",
	                  type: 'post',
	                  dataType: "json",
	                  data: {
	                      search: request.term
	                  },
	                  success: function( data ) {
	                      response( data );
	                  }
	              });
	            },
	            select: function (event, ui) {
	               // Set selection 
				   $('#comune_servizio').val(ui.item.label); // display the selected text
	               $('#id_comune_servizio').val(ui.item.value); // save selected id to input
	               $('#provincia_servizio').val( ui.item.provincia );
	               $('#cap_servizio').val( ui.item.cap ); 
	               return false;
	            },
	            focus: function(event, ui){ 
	               $( "#comune_servizio" ).val( ui.item.label );
	               $( "#id_comune_servizio" ).val( ui.item.value );
	               $('#provincia_servizio').val( ui.item.provincia );
	               $('#cap_servizio').val( ui.item.cap ); 
	               return false;
	            }
	        });
	    }
	  });	




});
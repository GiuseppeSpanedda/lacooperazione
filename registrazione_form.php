<?php
        require_once("./parti_html/panel.php");
        require_once("./php_file/some_query.php"); 
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
		<form class="form-submit container" action="add_cliente.php" method="POST">
				<!-- Dati Azienda -->
				<div class="row justify-content-md-center"> 
					<div class='col-12 text-center'>
						<h2>Form Registrazione</h2>
					</div>
					<div class='col-12 border-bottom mt-3 mb-4'>
						<h3>Dati Azienda</h3>
					</div>
					<div class="col-lg-6">
							<label for="floatingInput-text-center"> Nome</label>
    						<input type="text" class="form-control" name ="nome" id="nome" placeholder="Nome" required >
     						
     						<label for="floatingInput-text-center"> Ragione Sociale </label>
    						<input type="text" class="form-control" name ="ragione_sociale" id="ragione_sociale" placeholder="Ragione Sociale" required >
							
							<div class='row'>
								<div class='col-lg-5'>
									<label for="floatingInput-text-center"> Partita Iva </label>
    								<input  class="form-control" name="partita_iva" id="partita_iva" placeholder="Partita Iva" required >
								</div>
								<div class='col-lg-5'>
									<label for="floatingInput-text-center"> Codice Fiscale Impresa </label>
    								<input type="text" class="form-control" name ="codice_fiscale_impresa" id="codifce_fiscale_impresa" placeholder="Codice Fiscale Impresa"  required >
								</div>
								<div class='col-lg-2'>
									<label for="floatingInput-text-center"> Sconto </label>
    	                			<input type="number" class="form-control" name ="sconto" id="sconto" placeholder="0" min="0" max="100">
								</div>
    						</div>
     				</div>
     				<div class="col-lg-6">
     						<label for="floatingInput-text-center"> Username </label>
    						<input type="text" class="form-control" name ="username" id="username" placeholder="Username"  required  >
     						
     						<label for="floatingInput-text-center"> Email </label>
    						<input type="email" class="form-control" name ="email" id="email" placeholder="E-mail"  required  >
     						
     						<div class='row'>
     							
     							<div class='col-lg-6'>
     								<label for="floatingInput-text-center"> Password </label>
         							<input type="password" class="form-control" name ="password" id="password" placeholder="Password"  required  >
     							</div>
     							<div class='col-lg-6'>
     								<label for="floatingInput-text-center"> Conferma Password </label>
         							<input type="password" class="form-control" name ="password" id="password" placeholder="Ripeti password"  required  >
     							</div>
     						</div>
 					</div>
 				</div>	
 				<!-- End Dati Azienda -->
	
 				<!-- Dati Recapiti -->
 				<div class="row justify-content-md-center mt-4"> 
					<div class='col-12 border-bottom mt-3 mb-4'>
						<h3>Recapiti telefonici e Indirizzi</h3>
					</div>
					<div class='col-6'>
						<div class='row'>
							<div class="col-lg-6">	
                          		<label for="inputText">Telefono principale</label>
                          		<input type="text" class="form-control" name= "telefono1" id="telefono1" placeholder="n di telefono principale">
                         	</div>
                         	<div class="form-group col-md-6">
                          		<label for="inputText">Telefono secondario</label>
                          		<input type="text" class="form-control" name="telefono2" id="telefono2" placeholder="n di telefono secondario">
                         	</div>
						</div>
					</div>
					
					<div class='col-6'>
						<div class='row'>
							<div class="form-group col-md-4">
                              		<label for="inputText">Comune legale</label>
                              		<input type="hidden" class="form-control" name="id_comune_legale" id="id_comune_legale"  required >
                              		<input type="text" class="form-control" name="comune_legale" id="comune_legale" placeholder="comune legale"
                              autocomplete="on" required >                              
                         	</div>
							<div class="form-group col-md-4">
                          		<label for="inputText">Provincia legale</label>
                          		<input type="text" class="form-control" name="provincia_legale" id="provincia_legale" placeholder="provincia legale" autocomplete='on' required  >
                         	</div>
                         	<div class="form-group col-md-4">
                          		<label for="inputText">Cap legale</label>
                          		<input type="text" class="form-control" name="cap_legale" id="cap_legale" placeholder="cap legale" autocomplete="on" >
                         	</div> 
						</div>
					</div>
					
					<div class='col-6'>
						<div class='row'>
							<div class="col-lg-6">	
                          		<label for="inputText">Cellulare principale</label>
                  				<input type="text" class="form-control" name="cellulare1" id="cellulare1" placeholder="n di cellulare principale">
                         	</div>
                         	<div class="form-group col-md-6">
                          		<label for="inputText">Cellulare secondario</label>
                  				<input type="text" class="form-control" name="cellulare2" id="cellulare2" placeholder="n di cellulare secondario ">
                         	</div>
						</div>
					</div>
                   
                    <div class='col-6'>
						<div class='row'>
							<div class="form-group col-md-4">
                              		<label for="inputText">Comune Servizio</label>
                              		<input type="hidden"  name="id_comune_servizio" id="id_comune_servizio"  required >
                              		<input type="text" class="form-control" name="comune_servizio" id="comune_servizio" placeholder="comune servizio"
                              autocomplete="on"  >
                         	</div>
							<div class="form-group col-md-4">
                          		<label for="inputText">Provincia Servizio</label>
                          		<input type="text" class="form-control" name="provincia_servizio" id="provincia_servizio" placeholder="provincia servizio" autocomplete='on' >
                         	</div>
                         	<div class="form-group col-md-4">
                          		<label for="inputText">Cap Servizio</label>
                          		<input type="text" class="form-control" name="cap_servizio" id="cap_servizio" placeholder="cap servizio">
                         	</div> 
						</div>
					</div>
                 	
                 	<div class='col-12'>
						<div class='row'>
							<div class="col-lg-6">	
                          		<label for="inputText">Email</label>
                  				<input type="email" class="form-control" name="email1" id="email1" placeholder="indirizzo email azienda">
                         	</div>
                         	<div class="form-group col-md-6">
                          		<label for="inputText">Email 2</label>
                  				<input type="email" class="form-control" name="email2" id="email2" placeholder="indirizzo email azienda secondario">
                         	</div>
						</div>
					</div>
              	</div>
 				<!-- End Dati Recapiti -->
 				
 				<!-- Dati Rappresentante Legale -->
 				<div class="row justify-content-md-center mt-4"> 
					<div class='col-12 border-bottom mt-3 mb-4'>
						<h3>Rappresentante Legale</h3>
					</div>
					<div class='col-12'>
						<div class='row'>
							<div class="col-lg-4">	
                          		<label for="inputText">Nome</label>
                          		<input type="text" class="form-control" name= "nome" id="nome" placeholder="Nome">
                         	</div>
                         	<div class="form-group col-md-4">
                          		<label for="inputText">Cognome</label>
                          		<input type="text" class="form-control" name="cognome" id="cognome" placeholder="Cognome">
                         	</div>
                         	<div class="form-group col-md-4">
                          		<label for="inputText">Codice Fiscale</label>
                          		<input type="text" class="form-control" name="codice_fiscale" id="codice_fiscale" placeholder="Codice Fiscale">
                         	</div>
						</div>
					</div>
				
              	</div>
 				<!-- End Dati Rappresentante Legale -->
 				
			  <div class="row justify-content-md-center text-center justify-content-center mt-5"> 
					<div class="col-12">
						<button type='submit' class="btn primary-btn" >Salva</button> 
						<a class="btn btn-outline-secondary pt-2 pb-2 ml-4 rounded" href="login.php">Indietro</a> 
					</div>
			  </div>
 		</form>
	</section>
	<!--================End Login Box Area =================-->
	
	<?php echo panel::footer_area(); ?>
	<!-- End footer Area -->
	<!-- Modal Quick Product View -->
	<?php echo panel::quick_product_view(); ?>
	<?php echo panel::js_script(); ?> 
</body>
</html>
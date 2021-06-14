<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<title>Registrazione</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php 

     $partita_iva=$_POST['partita_iva'];
     $nome=$_POST['nome'];
     $ragione_sociale=$_POST['ragione_sociale'];
     $codice_fiscale_imp=$_POST['codice_fiscale_impresa'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $sconto=$_POST['sconto'];
     

?>

<form class ="registrazione">
        <div class="row">
        <div class="col-5 col-md-4"> <?php echo $partita_iva?> </div>
        <div class="col-5 col-md-4"> <?php echo $nome ?> </div>
        <div class="col-5 col-md-4"> <?php echo $ragione_sociale?> </div>
        <div class="col-5 col-md-4"> <?php echo $codice_fiscale_imp?> </div>
        <div class="col-5 col-md-4"> <?php echo $email ?> </div>
        <div class="col-5 col-md-4"> <?php echo $password ?></div>
        <div class="col-5 col-md-4"> <?php echo $sconto?> </div>
        
      <div><a class="primary-btn" href="indirizzo_cliente.html">Continua la registrazione</a></div> 
     
      </div>
       </form>

 </body>
 </html>
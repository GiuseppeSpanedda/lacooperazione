<?php

	class some_query{

		public static function connect() {
			$host = '127.0.0.1'; 
			$db_name = 'lacooperazione'; 
			$db_user = 'root';  
			$db_password = '';  
		    return new PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		} 

		// seleziona l'ultimo id inserito
		public static function lastID($db){
			return $db->lastInsertId(); 
		}
		
		public static function get_tags($db, $categoria ){
			$i=0;
			$v=false;
			$sql="SELECT t.id, t.nome, (SELECT count(*) AS num_art FROM prodotto_tag where tag=t.id) AS numero  FROM `tag` t where t.categoria=:categoria ORDER BY nome"; 

			$stmt = $db->prepare($sql); 
			$stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				$v[$i++]=$vett;
			}
			return $v;
		}

		public static function get_top_tags($db){
			$i=0;
			$v=false;
			$sql="SELECT t.id, t.nome, (SELECT count(*) AS num_art FROM prodotto_tag where tag=t.id) AS numero FROM `tag` t  ORDER BY numero  ,nome LIMIT 5"; 

			$stmt = $db->prepare($sql); 
			$stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				$v[$i++]=$vett;
			}
			return $v;
		}

		public static function get_categories($db, $order ){
			$i=0;
			$v=false;
			$sql="SELECT *, (SELECT count(*) AS num_prod FROM prodotto where categoria=c.id) AS numero FROM `categoria` c ORDER BY ".$order; 

			$stmt = $db->prepare($sql); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				$v[$i]=$vett;
				$v[$i++]["tag"]=some_query::get_tags($db, $vett["id"] );
			}
			return $v;
		}

		public static function get_marchio_by($db, $param, $value ){
			$sql="SELECT * FROM `marchio` WHERE $param=:value"; 

			$stmt = $db->prepare($sql); 
			$stmt->bindParam(':value', $value, PDO::PARAM_STR); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				return $vett;
			}
			return false;
		}

		public static function get_prod_by($db, $param, $value ){
			$sql="SELECT * FROM `prodotto` WHERE $param=:value"; 

			$stmt = $db->prepare($sql); 
			$stmt->bindParam(':value', $value, PDO::PARAM_STR); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				return $vett;
			}
			return false;
		}

		
		public static function add_marchio( $db, $nome, $codice, $descrizione, $foto, $sigla ){
			$sql ="INSERT INTO `marchio`( `nome`, `codice`, `descrizione`, `foto`, `sigla`) VALUES ( :nome, :codice, :descrizione, :foto, :sigla )";

			$stmt = $db->prepare($sql);
			 
			$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindParam(':codice', $codice, PDO::PARAM_STR);
			$stmt->bindParam(':descrizione', $descrizione, PDO::PARAM_STR);
			$stmt->bindParam(':foto', $foto, PDO::PARAM_STR);
			$stmt->bindParam(':sigla', $sigla, PDO::PARAM_STR); 

			if( $stmt->execute() )
				return true;
			return false;
		}

		public static function add_prodotto( $db, $nome, $id_art_esolv, $codice, $qnt, $prezzo, $descrizione, $mini_descrizione, $foto, $foto_mini, $categoria, $marchio, $prezzo_cancellato ){
			$sql ="INSERT INTO `prodotto`( `nome`, `id_art_esolv`, `codice`, `qnt`, `prezzo`, `descrizione`, `mini_descrizione`, `foto`, `foto_mini`, `categoria`, `marchio`, `date`, `prezzo_cancellato`) VALUES ( :nome, :id_art_esolv, :codice, :qnt, :prezzo, :descrizione, :mini_descrizione, :foto, :foto_mini, :categoria, :marchio, NOW(), :prezzo_cancellato )";

			$stmt = $db->prepare($sql);
			 
			$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindParam(':id_art_esolv', $id_art_esolv, PDO::PARAM_STR);
			$stmt->bindParam(':codice', $codice, PDO::PARAM_STR);
			$stmt->bindParam(':qnt', $qnt, PDO::PARAM_STR);
			$stmt->bindParam(':prezzo', $prezzo, PDO::PARAM_STR); 
			$stmt->bindParam(':descrizione', $descrizione, PDO::PARAM_STR); 
			$stmt->bindParam(':mini_descrizione', $mini_descrizione, PDO::PARAM_STR); 
			$stmt->bindParam(':foto', $foto, PDO::PARAM_STR); 
			$stmt->bindParam(':foto_mini', $foto_mini, PDO::PARAM_STR); 
			$stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR); 
			$stmt->bindParam(':marchio', $marchio, PDO::PARAM_STR); 
			$stmt->bindParam(':prezzo_cancellato', $prezzo_cancellato, PDO::PARAM_STR); 

			if( $stmt->execute() )
				return true;
			return false;
		}

		public static function get_marchi($db, $order ){
			$i=0;
			$v=false;
			$sql="SELECT *, (SELECT count(*) AS num_prod FROM prodotto where marchio=m.id) AS numero FROM `marchio` m ORDER BY ".$order; 

			$stmt = $db->prepare($sql); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				$v[$i++]=$vett;
			}
			return $v;
		}

		public static function get_products($db, $order, $limit ){
			$i=0;
			$v=false;
			$sql="SELECT * FROM `prodotto` ORDER BY ".$order." ".$limit; 

			$stmt = $db->prepare($sql); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				$v[$i++]=$vett;
			}
			return $v;
		}

		public static function get_products_with_tags($db, $tag, $order, $limit ){
			$i=0;
			$v=false;
			$sql="SELECT * FROM `prodotto` WHERE id IN ( SELECT prodotto FROM `prodotto_tag` WHERE tag=:tag  ) ORDER BY ".$order." ".$limit; 

			$stmt = $db->prepare($sql); 
			$stmt->bindParam(':tag', $tag, PDO::PARAM_STR); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				$v[$i++]=$vett;
			}
			return $v;
		}

		public static function get_tag_products( $prodotto, $db ){
			$v=false;
			$i=0;

			$sql="SELECT * FROM `prodotto_tag` JOIN `tag` ON(tag=id) WHERE prodotto=:prodotto"; 

			$stmt = $db->prepare($sql); 
			$stmt->bindParam(':prodotto', $prodotto, PDO::PARAM_STR); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				$v[$i++] = $vett;
			}
			return $v;

		}

		public static function get_single_product( $id, $db ){

			$sql="SELECT *,( SELECT nome FROM `categoria` WHERE id=P.categoria  ) AS nome_categoria FROM `prodotto` P  WHERE P.id =:id"; 
 

			$stmt = $db->prepare($sql); 
			$stmt->bindParam(':id', $id, PDO::PARAM_STR); 
			$stmt->execute();
			
			while ( $vett = $stmt->fetch()  ) {
				$v = $vett;
				$v["tag"] = some_query::get_tag_products( $id, $db );
				return $v;
			}
			return false;

		}

		// salva i dati del cliente
		public static function add_admin($db, $v ){
			$sql ="INSERT INTO `admin`( `email`, `password`, `name`) VALUES ( :email, :password, :name )";

			$stmt = $db->prepare($sql);
			 
			$stmt->bindParam(':email', $v["email"], PDO::PARAM_STR); 
			$stmt->bindParam(':password', $v["password_enctrypted"], PDO::PARAM_STR); 
			$stmt->bindParam(':name', $v["name"], PDO::PARAM_STR); 

			if( $stmt->execute() )
				return true;
			return false;
		}

		public static function elimina_cliente( $db, $id ){
			$sql="DELETE FROM cliente WHERE id=:id";

			$stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_STR);

			if( $stmt->execute() )
				return true;
			return false;
		}

		  
		public static function modifica_cliente( $db, $v ){
			$sql="UPDATE `cliente` SET `nome`=:nome,`cognome`=:cognome,`eta`=:eta,`email`=:email,`telefono`=:telefono WHERE `id`=:id";

			$stmt = $db->prepare($sql);
			
			$stmt->bindParam(':nome', $v["nome"], PDO::PARAM_STR);
			$stmt->bindParam(':cognome', $v["cognome"], PDO::PARAM_STR);
			$stmt->bindParam(':eta', $v["eta"], PDO::PARAM_STR);
			$stmt->bindParam(':email', $v["email"], PDO::PARAM_STR);
			$stmt->bindParam(':telefono', $v["telefono"], PDO::PARAM_STR);
			$stmt->bindParam(':id', $v["id"], PDO::PARAM_STR);

			if( $stmt->execute() )
				return true;
			return false;	
		} 
	}

?>

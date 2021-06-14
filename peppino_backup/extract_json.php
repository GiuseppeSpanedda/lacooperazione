<?php 

    ob_start(); session_start(); ob_end_flush();

    class marca{
        var $error=false;
        var $lista_marche=["ADRIA","AGRS","ANDR","BEAC","BONT","CLEM","DALN","DULC","EDIT","GAME","GENE","GLOB","HASB","LACO","MACD","MATT","MEGA","MIGL","MINU","MONDO","ODG","ODS","QUER","RAVE","REEL","TEOR"];
        var $v_art=[];

        function check_error_json(){
            switch (json_last_error()) {
                case JSON_ERROR_NONE:
                    echo ' - No errors';
                break;
                case JSON_ERROR_DEPTH:
                    echo ' - Maximum stack depth exceeded';
                break;
                case JSON_ERROR_STATE_MISMATCH:
                    echo ' - Underflow or the modes mismatch';
                break;
                case JSON_ERROR_CTRL_CHAR:
                    echo ' - Unexpected control character found';
                break;
                case JSON_ERROR_SYNTAX:
                    echo ' - Syntax error, malformed JSON';
                break;
                case JSON_ERROR_UTF8:
                    echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                break;
                default:
                    echo ' - Unknown error';
                break;
            }
        
            echo PHP_EOL;
        }


        function get_sigla_marche_json($db){

            $json=file_get_contents("./articolo_single.json");
            $json=str_replace("\n", "", $json); 
            $json=str_replace("\*", "*", $json);
             
            $v = json_decode( $json, true);

            // check_error_json();

            $v_marche=[];
        

            foreach ( $v as $ele ) {
                $marca= substr($ele["articolo"]["id_art"], 0, 5);
                $marca = preg_replace('/[0-9]+/', '', $marca );
                if( $marca && $marca!='' ){
                        array_push( $v_marche, $marca );
                        
                        if( $ele["articolo"]["classe"]=='GIOCAT' &&  $dati_marca=some_query::get_marchio_by( $db, 'sigla', $marca ) ){
                            $ele["articolo"]["id_marca"]=$dati_marca["id"];
                            array_push($this->v_art, $ele);
                        }
                }
            }
 

            $this->v_marche=array_unique($v_marche);
            asort($v_marche);
        }

        function add_marche( $db ){
            foreach( $this->v_marche as $marca ){
                if( in_array( $marca, $this->lista_marche) ){
                        if( !some_query::get_marchio_by( $db, 'sigla', $marca ) )
                            some_query::add_marchio( $db, $marca, $marca, $marca,'', $marca );
                }
            }
        }
 

        function add_prodotti( $db ){
 
            foreach( $this->v_art as $art ){
             

                    if( !some_query::get_prod_by( $db, 'id_art_esolv', $art["articolo"]["id_art"] ) )
                            some_query::add_prodotto( $db, $art["articolo"]["descrizione"], $art["articolo"]["id_art"], $art["articolo"]["id_art"], 0, 0, $art["articolo"]["descrizione"], $art["articolo"]["descrizione"], 'https://www.athousakis.gr/images/usrImage/29-04-2021-10-25-608a5f517a0b8.jpg', 'https://www.athousakis.gr/images/usrImage/29-04-2021-10-25-608a5f517a0b8.jpg', 1, $art["articolo"]["id_marca"], 0 );
            }
        }

        function connDB(){
            if( $db = some_query::connect() ){
                
                $this->get_sigla_marche_json($db);
               $this->add_prodotti($db); 

            }else 
                $this->error=true;
        } 

    } 


    require('../php_file/some_query.php'); 
    $my_marca = new marca();
    $my_marca->connDB();
    




?>
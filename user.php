<?php 
    
class user{
    
    function create( $db, $v ){
        $error=false;
        
        try {
            
            $db->beginTransaction();
            
            some_query::add_cliente($db, $v);
            $v["cliente"]=some_query::lastID($db);
            some_query::add_cliente_indirizzo($db, $v);
            some_query::add_cliente_rappresentante_legale($db, $v);
            some_query::add_cliente_recapito($db, $v);
            
            $db->commit();
            
        } catch (Exception $e) {
        
            if ($db->inTransaction()) {
                $db->rollback();
                $error=true;
            }
            throw $e;
            
        }
        
        return $error;
        
    }
    
}

?>
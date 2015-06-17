
<?php
class posgrados {
    function posgrados() {
         
    }
 
    function obtenerPosgrados() {
        require ("conexion.php");
        $obj_con = new conec();
        $obj_con->conectar();
        $query="SELECT id, user, nombre, appat, apmat, email, no_identificacion FROM persona where tipo=3";
                  $result=mysql_query($query) or die(mysql_error());                                  
                  $obj_con->cerrar();
                  return $result;
        }
    }
?>
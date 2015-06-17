
<?php
class posgrados {
    function posgrados() {
         
    }
 
    function obtenerPosgrados() {
        require ("conexion.php");
        $obj_con = new conec();
        $obj_con->conectar();
        $query="SELECT Nombre, PNPCP, Carrera, Modalidad, Nivel, Status, Poster, (Select Nombre from Areas where idAreas=Areas_idAreas) as Area, (Select Institucion from Usuarios where idUsuarios=Usuarios_idUsuarios) as Instituto, (Select Estado from Usuarios where idUsuarios=Usuarios_idUsuarios) as Estado, (Select Ciudad from Usuarios where idUsuarios=Usuarios_idUsuarios) as Ciudad FROM posgrados;";
        $result=mysql_query($query) or die(mysql_error());                                  
        $obj_con->cerrar();
        return $result;
        }
    }

?>


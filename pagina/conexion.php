<?php
     class conec
     {
         var $host;
         var $usu;
         var $pw;
         var $base;
         var $conexion=0;
         function conec()
         {
             $this->host='localhost';
             $this->usu='delfin';
             $this->pw='123456';
             $this->base='delfin';
         }
         function conectar()
         {
             $this->conexion=mysql_connect($this->host,$this->usu,$this->pw)
             or die("Error al conectar");
             mysql_select_db($this->base,$this->conexion)
             or die("Error al conectar a la base");
             return $this->conexion;
         }
         function cerrar()
         {
             mysql_close($this->conexion);
         }
     }
?>
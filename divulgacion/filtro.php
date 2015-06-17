<?phprequire ("conexion.php");
        $obj_con = new conec();
        $obj_con->conectar();
        if($POST['fil']=='si')
        $query="SELECT Nombre, PNPCP, Carrera, Modalidad, Nivel, Status, Poster, (Select Nombre from Areas where idAreas=Areas_idAreas) as Area, (Select Institucion from Usuarios where idUsuarios=Usuarios_idUsuarios) as Instituto, (Select Estado from Usuarios where idUsuarios=Usuarios_idUsuarios) as Estado, (Select Ciudad from Usuarios where idUsuarios=Usuarios_idUsuarios) as Ciudad FROM posgrados WHERE PNPCP=1;";
        else
        $query="SELECT Nombre, PNPCP, Carrera, Modalidad, Nivel, Status, Poster, (Select Nombre from Areas where idAreas=Areas_idAreas) as Area, (Select Institucion from Usuarios where idUsuarios=Usuarios_idUsuarios) as Instituto, (Select Estado from Usuarios where idUsuarios=Usuarios_idUsuarios) as Estado, (Select Ciudad from Usuarios where idUsuarios=Usuarios_idUsuarios) as Ciudad FROM posgrados WHERE PNPCP=0;";
        $result=mysql_query($query) or die(mysql_error());                                  
        
                  while($rows=mysql_fetch_array($result))
                  {
                         echo"<tr onmouseover='cambiacolor(this,1,1)' onmouseout='cambiacolor(this,0,1)'>
<td></td>
<td>".$rows['Nombre']."</td>
<td class='centrar'><strong class='textoazul'>".$rows['Carrera']."</strong></td>
<td class='centrar'><strong class='textoazul'>".$rows['Area']."</strong></td>
<td class='centrar'><strong class='textoazul'>".$rows['Estado']."</strong></td>
<td class='centrar'><strong class='textoazul'>".$rows['Ciudad']."</strong></td>
<td class='centrar'><strong class='textoazul'>".$rows['Instituto']."</strong></td>
<td class='centrar'><strong class='textoazul'>".$rows['Modalidad']."</strong></td>
<td class='centrar'><strong class='textoazul'>".$rows['Nivel']."</strong></td>
<td class='centrar'><strong class='textoazul'>".$rows['Status']."</strong></td>
</tr>";
                  }
                  $obj_con->cerrar();
                  ?>
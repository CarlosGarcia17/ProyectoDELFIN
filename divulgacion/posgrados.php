<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
	
<html xmlns='http://www.w3.org/1999/xhtml'>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />
		<meta name='keywords' content='Delf&iacute;n, Divulgaci&oacute;n, Movilidad, Estudiantil, Cient&iacute;fica, Tecnol&oacute;gica, Profesosres, Investigadores, Programas, Subprogramas, Interinstitucional, Fortalecimiento, Investigación, Posgrado, Pac&iacute;fico' />
		<meta name='description' content='Sitio Web del Programa Delfín ' />
		<meta name='author' content='Ergosystems' />
		<link href='../recursos/imagenes/delfin-icono.ico' rel='shortcut icon' />
		<link href='../recursos/estilos/estilos-delfin.css' rel='stylesheet' type='text/css' />
		<script src="../recursos/scripts/scripts-delfin.js" language="javascript" type="text/javascript"></script>
		<script src="../recursos/librerias/ckeditor/ckeditor.js" language="javascript" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" language="javascript" type="text/javascript"></script>
		<title>Posgrados - Divulgación - Programa Delfín</title>
		<script >
			function filtro1(){
				$('#tabla tbody').remove();
			$.ajax({
				type: 'POST',
				url: 'filtro.php',
				data: {
					fil: document.getElementById("pnpcp").value;
				}
			}).done(function(respuesta){
				$('#filtrado').text(respuesta);
			});
			}
		</script>
	</head>

	<body>
		<div id='contenedor'>
			<div id='encabezado' title='Programa Delfín - Programa Interinstitucional para el Fortalecimiento de la Investigación y el Posgrado del Pacífico'>
				<div id='logotipo'>
					<a href='../' title='Inicio'><img src='../recursos/imagenes/delfin-logo.png' border='0' width='271' height='109' alt='Inicio' /></a>
				</div>
				
				<div id='tituloPrograma'>
					<img src='../recursos/imagenes/delfin-titulo.png' border='0' width='441' height='65' alt='Programa Delfín' />
				</div>
				
				<div id='menuSitio'>
					<ul>
						<li><a href='../programa/' title='Programa'><img src='../recursos/imagenes/menusitio-programa.png' border='0' width='96' height='33' alt='Programa' /></a></li>
						<li><a href='../estudiantes/' title='Estudiantes'><img src='../recursos/imagenes/menusitio-estudiantes.png' border='0' width='111' height='33' alt='Estudiantes' /></a></li>
						<li><a href='../investigadores/' title='Investigadroes'><img src='../recursos/imagenes/menusitio-investigadores.png' border='0' width='127' height='33' alt='Investigadores' /></a></li>
						<li><a href='../divulgacion/' title='Divulgación'><img src='../recursos/imagenes/menusitio-divulgacion.png' border='0' width='114' height='33' alt='Divulgación' /></a></li>
					</ul>
				</div>
				
				<div id='menuAyuda'>
					<ul>
						<li><a href='../ayuda/contacto-abrir.php' title='Contacto'><img src='../recursos/imagenes/menuayuda-contacto.png' border='0' width='104' height='33' alt='Contacto' /></a></li>
						<li><a href='../ayuda/noticias.php' title='Noticias'><img src='../recursos/imagenes/menuayuda-noticias.png' border='0' width='99' height='33' alt='Noticias' /></a></li>
						<li><a href='../ayuda/sitios.php' title='Sitios de Interés'><img src='../recursos/imagenes/menuayuda-sitios.png' border='0' width='135' height='33' alt='Sitios de Interés' /></a></li>
					</ul>
				</div>
				
				<div id='menuRedes'>
					<ul>
						<!--<li><a href='http://twitter.com/#!/ProgramaDelfin' target='_blank' title='Twitter'><img src='../recursos/imagenes/menuredes-twitter.png' border='0' width='33' height='36' alt='Twitter' /></a></li>-->
						<li><a href='http://www.facebook.com/programa.interinstitucional.delfin' target='_blank' title='Facebook'><img src='../recursos/imagenes/menuredes-facebook.png' border='0' width='33' height='36' alt='Facebook' /></a></li>
					</ul>
				</div>
			</div>
			
			
			
			<div id='contenido'>
				<div id='columnaIzquierda'>	
					<div id='busqueda'>
						<form id='form1' name='form1' action='../ayuda/busqueda.php' method='get' onSubmit='return validabusqueda(this);'>
							<input name='buscar' id='buscar' class='inputbuscar' type='text' tabindex='1' value='Escribe lo que buscas' onFocus='buscar.value=""; buscar.style.color="#000";' onBlur='if(buscar.value==""){ buscar.value="Escribe lo que buscas"; buscar.style.color="#999";}' title='Escribe lo que buscas' />
							<input name='botonbuscar' id='botonbuscar' class='botonbuscar' type='submit' tabindex='2' value='' title='Buscar' />
						</form>
					</div>
					<div id='usuarios'>
						<div class='formulariousuarios'>
							<form id='form2' name='form2' action='../usuarios/inicio-sesion-registrar.php' enctype='multipart/form-data' method='post'>
								<label for='login' class='labelsesion'>Usuario:</label>
								<input name='login' id='login' class='inputsesion' type='text' tabindex='3' value='' title='Escriba su nombre de usuario' />
								<label for='pass' class='labelsesion'>Contraseña:</label>
								<input name='pass' id='pass' class='inputsesion' type='password' tabindex='4' value='' title='Escriba su contraseña' />
								<input name='boton' id='boton' class='botonentrar' type='submit' tabindex='5' value='' title='Enviar los datos para ingresar a su sesión' />
							</form>
							<div><a href='../usuarios/inicio-olvide-abrir.php'>¿Olvidaste tus datos de Sesión?</a></div>
						</div>
					</div>
					<div id='bannersIzquierda'>
						<div class='bannerIzq'><a href='../estudiantes/victp15-convocatoria.php'><img src='../recursos/imagenes/banner-convocatoria-verano2015.png' border='0' width='234' height='127' alt='Convocatoria XX Verano de la Investigación Científica y Tecnológica del Pacífico 2015' /></a></div>
						<div class='bannerIzq'><a href='../programa/afiliadas.php'><img src='../recursos/imagenes/banner-directorio-consejeros2015.png' border='0' width='234' height='127' alt='Directorio de Consejeros Técnicos del Programa Delfín 2015' /></a></div>
						<div class='bannerIzq'><a href='../estudiantes/victp15-convocatoria.php'><img src='../recursos/imagenes/banner-vertical-postervictp15.png' border='0' width='234' height='362' alt='Poster XX Verano de la Investigación Científica y Tecnológica del Pacífico 2015' /></a></div>
						<div class='bannerIzq'><a href='http://www.conacyt.mx' target='_blank'><img src='../recursos/imagenes/banner-conacyt.png' border='0' width='234' height='127' alt='Consejo Nacional de Ciencia y Tecnología' /></a></div>
						<div class='bannerIzq'><a href='http://vivemexico.org' target='_blank'><img src='../recursos/imagenes/banner-vivemexico.png' border='0' width='234' height='127' alt='Vive México - Becas Culturales Internacionales' /></a></div>
						
						<!--
						<div class='bannerIzq'><a href='http://www.agendaciudadana.mx' target='_blank'><img src='../recursos/imagenes/banner-vertical-agendaciudadana.png' border='0' width='234' height='570' alt='Agenda Ciudadana' /></a></div>
						<div class='bannerIzq'><a href='http://www.agendaciudadana.mx' target='_blank'><img src='../recursos/imagenes/banner-agendaciudadana-viveconciencia.png' border='0' width='234' height='332' alt='Agenda Ciudadana' /></a></div>
						<div class='bannerIzq'><a href='http://www.conacyt.gob.mx/FormacionCapitalHumano/Becas/feria/Documents/14a_Feria_de_Posgrados_de_Calidad-2013.pdf' target='_blank'><img src='../recursos/imagenes/banner-14feriaPosgradosCalidad.png' border='0' width='234' height='294' alt='14a Feria de Posgrados de Calidad 2013' /></a></div>
						<div class='bannerIzq'><a href='http://www.conacyt.gob.mx/FormacionCapitalHumano/Becas/feria/Documents/15a_Feria_de_Posgrados_de_Calidad-2014.pdf' target='_blank'><img src='../recursos/imagenes/banner-15feriaPosgradosCalidad.png' border='0' width='234' height='687' alt='15a Feria de Posgrados de Calidad 2014' /></a></div>
						-->
					</div>
				</div>
			  
				<div id='columnaDerecha'>					<div id='titulo'><img src='../recursos/imagenes/titulo-divulgacion.png' border='0' width='718' height='75' alt='Divulgación' /></div>
                    <div id='menuSeccion'>
                        <ul>
                            <li><a href='posgrados.php' title='Catálogo de Posgrados'><img src='../recursos/imagenes/menuseccion-posgrados.png' border='0' width='140' height='23' alt='Catálogo de Posgrados' /></a></li>
                            <li><a href='divulgacion.php' title='Catálogo de Divulgación'><img src='../recursos/imagenes/menuseccion-divulgacion.png' border='0' width='140' height='23' alt='Catálogo de Divulgación' /></a></li>
                            <li><a href='redes.php' title='Catálogo de Redes de Investigación'><img src='../recursos/imagenes/menuseccion-redes.png' border='0' width='140' height='23' alt='Catálogo de Redes de Investigación' /></a></li>
                        </ul>
                    </div>
                    <div id='informacion'>
                    	<h1>Catálogo de Posgrados</h1>

                    	
                    		<form id='filtros' ><div>
                    		<label>Pnpc</label>
							<input type="radio" name="pnpcp" value="si" onclick="filtro1()">Si
							<input type="radio" name="pnpcp" value="no" onclick="filtro1()">No
							</form>

                    	
                    	<p><table id='tabla'>
<thead>
<tr>
<th>&nbsp;</th>
<th>Posgrado</th>
<th class='centrar'>Carrera</th>
<th class='centrar'>Area</th>
<th class='centrar'>Estado</th>
<th class='centrar'>Ciudad</th>
<th class='centrar'>Instituto</th>
<th class='centrar'>Modalidad</th>
<th class='centrar'>Nivel</th>
<th class='centrar'>Mas</th>
</tr>
</thead>
<div id='filtrado'>
<tbody>
	<?php
                  require_once ("Posgrado.php");
                  $obj_con=new posgrados();
                  $result=$obj_con->obtenerPosgrados();
                   
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
                  ?>
</tbody>
</div>
</table></p> </div>
				</div>
				<br class='clear' />
			</div>
			
			
			
			<div id='mapa'>
				<div class='columna'>
					<div class='titulomapa'><a href='../programa/'><img src='../recursos/imagenes/menumapa-programa.png' border='0' width='82' height='13' alt='Programa' /></a></div>
					<div><a href='../programa/acercade.php'>Acerca del Programa</a></div>
					<div><a href='../programa/subprogramas.php'>Subprogramas</a></div>
					<div><a href='../programa/estatutos.php'>Estatutos</a></div>
					<div><a href='../programa/afiliadas.php'>Instituciones Afiliadas</a></div>
					<div><a href='../programa/coordinacion.php'>Coordinación General</a></div>
					
				</div>
				
				<div class='columna'>
					<div class='titulomapa'><a href='../estudiantes/'><img src='../recursos/imagenes/menumapa-estudiantes.png' border='0' width='97' height='13' alt='Estudiantes' /></a></div>
					<div><a href='../estudiantes/verano.php'>Verano de la Investigación</a></div>
					<div><a href='../estudiantes/seguimiento.php'>Seguimiento del Verano</a></div>
				</div>
				
				<div class='columna'>
					<div class='titulomapa'><a href='../investigadores/'><img src='../recursos/imagenes/menumapa-investigadores.png' border='0' width='122' height='13' alt='Investigadores' /></a></div>
					<div><a href='../investigadores/encuentro.php'>Encuentro de Profesionales</a></div>
					<div><a href='../investigadores/seguimiento.php'>Seguimiento del Encuentro</a></div>
				</div>
				
				<div class='columna'>
					<div class='titulomapa'><a href='../divulgacion/'><img src='../recursos/imagenes/menumapa-divulgacion.png' border='0' width='93' height='13' alt='Divulgación' /></a></div>
					<div><a href='../divulgacion/posgrados.php'>Catálogo de Posgrados</a></div>
					<div><a href='../divulgacion/divulgacion.php'>Catálogo de Divulgación</a></div>
					<div><a href='../divulgacion/redes.php'>Redes de Investigación</a></div>
				</div>
				
				<div class='columna'>
					<div class='titulomapa'><a href='../ayuda/'><img src='../recursos/imagenes/menumapa-ayuda.png' border='0' width='46' height='13' alt='Ayuda' /></a></div>
					<div><a href='../ayuda/contacto-abrir.php'>Contacto</a></div>
					<div><a href='../usuarios/inicio-olvide-abrir.php'>Olvide mis Datos de Sesión</a></div>
					<div><a href='../ayuda/sitios.php'>Sitios de Interés</a></div>
					<div><a href='../ayuda/noticias.php'>Noticias</a></div>
					<div><a href='../ayuda/avisoprivacidad.php'>Aviso de Privacidad</a></div>
				</div>
				
				<div class='columnafinal'>
					<div class='titulomapa'><img src='../recursos/imagenes/menumapa-redes.png' border='0' width='120' height='13' alt='Redes Sociales' /></div>
					<!--<div><a href='http://twitter.com/#!/ProgramaDelfin' target='_blank'>Siguenos en Twitter</a></div>-->
					<div><a href='http://www.facebook.com/programa.interinstitucional.delfin' target='_blank'>Siguenos en Facebook</a></div>
				</div>
			</div>
			
			
			
			<div id='pie'>
				<div id='textopie'>&copy; Programa Delfín - Programa Interinstitucional para el Fortalecimiento de la Investigación y el Posgrado del Pacífico</div>
				<div id='validacion'>
					<a href='http://validator.w3.org/check?uri=referer' target='_blank' title='!Este documento es XHTML 1.0 Transitional válido'><img src='../recursos/imagenes/menuvalidacion-xhtml.png' border='0' width='95' height='30' alt='Valid XHTML 1.0 Transitional' /></a>
					<a href='http://jigsaw.w3.org/css-validator/check/referer' target='_blank' title='¡Este documento es CSS versión 2.1 válido! '><img src='../recursos/imagenes/menuvalidacion-css.png' border='0' width='95' height='30' alt='¡CSS Válido!' /></a>
				</div>
			</div>
			
		</div>
	</body>
</html>
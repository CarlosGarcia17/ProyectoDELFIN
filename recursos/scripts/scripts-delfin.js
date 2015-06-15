<!-- Begin
	// Función que cambia color de las filas en una tabla
	function cambiacolor(fila,ban,cont)
	{	if(eval(ban))
			fila.className = 'sobre';
		else
		{	if(eval(cont%2)==0)
				fila.className = 'alt';
			else
				fila.className = 'blanco';
		}
	}
	
	//Función que valida que se halla escrito algo en el campo antes de hacer la busqueda
	function validabusqueda(inForm)
  	{	if(inForm.buscar.value == "" || inForm.buscar.value == "Escribe lo que buscas") 
     	{ 	inForm.buscar.focus(); 
       		return false;
     	}
	}
	
	// Función que quita los espacios en blanco y las comillas dobles y sencillas al principio y al final del texto
	function quitaespycom(inForm)
	{	cad = inForm.value;
		cad = cad.toString().replace(/\'|\"/g,'');
		while(''+cad.charAt(0)==' ')
			cad=cad.substring(1,cad.length);
		while(''+cad.charAt(cad.length-1)==' ')
			cad=cad.substring(0,cad.length-1);
		return (cad);
	}
	
	// Función que solo permite la entrada de números en una caja de texto
	function numero( evt ) 
	{	var nav4 = window.Event ? true : false;
		key = nav4 ? evt.which : window.event.keyCode;
		return (key == 0 || key == 8 || key == 9 || key == 32 || key >= 48 && key <= 57);
	}

	// Función que valida que el puntaje no exceda los 100
	function validapuntaje(inForm)
	{	puntaje = inForm.value;
		if(eval(puntaje > 100))
		{	alert("El puntaje no puede ser mayor a 100");	
       		inForm.focus(); 
       		return;
		}
	}
	
	// Función que obtiene y muestra el puntaje total
	function puntajetotal(prom,rec,mot)
	{ 	total = "t" + prom.id.substring(1,prom.id.length);
		document.getElementById(total).innerHTML = Number(prom.value) + Number(rec.value) + Number(mot.value);
		return;
	}
	
	// Función que permite seleccionar todos las opciones de documentos en una sola vez 
	function seleccionatodos(todos,inForm)
	{	if(todos.checked)
		{ 	inForm.solicitud.checked = true;
			inForm.inscripcion.checked = true;
			inForm.calificaciones.checked = true;
			inForm.recomendacion.checked = true;
			inForm.aceptacion.checked = true;
			inForm.motivos.checked = true;
			inForm.seguro.checked = true;
			inForm.identificacion.checked = true;
		} 
		else 
		{	inForm.solicitud.checked = false;
			inForm.inscripcion.checked = false;
			inForm.calificaciones.checked = false;
			inForm.recomendacion.checked = false;
			inForm.aceptacion.checked = false;
			inForm.motivos.checked = false;
			inForm.seguro.checked = false;
			inForm.identificacion.checked = false;
		}
	}
	
	//Función que crea dos arreglos para las variables y valores de asesores
	function crealistaasesor(inForm)
	{	var ids="";
		var ass="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					ass = ass + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					ass = ass + "no,";
				}
			}
		}
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.ases.value=ass.substring(0,ass.length-1);
	}

	//Función que crea dos arreglos para las variables y valores de asesores
	function crealistaconsejero(inForm)
	{	var ids="";
		var acs="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					acs = acs + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					acs = acs + "no,";
				}
			}
		}
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.acts.value=acs.substring(0,acs.length-1);
	}
	
	//Función que crea arreglos para las variables y valores de las evaluaciones
	function crealistasevaluacion(inForm)
	{	var ids="";
		var prs="";
		var res="";
		var mos="";
		
		inputs = inForm.getElementsByTagName("input");
		n = (inputs.length-5)/3;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='text')
			{ 	k = (3*i);
			
				if(inputs[k].value=="") inputs[k].value=0;
				if(inputs[k+1].value=="") inputs[k+1].value=0;
				if(inputs[k+2].value=="") inputs[k+2].value=0;
				
				ids = ids + inputs[k].name + ",";
				prs = prs + inputs[k].value + ",";
				res = res + inputs[k+1].value + ",";
				mos = mos + inputs[k+2].value + ",";
			}
		}
		
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.pros.value=prs.substring(0,prs.length-1);
		inForm.recs.value=res.substring(0,res.length-1);
		inForm.mots.value=mos.substring(0,mos.length-1);
	}
	
	
	//Función que crea dos arreglos para las variables y valores de aceptados
	function crealistaaceptados(inForm)
	{	var ids="";
		var bes="";
		var res="";
		
		inputs = inForm.getElementsByTagName("input");
		n = (inputs.length-4)/2;
				
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	k = (2*i);	
			
				if(inputs[k].checked)
				{	ids = ids + inputs[k].name + ",";
					bes = bes + "1,";
					res = res + "0,";
				}
				else if (inputs[k+1].checked)
				{	ids = ids + inputs[k].name + ",";
					bes = bes + "0,";
					res = res + "1,";
				}
				else
				{	ids = ids + inputs[k].name + ",";
					bes = bes + "0,";
					res = res + "0,";
				}
			}
		}
		
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.becs.value=bes.substring(0,bes.length-1);
		inForm.recs.value=res.substring(0,res.length-1);		
	}
	
	//Función que crea dos arreglos para las variables y valores de estancia
	function crealistaestancia(inForm)
	{	var ids="";
		var ess="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					ess = ess + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					ess = ess + "no,";
				}
			}
		}
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.ests.value=ess.substring(0,ess.length-1);
	}
	
	//Función que crea dos arreglos para las variables y valores de compartir trabajo
	function crealistacompartir(inForm)
	{	var ids="";
		var cms="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					cms = cms + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					cms = cms + "no,";
				}
			}
		}
		
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.cmss.value=cms.substring(0,cms.length-1);
	}
	
	//Función que crea dos arreglos para las variables y valores de asistencia
	function crealistaasistencia(inForm)
	{	var ids="";
		var ass="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					ass = ass + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					ass = ass + "no,";
				}
			}
		}
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.asis.value=ass.substring(0,ass.length-1);
	}

	//Función que crea dos arreglos para las variables y valores de asignación de red encuentro
	function crealistaasignared(inForm)
	{	var ids="";
		var pas="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					pas = pas + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					pas = pas + "no,";
				}
			}
		}
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.pars.value=pas.substring(0,pas.length-1);
	}

	//Función que crea dos arreglos para las variables y valores de asignación de lider de red encuentro
	function crealistaliderred(inForm)
	{	var ids="";
		var lid="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					lid = lid + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					lid = lid + "no,";
				}
			}
		}
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.lids.value=lid.substring(0,lid.length-1);
	}

	//Función que crea dos arreglos para las variables y valores de asignación de clbestigadores a compromisos de red encuentro
	function crealistacompromisos(inForm)
	{	var ids="";
		var clb="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					clb = clb + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					clb = clb + "no,";
				}
			}
		}
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.clbs.value=clb.substring(0,clb.length-1);
	}
	
	//Función que crea dos arreglos para las variables y valores de participacion encuentro
	function crealistaparticipacion(inForm)
	{	var ids="";
		var pas="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					pas = pas + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					pas = pas + "no,";
				}
			}
		}
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.pars.value=pas.substring(0,pas.length-1);
	}
	
	//Función que crea dos arreglos para las variables y valores de lgacs encuentro
	function crealistalgacs(inForm)
	{	var ids="";
		var est="";
		
		inputs = inForm.getElementsByTagName("input");
		n = inputs.length;
		
		for (var i=0;i<n;i++)
		{	if (inputs[i].type=='checkbox')
			{	if(inputs[i].checked)
				{	ids = ids + inputs[i].name + ",";
					est = est + "si,";
				}
				else
				{	ids = ids + inputs[i].name + ",";
					est = est + "no,";
				}
			}
		}
		inForm.ides.value=ids.substring(0,ids.length-1);
		inForm.ests.value=est.substring(0,est.length-1);
	}

	function configurarCkeditor() {
	CKEDITOR.replace( 'compromiso',{ 
		uiColor: 'eeeeee',
		toolbar: [ 
			['Bold','Italic','-','Subscript','Superscript','-','SpecialChar'],
			['NumberedList','BulletedList','-','Outdent','Indent'],
			['Paste','PasteFromWord'],
			['Source']                         
		]
	});
	
	CKEDITOR.replace( 'plan',{ 
		uiColor: 'eeeeee',
		toolbar: [ 
			['Bold','Italic','-','Subscript','Superscript','-','SpecialChar'],
			['NumberedList','BulletedList','-','Outdent','Indent'],
			['Paste','PasteFromWord'],
			['Source']                         
		]
	});
}
-->
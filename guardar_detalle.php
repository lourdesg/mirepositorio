<?php

//////////////////////////////////////////////////////////////////////////////
	if(isset($_POST['num_paso']) && !empty($_POST['num_paso']) &&
	isset($_POST['nombre_paso']) && !empty($_POST['nombre_paso']) &&
	isset($_POST['descripcion_paso'])&&!empty($_POST['descripcion_paso']) &&
	isset($_POST['adjunta']) && !empty($_POST['adjunta'])) {
	
	$link = mysql_connect("localhost","root","");
	mysql_select_db("conocimiento",$link);
	$nuevo_procedimiento=mysql_query("select nombre_paso from detalle where nombre_paso='{$_POST['nombre_paso']}'"); 
		
			if(mysql_num_rows($nuevo_procedimiento)>0) 
			{ 
			echo " 
			<p class='avisos'>El Nombre del Paso del Procedimiento ya Existe</p> 
			<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
			"; 
			}else{
	// Con esta sentencia SQL insertaremos los datos en la base de datos
	mysql_query("INSERT INTO detalle (id_detalle,num_paso,nombre_paso,descripcion_paso,adjuntar)
	VALUES ('','{$_POST['num_paso']}', '{$_POST['nombre_paso']}', '{$_POST['descripcion_paso']}','{$_POST['adjunta']}' )",$link);

	// Ahora comprobaremos que todo ha ido correctamente
	$my_error = mysql_error($link);

	if(!empty($my_error)) 
	{ 


	echo "Ha habido un error al insertar los valores. $my_error"; 

	} else {


	echo "Los datos han sido introducidos satisfactoriamente";

	}
	}
	} else {


	echo "Error, no ha introducido todos los datos";

	}
						
?>	
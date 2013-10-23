<?php
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['descripcion']) && !empty($_POST['descripcion']) &&
	isset($_POST['estado']) && !empty($_POST['estado'])) {
	
	$link = mysql_connect("localhost","root","");
	mysql_select_db("conocimiento",$link);
	$nuevo_procedimiento=mysql_query("select nombre from procedimiento where nombre='{$_POST['nombre']}'"); 
		
			if(mysql_num_rows($nuevo_procedimiento)>0) 
			{ 
			echo " 
			<p class='avisos'>El Nombre del Procedimiento ya Existe</p> 
			<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
			"; 
			}else{
	// Con esta sentencia SQL insertaremos los datos en la base de datos
	mysql_query("INSERT INTO procedimiento (id_procedimiento,nombre,descripcion,estado, fecha_creacion)
	VALUES ('','{$_POST['nombre']}', '{$_POST['descripcion']}', '{$_POST['estado']}', '".date("YmdHis")."')",$link);

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
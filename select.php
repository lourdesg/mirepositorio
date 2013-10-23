<?php

$value1 = $_POST['nombre'];
$value2 = $_POST['descripcion'];
$consulta=mysql_query("SELECT  procedimiento.nombre, procedimiento.descripcion, detalle.num_paso,detalle.nombre_paso, detalle.descripcion_paso, detalle.adjunto  as detalle FROM procedimiento
            INNER JOIN detalle
            ON procedimiento.id_procedimiento = detalle.id_procedimiento
            WHERE nombre= '".$value1."'
            AND descripcion = '".$value2."' ");

/* MUESTRA EN PANTALLA */
while ($row=mysql_fetch_array($consulta)){


$nombre =$row['nombre'];
$descripcion=$row['descripcion'];
$num_paso=$row['num_paso'];
$nombre_paso=['nombre_paso'];
$descripcion_paso=['descripcion_paso'];
$adjunta=['adjunta'];
echo"
<div style='width: 790px;'>
<table>
	<tr>
		<td><strong>Titulo:</strong>  $nombre</td> 
	</tr>
  	<tr>
    	<td><strong>Autor:</strong> $descripcion</td>
	</tr>
  	
</table>
<br>
<br>
<table>
	<tr>
		<td><strong>Titulo:</strong>  $num_paso</td> 
	</tr>
  	<tr>
    	<td><strong>Autor:</strong> $nombre_paso</td>
	</tr>
  	<tr>
    	<td><strong>Autor:</strong> $descripcion_paso</td>
		
	</tr>
	<tr>
    	<td><strong>Autor:</strong> $adjunta</td>
	</tr>
</table>
</div>
";





}
?>
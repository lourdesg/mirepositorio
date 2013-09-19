<?php
include("conexion.php");

?>
<html>
	<head>
	 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular-resource.min.js"></script>
    <script src="https://cdn.firebase.com/v0/firebase.js"></script>
    <script src="http://firebase.github.io/angularFire/angularFire.js"></script>
    <script src="project.js"></script>

		<title>Base de Conocimiento</title>
		<link href="Estilo/css/estilo.css" rel="stylesheet">
		
	</head>
	<body>
		<div class="container">
				<div class="row">
					<div id="banner">
								
						<div class="span12">
						<table width = 1024>
							<tr>
								<td width ="880" >
									<img class ="redondear" src="Imagenes/logoBanadesa.png" width="900px" height="150px"  border="0"> 
								</td>
								<td width="300">
									<br>
									<p><a href='index.php' title="Cerrar mi sesion como usuario validado">Cerrar Sesi&oacute;n</a></p>
								</td>
							</tr>
						</table>
						</div><!--cierra el div de la clase span12-->
					</div><!--cierra el div del id banner-->
				</div><!--cierra el div de la clase row-->
				
				 <form action="buscar.php" method="post">
			 Buscar: <input name="palabra">
			 <input type="submit" name="buscador" value="Buscar">
			 </form>
			 <?
			 if ($_POST['buscador'])
			 { 
			 // Tomamos el valor ingresado
			 $buscar = $_POST['palabra'];

			 // Si está vacío, lo informamos, sino realizamos la búsqueda
			 if(empty($buscar))
			 {
			 echo "No se ha ingresado una cadena a buscar";
			 }else{
			 // Conexión a la base de datos y seleccion de registros
			 $con=mysql_connect("localhost","usuario","password");
			 $sql = "SELECT * FROM procedimiento WHERE nombre like '%$buscar%' ORDER BY id DESC";
			 mysql_select_db("conocimiento ", $con); 

			 $result = mysql_query($sql, $con); 

			 // Tomamos el total de los resultados
			 $total = mysql_num_rows($result);

			 // Imprimimos los resultados
			 if ($row = mysql_fetch_array($result)){ 
			 echo "Resultados para: <b>$buscar</b>";
			 do { 
			 ?>
			 <p><b><a href="noticia.php?id=<?=$row['id'];?>"><?=$row['titulo'];?></a></b></p>
			 <?
			 } while ($row = mysql_fetch_array($result)); 
			 echo "<p>Resultados: $total</p>";
			 } else { 
			 // En caso de no encontrar resultados
			 echo "No se encontraron resultados para: <b>$buscar</b>"; 
			 }
			 }
			 }
			 ?>
				
		</div><!--cierra el div de la clase container-->
			<center>
				<table>
					<tr>
						<td align="center">
								<small>
								&copy; Banadesa <?php echo date("Y");?>
								</small>
						</td>
					</tr>
				</table>
				<small>
					Banco Nacional de Desarrollo Agricula 
				</small>
			</center>
</body>
</html>
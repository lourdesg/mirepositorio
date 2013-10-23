<?php
include("conexion.php");


	//////////////////////////////////////////////
	session_start();
	if(isset($_POST['accion'])=="" && !empty($_POST['accion'])=="") {
		$_SESSION['contador']=0;
	}
	include('pageBanner.php');
		$_SESSION['datos'][$_SESSION['contador']][0]=$_POST['num_paso'];
		$_SESSION['datos'][$_SESSION['contador']][1]=$_POST['nombre_paso'];
		$_SESSION['datos'][$_SESSION['contador']][2]=$_POST['descripcion_paso'];
		$_SESSION['datos'][$_SESSION['contador']][3]=$_POST['adjunta'];

		$_SESSION['contador']=$_SESSION['contador']+1;
	}
	$nombre_procedimiento=isset($_POST['nombre']);;
	echo  $nombre_procedimiento;

?>

<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Base de Conocimiento Banadesa </title>
		<script src="js/jquery.js"></script>
		<script src="tiptip/jquery.tipTip.js"></script>
		<script src="tiptip/jquery.tipTip.minified.js"></script>
		<link href="tiptip/tipTip.css" rel="stylesheet">
		<script src="usuarios/buscar.js"></script>
		<script>
			$(function(){	
			$(".tiptip").tipTip();
			});
		</script>
		<script language="JavaScript">
			/*funcion para mostrar y ocultar*/
			function muestra_oculta(id){
			if (document.getElementById){ //se obtiene el id
			var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
			el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
			}
			}
			window.onload = function(){/*hace que se cargue la función que div estará oculto hasta llamar a la función nuevamente*/
			muestra_oculta('contenido_a_mostrar');
		}
		</script>
		
		
		<title>Base de Conocimiento</title>
		<link href='Estilo/css/estilo.css' rel="stylesheet">
		
	<head>
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
							</tr>
						</table>
					</div><!--cierra el dive de la clase span12-->
					</div><!--cierra el div del id banner-->
				</div><!--cierra el div de la clase row-->
				<center>
					<table style="width: 800px;" border="0"><!-- Tabla del menú-->
						<tbody>
							<tr>
								<td>
									<table style="width: 880px;" border="0">
										<tbody>
											<tr>
												<td align="left">
													<table>
														<tbody>
															<tr>
																<td style="padding: 3px;">
																	<a href="administrador.php" style="text-decoration: none; color: white;" title="Atras"><img src="Imagenes/atras1.png" style="width: 35px;"></a>
																</td>
																<td style="border-right: 1px solid rgb(221, 221, 221); padding: 3px;">
																	<a href="administrador.php" style="text-decoration: none; color: rgb(68, 68, 68); font-size: 15px;" title="Atras">Atr&aacute;s</a>
																</td>
																<td style="padding: 3px;">
																	<a href="?" style="text-decoration: none; color: white;" title="Limpiar"><img src="Imagenes/actualizar1.png" style="width: 35px;"></a>
																</td>
																<td style="border-right: 1px solid rgb(221, 221, 221); padding: 3px;">
																	<a href="?" style="text-decoration: none; color: rgb(68, 68, 68); font-size: 15px;" title="Actualizar">Actualizar</a>
																</td>
																<td style="padding: 3px;">
																	<a href="?" style="text-decoration: none; color: white;" title="Limpiar"><img src="Imagenes/agregar.png" style="width: 35px;"></a>
																</td>
																<td style="border-right: 1px solid rgb(221, 221, 221); padding: 3px; font-size: 15px;">
																	<a style="cursor: pointer; color: rgb(68, 68, 68); " onclick="muestra_oculta('contenido_a_mostrar')" title="Mostrar/Ocultar Los Estados del Usuario">Mostrar/Ocultar Los estados del Usuario</a>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
												<td align="right">
													<table style="border-collapse: collapse;" border="0">
														<tbody>
															<tr>
																<td style="padding: 3px;">
																	<h2>Crear Procedimiento</h2>
																</td>
																<td style="padding: 3px;">
																	<!--img src="Imagenes/new.png" style="width: 24px;"-->
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</center>
			
				<fieldset style=" background:#ffffff">
				


				<h2>Crear los Pasos del Procedimiento</h2>
				<form name="Detalle" method="post" action="" >
					<input type="text" name="nombre" value="<?=$nombre_procedimiento  ?>">
					<table>
						<tr>
						<td>
							<input type="hidden" value="anadir" name="accion" >
							<label>numero de Paso:</label>
							<input type="text" size="5" maxlength="2" name="num_paso" style="enabled:true">
						</td>
						</tr>
						<tr>
						<td>
							<label>Nombre del Paso:</label>
							<input type="text" size="80" maxlength="100" name="nombre_paso">
						</td>
						</tr>
							<br></br>
						<tr>
						<td>
							<label>Descripci&oacute;n:</label>
							<textarea type="text"  cols="40"size="25" maxlength="200"  style=" height: 50px;" rows="4" name="descripcion_paso"></textarea>
						</td>
						</tr>
						<tr>
						<td>
							<label>Agregar Imagen:</label>
							<p><input  name="adjunta" accept="image/png"/ size="10" style="background:#ffffff" type="file" /></p>
						
						</td>
						</tr>
						<tr>
						<td>
							<input type="submit" value="Anadir" >
						</td>
						</tr>
					</table>
				</form>
						<?php
			if (isset($_POST['accion'])) {
				require("guardar_detalle.php");
			}
			?>
						<table border="1">
							<tr>
								<th>Numero de Paso:</th>
								<th>Nombre del Paso:</th>	
								<th>Descripci&oacute;n</th>
								<th>Imagen Referente al Paso</th>
							
								
							</tr>
							<br>
							<br>
							<?php
								for($i=0;$i<$_SESSION['contador'];$i++) {
									echo "
										<tr>
											<td>".$_SESSION['datos'][$i][0]."</td>
											<td>".$_SESSION['datos'][$i][1]."</td>
											<td>".$_SESSION['datos'][$i][2]."</td>
											<td>".$_SESSION['datos'][$i][3]."</td>
											
										</tr>
									";
								}
								
								
							?>
						</table>
						</fieldset>
						<br>
						<br>
				
						
						
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
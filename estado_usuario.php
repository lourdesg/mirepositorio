<?php
		include("conexion.php");

		$u = "conocimiento";
		/**/
		mysql_select_db("conocimiento", $conexion);
		$sqlestado =  "SELECT id_estado, descripcion, permiso FROM estado ORDER BY descripcion" ;
		$queryestado = mysql_query($sqlestado, $conexion) or die(mysql_error());
		$rowestado = mysql_fetch_assoc($queryestado);
		/**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
		<SCRIPT LANGUAGE=JavaScript>
		  <!--
			 function mensaje() {
				alert("Mensaje de Alerta")
			   }
		   // -->
		</SCRIPT>


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
		<link href="Estilo/css/estilo.css" rel="stylesheet">
		<link href="Estilo/css/estilo-responsive.css" rel=  "stylesheet">
		<style>
			div.formulario{
				padding:18px;
				background:#ffffff;
				border:#dddddd solid 1px;
			}
			table.formulario, table.buscar{
				border-collapse:collapse;
			}
			table.formulario td, table.buscar td{
				border-bottom:#dddddd solid 1px;padding:5px;
			}
			.link{
				cursor:pointer;
			}
			.notificacion{
				width:350px;
				padding-left:60px;
			}
		</style>
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div id="banner">
					<div class="span12">
						<img class ="redondear" src="Imagenes/logoBanadesa.png" width="920px" height="150px"  border="0">
					</div><!--cierra el div de la clase span12-->
				</div><!--cierra el div del id banner-->
			</div><!--cierra el div de la clase row-->	
				<br>
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
																	<h2>Crear Estado de Usuario</h2>
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
			<hr>
			
			<!--Inicia la lista de campos  guardados en la base de datos -->
			<div id="contenido_a_mostrar">
				<table align= "center" width="600px" height="45px">
					<tr>
						<td>
							<center>
							<input type="name" name="descripcion" />
							<input type="submit" name="submit" value="Buscar" /> 
							 
							</center>
						</td>
					</tr>
					<tr>
						<td>
							<div class="listadoEstado" style="height:200px;overflow-y:scroll;">
								<?php do{ ?>
								<div style="float:left;width:100px;height:45px;border-left:#dddddd solid 1px;padding:6px; font-size:12px;color:#444444;">
									<?php 
									$descripcion = trim($rowestado['descripcion']);
									$max_descripcion = 20;
									if (strlen($descripcion)>$max_descripcion)
									{
										$descripcion = substr($descripcion,0,$max_descripcion)."..";
									}
										echo $descripcion;
									?>

								</div>
								<?php } while($rowestado = mysql_fetch_assoc($queryestado));?>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<!--Termina la lista de los campos guardados en la base de datos-->
			
			
			
			<form method="POST" action="">
				<div style="background:#fffde5;padding:7px;border:#dddddd solid 1px;">
				<center>
					<h1>Formulario de Ingreso</h1>
						<table style="width:800px;">
						<tr>
							<td align="center" valign="top">
								<div class="formulario">
									<table class="formulario">
										<tr>
											<td>
												Nombre del Estado:
											</td>
											<td>
												<input type="name" name="descripcion" /><b style="color:red;">*</b>
											</td>
										</tr>
										<tr>
											<td>
												Permiso:
											</td>
											<td>
												<select name="permiso" type="text" onchange = "document.forms.formulario.submit ()" style="width:160px">
													<option>Ver</option>
													 <option>Ver y Crear</option>
												</select>
											<b style="color:red;">*</b>
											</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
					</table>
					<input type="submit" name="submit" value="Guardar" /> 
				</center>
				</div>
			</form>	
			<?php
			if (isset($_POST['submit'])) {
				require("crear_estado.php");
			}
			?>
		</div><!--cierra el div de la clase container-->
			<center>
				<br></br>
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
<html>		
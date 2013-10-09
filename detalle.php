<?php
include("conexion.php");

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
				
		<title>Base de Conocimiento</title>
		<link href='Estilo/css/estilo.css' rel="stylesheet">
		
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
															</tr>
														</tbody>
													</table>
												</td>
												<td align="right">
													<table style="border-collapse: collapse;" border="0">
														<tbody>
															<tr>
																<td style="padding: 3px;">
																	<h2>Detalle del Procedimiento</h2>
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
				<form method="POST" action="detalle.php">
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
												Nombre del Procedimiento:
											</td>
											<td>
												<input type="text" name="nombre" id="nombre" /><b style="color:red;">*</b>
											</td>
										</tr>
										<tr>
											<td>
												Descripci&oacute;n del Procedimiento:
											</td>
										</tr>
									</table>
								</div><!--cierre de div de la class formulario-->
							</td>
						</tr>
						</table>
				</center>
			</div><!--cierre del div style-->
		</form>
		</div><!--cierra el div de la clase container -->
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
	
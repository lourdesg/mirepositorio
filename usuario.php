<?php
		include("conexion.php");

		$u = "conocimiento";
		/**/
		mysql_select_db("conocimiento", $conexion);
		$sqlusuario =  "SELECT id_usuario, nombre, apellido, nice, correo, password FROM usuarios ORDER BY nombre" ;
		$queryusuario= mysql_query($sqlusuario, $conexion) or die(mysql_error());
		$rowusuario = mysql_fetch_assoc($queryusuario);
		/**/
		// crear funciones para validar los campor del usuario 
		
		function ValidateNombre($nombre){
			$permitidos ="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_";
			$caracter1ko= 0;
			if (strlen($nombre)< 5):
				return false;
			else:
			for ($i=0; $i<strlen($nombre); $i++){
				if (strpos($permitidos, subtr($nombre,$i,1))===false){
					$caracter1ko = 1;
				}
			}
			endif;
			if ($caracter1ko ==1 ||strlen($nombre) <=4):
				return false;
			else:
				return false;
			endif;
			
		}
	
	//variables valores por debecto
	$nombre="";
	
	//validacion de los datos enviados 
	if(isset($_POST['send'])){
		if (isset($_POST['nombre']))
			$nombre ="Error";
			
			
			$nombreValue = $_POST['nombre'];
		if ($nombre != "error"){
			
		}
	}
		// fin de las funciones 
	
	
		$encriptada1 = crypt("password"); //esta es sin base de codificación

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Base de Conocimiento Banadesa </title>
		<script src="js/jquery.js"></script>
		<script src="tiptip/jquery.tipTip.js"></script>
		<script src="tiptip/jquery.tipTip.minified.js"></script>
		<script href="js/editor.js"></script>
		<link href="tiptip/tipTip.css" rel="stylesheet">
		<script src="usuarios/buscar.js"></script>
		<script>
			$(function(){	
			$(".tiptip").tipTip();
			});
		</script>
		
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script>
			$(function(){
				$('#miForm1').validate();
			}
		</script>
		
		<script>
		function soloLetras(e) {
			key = e.keyCode || e.which;
			tecla = String.fromCharCode(key).toLowerCase();
			letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
			especiales = [8, 37, 39, 46];

			tecla_especial = false
			for(var i in especiales) {
				if(key == especiales[i]) {
					tecla_especial = true;
					break;
				}
			}

			if(letras.indexOf(tecla) == -1 && !tecla_especial)
				return false;
		}

		function limpia() {
			var val = document.getElementById("miInput").value;
			var tam = val.length;
			for(i = 0; i < tam; i++) {
				if(!isNaN(val[i]))
					document.getElementById("miInput").value = '';
			}
		}
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
																	<h2>Crear Usuario</h2>
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
							<input type="name" name="buscar" />
							<input type="submit" name="Buscar" value="Buscar" /> 
							 
							</center>
						</td>
					</tr>
					<tr>
						<td>
							<div class="listadoNice" style="height:200px;overflow-y:scroll;">
								<?php do{ ?>
								<div style="float:left;width:100px;height:45px;border-left:#dddddd solid 1px;padding:6px; font-size:12px;color:#444444;">
									<?php 
									$nice = trim($rowusuario['nice']);
									$max_nice = 15;
									if (strlen($nice)>$max_nice)
									{
										$nice = substr($nice,0,$max_nice)."..";
									}
										echo $nice;
									?>

								</div>
								<?php } while($rowusuario = mysql_fetch_assoc($queryusuario));?>
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
									<font size= 4>
										<tr>
											<td style='font-size: 16px'>
												Nombre del usuario:
											</td>
											<td>
												<input class="required" type="name" name="nombre" onkeypress="return soloLetras(event)" id="miInput" maxlength="30" size= "35" style='font-size: 16px'/><b style="color:red;">*</b>
												
											</td>
										</tr>
										<tr>
											<td style='font-size: 16px'>
												Apellido del usuario:
											</td>
											<td>
												<input type="name" name="apellido"  onkeypress="return soloLetras(event)"  id="miInput" maxlength="30" size= "35" style='font-size: 16px'/><b style="color:red;">*</b>
											</td>
										</tr>
										<tr>
											<td style='font-size: 16px'>
												usuario:
											</td>
											<td>
												<input type="name" name="nice"maxlength="20" size= "20" style='font-size: 16px' /><b style="color:red;">*</b>
											</td>
										</tr>
										<tr>
											<td style='font-size: 16px'>
												Correo:
											</td>
											<td>
												<input type="name" name="correo" maxlength="30" size= "35" style='font-size: 16px' /><b style="color:red;">*</b>
											</td>
										</tr>
										<tr>
											<td style='font-size: 16px'>
												password:
											</td>
											<td>
												<input type="password" name="password" maxlength="20" size= "20" style='font-size: 16px'/><b style="color:red;">*</b>
												
												
										</tr>
										<tr>
												<td style='font-size: 16px'>
												Estado del Usuario:
											</td>
											<td>
												<input type="HIDDEN" name="estado" id="miInput"maxlength="20" size= "20" style='font-size: 16px'/>
												<?php 
														$link =mysql_connect("localhost","root","");
														mysql_select_db("conocimiento",$link); 
														echo"<select type=name name=estado id=miInput maxlength=20  font-size=16 >"; 

														$sql="SELECT descripcion, id_estado  FROM estado ORDER BY descripcion"; 
														$result=mysql_query($sql); 
														
														$i=0; 
														$a=1;
														while ($row=mysql_fetch_row($result)) 
														{ 
														 $id_estado = $rows["id_estado"];
														 
														 echo "<option value=".$row[$a].">".$row[$i]."</option>\n"; 
														} 
														echo "</select>"; 
												?> 
									
											<b style="color:red;">*</b>
											
											</td>
										</tr>
										<tr>
											<td style='font-size: 16px'>
												Catego&iacute;a del Usuario:
											</td>
											<td>
												<input type="HIDDEN" name="categoria" />
												<?php 
														$link =mysql_connect("localhost","root","");
														mysql_select_db("conocimiento",$link); 
														echo"<select type=name name=categoria id=miInput maxlength=20  font-size=16>"; 

														$sql="SELECT  descripcion, id_cateuser FROM categoria_usuario ORDER BY descripcion"; 
														$result=mysql_query($sql); 
														
														$i=0; 
														$a=1;
														while ($row=mysql_fetch_row($result)) 
														{ 
														 $id_cateuser = $rows["id_cateuser"];
														 
														 echo "<option value=".$row[$a].">".$row[$i]."</option>\n"; 
														} 
														echo "</select>"; 
												?> 
											
											<b style="color:red;">*</b>
											
											</td>
										</tr>
										</font>
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
				require("crear_usuario.php");
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
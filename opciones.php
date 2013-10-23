<?php
include("conexion.php");
?>
<html>
	<head>
		<title>Base de Conocimiento</title>
		<link href="Estilo/css/estilo.css" rel="stylesheet">
		
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
							<td width="300">
							<br>
							<p><a href='index.php' title="Cerrar mi sesion como usuario validado">Cerrar Sesi&oacute;n</a></p>
							</td>
							</tr>
						</table>
						<hr></Hr>
				</center>
				<center>			
				<TABLE style="text-align: top; margin-left: 40px; border: 1; margin-right: 0px;" width="900"  border="0" cellpadding="0" cellspacing="0">

						<TR width= 50px>
							<TD width= "400px" height="400px"  style="float:top">
							<button   class ="redondear" style='width:400px; height:400px; background-color: #669933'>
								<img  class="redondear" src="Imagenes/blanco.png"width= "350px" height="350px">
								<font size=4>
									<a link href="administrador.php" style="text-decoration:none;color:white; " >
										<b> Crear Procedimiento</b>
									</a>
								</font>
							</button>
							</td>
							<br></br>
							<TD width= "400px" height="250px"  style="float:top">
							<button   class ="redondear" style='width:400px; height:400px; background-color: #669933'>
								<img  class="redondear" src="Imagenes/ver.png"width= "350px" height="350px">
								<font size=4>
									<a link href="buscador.php" style="text-decoration:none;color:white; " >
										<b> Ver el Procedimiento</b>
									</a>
								</font>
							</button>
							</td>
						</TR>
						

				</TABLE>
				</center>
					</div><!--cierra el div de la clase span12-->
					</div><!--cierra el div del id banner-->
				</div><!--cierra el div de la clase row-->
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
					Banco Nacional de Desarrollo Agricula <?php echo date("Y");?>
				</small>
			</center>
</body>
</html>
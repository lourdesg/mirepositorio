<?php
/*
 * Buscador en AJAX. Ejemplo creado por Victor De la Rocha [http://www.mis-algoritmos.com]
 * http://www.mis-algoritmos.com/?p=169
 */
require('config.php');
require('include/conexion.php');
require('include/funciones.php');
require('include/pagination.class.php');

$items = 10;
$page = 1;

if(isset($_GET['page']) and is_numeric($_GET['page']) and $page = $_GET['page'])
		$limit = " LIMIT ".(($page-1)*$items).",$items";
	else
		$limit = " LIMIT $items";

if(isset($_GET['q']) and !eregi('^ *$',$_GET['q'])){
		$q = sql_quote($_GET['q']); //para ejecutar consulta
		$busqueda = htmlentities($q); //para mostrar en pantalla

		$sqlStr = "SELECT * FROM procedimiento WHERE nombre LIKE '%$q%'";
		$sqlStrAux = "SELECT count(*) as total FROM procedimiento WHERE nombre LIKE '%$q%'";
	}else{
		$sqlStr = "SELECT * FROM procedimiento";
		$sqlStrAux = "SELECT count(*) as total FROM procedimiento";
	}

$aux = Mysql_Fetch_Assoc(mysql_query($sqlStrAux,$link));
$query = mysql_query($sqlStr.$limit, $link);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

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
		<link href="Estilo/css/estilo.css" rel="stylesheet">
		
	<style type = "text/css">
		a {
			  color: blue;
			  text-decoration: none;
		}
		a:hover {
			   color: green;
		 
		}
	</style>
	<link rel="stylesheet" href="pagination.css" media="screen">
<link rel="stylesheet" href="style.css" media="screen">
<script src="include/buscador.js" type="text/javascript" language="javascript"></script>
</head>
<body  style=" margin-left:45px margin-rigth:300px">
	<center>
	<div class="container">
				<div class="row">
					<div id="banner">
						<div class="span12">
							<img class ="redondear" src="Imagenes/logoBanadesa.png" width="920px" height="150px"  border="0"  style=" margin-left:45px margin-rigth:300px">
							
							
						</div><!--cierra el div de la clase span12-->
					</div><!--cierra el div del id banner-->
				</div><!--cierra el div de la clase row-->
				
				<hr class= "linea" style=" margin-left:45px">
	</div><!--cierra el div de la class container-->
	<br>
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
	</center>
</body>
</html>


<?php
//http://127.0.0.1/phpmyadmin
$servidor = "localhost"; //nombre del servidor
$usuario = "root";//nombre del usuario
$contrasenha ="";//contraseña de mysql
$BD = "conocimiento";//nombre de la base de datos


$conexion = @mysql_connect($servidor, $usuario, $contrasenha);
$link = $conexion;
if (! $conexion){
	die("No se Puede Conectar la Base de Datos");
}
mysql_select_db($BD);


?>

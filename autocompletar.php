<?php
 require_once("funciones.php"); //RECIBIMOS LOS DATOS Y LOS TRATAMOS $buscar = strtolower(mysql_real_escape_string(strip_tags($_POST['buscar']))); $autocom=new Users(); $autocom--->autocompletar($buscar);
?>

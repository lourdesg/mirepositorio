<?php
if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
 isset($_POST['password']) && !empty($_POST['password'])) {
/* 
 * Ejemplo de una página asegurada
 * Simplemente hay que añadir esta línea de PHP al principio.
 */
 require('php_lib/include-pagina-restringida.php'); //el incude para vericar que estoy logeado. Si falla salta a la página de login.php
$consulta=mysql_query("SELECT usuarios.id_usuario, estado.permiso as permiso FROM usuarios
            INNER JOIN estado
            ON usuarios.id_estado = estado.id_estado
            WHERE nice = '".$_POST['usuario']."'
            AND password = '".$_POST['password']."' ");

/* MUESTRA EN PANTALLA EL TEMA PRINCIPAL DEL FORO */
while ($row=mysql_fetch_array($consulta))///error 

{


$nice =$row['id_usuario'];
$permiso=$row['permiso'];
$ver = 'ver';

if ($permiso==$ver)
	{
	    header('Location: busqueda.php'); 
	}else{ 
		header('Location:opciones.php');
	}

}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Página de acceso restringido</title>
    </head>
    <body>
        <!--p>
            Si ves esta página es que eres un usuario validado.
        </p>
        <p>Si quieres cerrar la sesión puedes hacer un <a href='administrador.php' title="Cerrar mi sesion como usuario validado">logout</a></p-->
    </body>
</html>


<style>
 h3{color:blue;}
 </style>
 <?php
 error_reporting(E_ALL ^ E_NOTICE);
 //creamos la conexion a la base de datos
 $conexion = mysql_connect('localhost','root','');
 $db= mysql_select_db('conocimiento',$conexion);
 $palabra = $_GET['nice'];
 if($palabra == ''){
     echo 'Escribe una palabra...';
 }else{
 $query = "SELECT id_usuario, nombre, correo FROM usuarios where nice like '%$palabra%'";
 $respuesta = mysql_query ($query) or die(mysql_error());
 if (mysql_fetch_assoc ($respuesta)<=0) {
    
 echo "No se encontraron resultados con el termino ".'<b>'.$palabra.'<b>'.".";
 }else {
 $respuesta = mysql_query ($query) or die(mysql_error());
 while($row = mysql_fetch_array($respuesta))
 {
     echo '<p>';
     echo '<b>'.$row['nombre'].'</b><br />';
     echo $row['nice'];
     echo '</p>';
 }
 }mysql_free_result($respuesta);
 }
 ?>
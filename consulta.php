<?php
mysql_connect("localhost","root","");
mysql_select_db("conocimiento");
if($_POST[&#39;opc&#39;]==&#39;del&#39;){
echo "ELIMINAR";
$sql=$_POST[&#39;sql&#39;];
if(mysql_query($sql)){
echo "Eliminado.";
exit;
}
exit;
}
$result = @mysql_query($_POST[&#39;sql&#39;]);
while($row = @mysql_fetch_assoc($result)) {
foreach($row as $key => $value) {
echo "Campo:$key - Valor:$value <br/>"; 
}
echo "<br />";
}
?>
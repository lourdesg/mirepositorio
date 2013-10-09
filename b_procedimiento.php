<script src='../jquery-1.6.1.js'></script>
<script>
$(document).ready(function(){
$('#especial').hide();
$('#sql').keyup(function(){
str=$('#sql').val().toLowerCase();
strx=str.split(" ");
if(strx[0]=='delete'){
$('#especial').show(100);
$('#especial').click(function(){
$('#out').load('consulta.php',{sql:$('#sql').val(),opc:'del'});
});
}else{
$('#especial').hide(100);
$('#out').load('vnews.php',{sql:$('#sql').val()});
}
});
});
</script>
<input id=sql><button id='especial'>Eliminar</button><br />
<div id=out></div>
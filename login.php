<?php 
//@param string $nice
//@param string $password

function login($usuario, $password){
	//usuarios y password tienen datos 
	if (empty($usuario))return false;
	if(empty($password))return false;
	//contactamos la base de datos con los parametros 
	$link= mysql_connect("localhost"," root","" );
	if (!$link){
		trigger_error('Error al conectar al servidor de mysql:'.mysql_error(),E_USER_error);
		
	}
	$db_selected = mysql_select_db(conocimiento, $link);
    if (!$db_selected) {
        trigger_error ('Error al conectar a la base de datos: ' . mysql_error(),E_USER_ERROR);
    }
	$query='SELECT '.nice.', '.password.','.id_estado.','.id_cateuser.' FROM '.usuarios.' WHERE '.nice.'="'.  mysql_real_escape_string($usuario).'" LIMIT 1 '; //la tabla y el campo se definen en los parametros globales
    $result = mysql_query($query);
    if (!$result) {
        trigger_error('Error al ejecutar la consulta SQL: ' . mysql_error(),E_USER_ERROR);
    }
	$row = mysql_fetch_assoc($result);
 
    if ($row) {
        //4 - Generamos el hash de la contraseña encriptada para comparar o lo dejamos como texto plano
        switch (METODO_ENCRIPTACION_CLAVE) {
            case 'sha1'|'SHA1':
                $hash=sha1($password);
                break;
            case 'md5'|'MD5':
                $hash=md5($password);
                break;
            case 'texto'|'TEXTO':
                $hash=$password;
                break;
            default:
                trigger_error('El valor de la constante METODO_ENCRIPTACION_CLAVE no es válido. Utiliza MD5 o SHA1 o TEXTO',E_USER_ERROR);
        }
 
        //5 - comprobamos la contraseña
        if ($hash==$row[password]) {
            @session_start();
            $_SESSION['nice']=array('nice'=>$row[CAMPO_USUARIO_LOGIN]); //almacenamos en memoria el usuario
            // en este punto puede ser interesante guardar más datos en memoria para su posterior uso, como por ejemplo un array asociativo con el id, nombre, email, preferencias, ....
            return true; //usuario y contraseña validadas
        } else {
            @session_start();
            unset($_SESSION['nice']); //destruimos la session activa al fallar el login por si existia
            return false; //no coincide la contraseña
        }
    } else {
        //El usuario no existe
        return false;
    }
} 
if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
 isset($_POST['password']) && !empty($_POST['password'])) {
 
$link = mysql_connect("localhost","root","");
mysql_select_db("conocimiento",$link);

$my_error = mysql_error($link);

if(!empty($my_error)) 
{ 


echo "Por favor llene todos los campo."; 

} 

}
	
		
		// crear funciones para validar los campor del usuario 
		
?>

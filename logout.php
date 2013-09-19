
<?php 
    session_start(); 
    include('conexion.php'); // incluímos los datos de acceso a la BD 
    // comprobamos que se haya iniciado la sesión 
    if(isset($_SESSION['nice'])) { 
        session_destroy(); 
        header("Location: index.php"); 
    }else { 
        echo "Operaci&oacute;n incorrecta."; 
    } 
?> 


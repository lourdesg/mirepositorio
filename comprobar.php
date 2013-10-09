<?php
      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
            $con = mysql_connect('localhost','root', '');
            mysql_select_db('concimiento', $con);
       
            $sql = mysql_query("SELECT * FROM usuarios WHERE nice = '".$b."'",$con);
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
            }
      }     
?>

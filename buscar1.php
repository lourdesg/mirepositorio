<?php
 
      $buscar = $_POST['b'];
       
      if(!empty($buscar)) {
            buscar($buscar);
      }
       
      function buscar($b) {
            $con = mysql_connect('localhost','root', '');
            mysql_select_db('conocimiento', $con);
       
            $sql = mysql_query("SELECT * FROM procedimiento WHERE nombre LIKE '%".$b."%'",$con);
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{
                  while($row=mysql_fetch_array($sql)){
                        $nombre = $row['nombre'];
                        $id = $row['id_porcedimiento'];
                         
                        echo $id_procedimiento." - ".$nombre."<br /><br />";    
                  }
            }
      }
       
?>

<?php
include("conexion.php");
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Untitled Document</title>
        <script type="text/javascript" src="funciones.js"></script>
        <style type="text/css">
                legend {
                        font-family: Verdana, Arial, Helvetica, sans-serif;
                        font-weight: bold;
                        font-size: 12px;
                }
                .titulo{
                        width:20%;
                }
                .contenido{
                        width:60%;
                }
                .autor{
                        width:15%;
                }
                </style>
	 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular-resource.min.js"></script>
    <script src="https://cdn.firebase.com/v0/firebase.js"></script>
    <script src="http://firebase.github.io/angularFire/angularFire.js"></script>
    <script src="project.js"></script>
	<script href="js/jquery-buscar1.js"></script>
		<title>Base de Conocimiento</title>
		<link href="Estilo/css/estilo.css" rel="stylesheet">
		
	</head>
	
	<body>
		<div class="container">
				<div class="row">
					<div id="banner">
								
						<div class="span12">
						<table width = 1024>
							<tr>
								<td width ="880" >
									<img class ="redondear" src="Imagenes/logoBanadesa.png" width="900px" height="150px"  border="0"> 
								</td>
								<td width="300">
									<br>
									<p><a href='index.php' title="Cerrar mi sesion como usuario validado">Cerrar Sesi&oacute;n</a></p>
								</td>
							</tr>
						</table>
						</div><!--cierra el div de la clase span12-->
					</div><!--cierra el div del id banner-->
				</div><!--cierra el div de la clase row-->
			
		</div><!--cierra el div de la clase container-->
		<input type="text" id="busqueda" />         
		<div id="resultado"></div>
<script>		
$(document).ready(function(){
                         
      var consulta;
             
      //hacemos focus
      $("#busqueda").focus();
                                                 
      //comprobamos si se pulsa una tecla
      $("#busqueda").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#busqueda").val();
                                      
             //hace la búsqueda
             $("#resultado").delay(1000).queue(function(n) {      
                                           
                  $("#resultado").html('<img src="ajax-loader.gif" />');
                                           
                        $.ajax({
                              type: "POST",
                              url: "comprobar.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#resultado").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
                          
});
</script>
			<center>
				<table>
					<tr>
						<td align="center">
								<small>
								&copy; Banadesa <?php echo date("Y");?>
								</small>
						</td>
					</tr>
				</table>
				<small>
					Banco Nacional de Desarrollo Agricula 
				</small>
			</center>
</body>
</html>
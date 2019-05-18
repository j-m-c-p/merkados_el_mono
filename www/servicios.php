<!-- 
*  
* Autor: Jhonnatan Cubides
* 
-->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<?php
		/* se incluye la clase BD la cual contiene las funciones para el funcionamiento del prototipo */
		include ('class/BD.php');

		/*Se nombra una variable para crear un nuevo objeto*/
		$obj_o= new BD;
		echo $obj_o->style('bootstrap');/*se trae el link de los estilos de bootstrap*/
		?>
			
		<title>	Servicios</title>
	</head>
	<body>

		<div class="container-fluid">
			<br>
			<?php
            	echo $obj_o->header();/* se imprime el encabezado */
          	?>		
		
			<br>
			<br>
			
			<h2> MERKADOS EL MONO ZOMAC S.A.S </h2>

			
	        <div class="row">
				<div class='col-xs-12 col-md-2 '>
				</div>
				<div class='col-xs-12 col-md-4 '>
				<h4> OFERTAS </h4>
					<div style="overflow-y: auto; height: 100%; width: 600px">
						<?php
						echo $obj_o->mostrar_ofertas( "tb_ofertas", 0, null, null, 'productos.php' ); //Trae los datos.

						?>
		            </div>
				</div>
				<div class='col-xs-12 col-md-4 '>
				<h4> PROMOCIONES </h4>
					<div style="overflow-y: auto; height: 100%; width: 600px">
			            <?php
			            echo $obj_o->mostrar_ofertas( "tb_ofertas", 0, null, null, 'productos.php' ); //Trae los datos.
		                 	
		                ?>
		            </div>
				</div>
			</div>
			<?php
           	echo $obj_o->footer();/* se imprime el footer */
          	?>
		</div>
		<!--Insertamos jQuery dependencia de Bootstrap-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!--Insertamos el archivo JS compilado y comprimido -->
			<script src="css/bootstrap/js/bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	</body>
</html>
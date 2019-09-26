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
		
		<title>	Productos</title>
	</head>
	<body>

		<div class="container-fluid">
			<br>
			<?php
            echo $obj_o->header();/* se imprime el encabezado */
          	?>		
	
			<br>
			<br>

			<h2> CARNES PROCESADAS </h2>	
		
			
            <?php
             	echo $obj_o->mostrar_productos_carnico( "tb_productos", 0, null, null, 'productos.php' ); //Trae los datos.
            	echo $obj_o->footer();/* se imprime el footer */
          	?>
	        
		</div>
		<!--Insertamos jQuery dependencia de Bootstrap-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!--Insertamos el archivo JS compilado y comprimido -->
		<script src="css/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141755670-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-141755670-1');
		</script>

	</body>
</html>


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
			
		<title>	Inicio</title>
   
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
				<div class='col-xs-10 col-md-8 '>
					<!--Carousel Wrapper-->
					<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
					  	<!--Indicators-->
						<ol class="carousel-indicators">
							<li  data-slide-to="0" class="active"></li>
							<li  data-slide-to="1"></li>
							<li  data-slide-to="2"></li>
						</ol>
						<!--/.Indicators-->
						<!--Slides-->
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="view">
									<img class="d-block w-100" src="img/1c.jpg" alt="primera">
									<div class="mask rgba-black-light"></div>
								</div>
								<div class="carousel-caption">
									<h3 class="h3-responsive">This is the first title</h3>
									<p>hola1</p>
								</div>
							</div>
							<div class="carousel-item">
								<!--Mask color-->
								<div class="view">
									<img class="d-block w-100" src="img/2.jpg" alt="segunda">
									<div class="mask rgba-black-light"></div>
								</div>
								<div class="carousel-caption">
									<h3 class="h3-responsive">Thir is the second title</h3>
									<p>hola2</p>
								</div>
							</div>
							<div class="carousel-item">
								<!--Mask color-->
								<div class="view">
									<img class="d-block w-100" src="img/3.jpg" alt="tercera">
									<div class="mask rgba-black-light"></div>
								</div>
								<div class="carousel-caption">
									<h3 class="h3-responsive">This is the third title</h3>
									<p>hola3</p>
								</div>
							</div>
						</div>
						<!--/.Slides-->
						<!--Controls-->
						<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						<!--/.Controls-->
					</div> 
					<!--/.Carousel Wrapper-->
				</div>
				<div class='col-xs-12 col-md-2 '>
				
				</div>
				
			</div>
			<br>
			<br>
			<br>
			
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


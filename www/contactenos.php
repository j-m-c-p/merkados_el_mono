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
			
		<title>	Contactenos</title>
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
			<br>
			<br>
			<div class="row">
				<div class='col-xs-12 col-md-2 '>
				</div>
				<div class='col-xs-12 col-md-4 '>
				<h5> Datos de la Empresa </h5>
				<label >Telefono: 3135555666</label>
				<br>
				<label >Dirección: Cra 20 # 15 - 14 Barrio la Granja</label>
				<br>
				<label >E-mail: Mercadoselmono@gmail.com</label>
				<br>
				<label >Citio web: www.mercadoselmono.com.co</label>
				<br>
				<label >Corresponsal Bancario Bancolombia</label>
				<br>
				<label >Se reciben pagos con tarjeta</label>
				</div>
				<div class='col-xs-12 col-md-4 '>
				<h5> Peticiones </h5>
				<form  action="guardar_datos.php" method="get">
					<div class="form-group">
                     	<input type="hidden" name="url" value="Contactenos.php">
                    	<input type="hidden" class="form-control" name="dato1">
                    </div>
					<div class="form-group">
						<label for="nombre">Nombres</label>
						<input type="text" class="form-control" id="nombre" name="dato2"aria-describedby="emailHelp" placeholder="Ingrese su nombre" required>
						<small id="nameHelp" class="form-text text-muted">*</small>
					</div>
					<div class="form-group">
						<label for="peticion">Opinión</label>
						<textarea name="dato3" rows="2" cols="83" placeholder="Escribe aquí tus comentarios"></textarea>
					</div>
					<input type="hidden" name="table" value="tb_opiniones">
                    <input type="hidden" name="total-campos" value="3">
                    <input type="hidden" name="campos" value="id_opinion, nombres, opinion">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
				</div>
			</div>
			<div class="row">
				<div class='col-xs-12 col-md-2 '>
				</div>
				<div class='col-xs-12 col-md-8 '>
					<br>
					<br>
					<h5> Localización Geografica </h5>
					<br>
					<br>
					<div class="google-maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1409.2057897391362!2d-72.63961536750062!3d2.5601878833439327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5f34a44558b556d!2sMerkados+El+Mono!5e0!3m2!1ses!2sco!4v1556620940588!5m2!1ses!2sco" width="1240" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
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
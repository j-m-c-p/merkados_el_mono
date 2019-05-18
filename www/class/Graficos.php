<?php 
	/*
	* 
	* Autor: Jhonnatan Cubides
	*
	*/
	
	/**
	*Esta clase contiene las funciones de la parte del diseño del software.  
	*/
	
	class Graficos

	{
			/**
			*esta función contiene el link de la libreria de bootstrap. 
			*@return 		caracteres 		retorna estilos de bootstrap.
			*/
			function style($carpeta=null)
			{
				$exit="";
				$exit="

    			<link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
				<link rel='stylesheet' href='css/style.css'>
				<link rel='stylesheet' href='bootstrap/css/bootstrap-theme.min.css'>
				";
						 
				return $exit;		 
			}
			/**
			*esta función contiene el encabezado de la página. 
			*@return 		caracteres 		retorna el encabezado.
			*/
			function header()
			{	
				
				$exit="";
	

				$exit .="<img class='img-fluid' alt='Responsive image' src='img/lo-01.png'>
				<br>
				<nav class='navbar navbar-expand-lg  navbar-dark bg-dark'>
					<a class='navbar-brand' href='#'></a>
					<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
						<span class='navbar-toggler-icon'></span>
					</button>
					<div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
							<div class='navbar-nav'>
								<a class='nav-item nav-link hover' href='http://localhost/merkados_el_mono/www/index.php'>Inicio <span class='sr-only'>(current)</span></a>
								<a class='nav-item nav-link' href='http://localhost/merkados_el_mono/www/mision-visi.php'>Misión-Visión</a>
								<a class='nav-item nav-link' href='http://localhost/merkados_el_mono/www/productos.php'>productos</a>
								<a class='nav-item nav-link ' href='http://localhost/merkados_el_mono/www/servicios.php'>servicios</a>
								<a class='nav-item nav-link' href='http://localhost/merkados_el_mono/www/contactenos.php'>contactenos</a>

							</div>
					</div>
				</nav>";
			
				return $exit;
			}
			function footer()
			{
				$exit="";
				$exit="
				<footer class='footer'>
					<div class='container text-left'>
						<div class='row'>
							<div class='col-xs-12 col-md-5 '>
								<small style='color:grey' class='copyright'>Copyright &copy 2019 Mercados el Mono zomac S.A.S.</small>
							</div>
							<div class='col-xs-12 col-md-2 '>
							</div>
							<div class='col-xs-12 col-md-5 '>
								<a href='#'><small style='color:grey' class='fa fa-lg fa-skype pull-right'>
								<img src='img/g.png' ></small></a>
								<a href='#'><small style='color:grey' class='fa fa-lg fa-google-plus pull-right'><img src='img/f.png' > </small></a>
								<a href='#'><small style='color:grey' class='fa fa-lg fa-linkedin pull-right'> <img src='img/w.png' > </small></a>
								<a href='#'><small style='color:grey' class='fa fa-lg fa-twitter pull-right'><img src='img/t.png' >  </small></a>
								<a href='#'><small style='color:grey' class='fa fa-lg fa-facebook pull-right'>  </small></a>
							</div>
						</div>
					</div><!--End container-->
				</footer><!--End footer 2-->
				";
				return $exit;
			}
			

	}
?>

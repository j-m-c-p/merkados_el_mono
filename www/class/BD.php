<?php
	/*
	* 
	* Autor: Jhonnatan Cubides
	* 
	*/


	/**
	*Esta clase contiene todas la funciones.
	*/
	include('Graficos.php');/* se incluye el archivo Graficos.php el cual contiene la clase graficos.*/
	class BD extends Graficos
	{

		public $connection; //variable publica


		/**
		*
		*esta funcion es el constructor.						
		*
		*/
		function BD ()
		{
			$this->connection=$this->create_connection();
			//echo "nacio la clase BD";
		}
		
		/**
		*esta funcion se encarga de crear la connection con el server.			
		*@return    la connection a la base de datos.
		*/
		
		 function create_connection ()
		 {
		 	include('config.php');
		 	return mysqli_connect($server,$usser,$key,$bd);
		 }
		 
		/**
		*esta función sirve para guardar los datos en la base de datos.
		*@param 	texto  		parametro de entrada que contiene $table
		*@param 	texto 		parametro de entrada que contiene campos
		*@param 	texto 		parametro de entrada que contiene $datos
		*@return 	texto 		retorna todo lo que contiene la variable exit.
		*/


		function save_information( $table, $campos, $datos )
		{
			include( "config.php" ); //Aquí se traen los parámetros de la base de datos.
			//Hay que recordar que solo debería existir un archivo que permita dicha configuración.

			$exit = "";

			//------------SQL para ingresar datos----------------------------------------------------
			$sql = "INSERT INTO  $table ( $campos ) VALUES( $datos )";

			//echo $sql;

			$connection = mysqli_connect( $server, $usser, $key, $bd );
			$result = $connection->query( $sql );


			//Si se han afectado rows, entonces se procederá a informar.
			if( $connection->affected_rows > 0 )
			{

				//echo(alert('Se ha guardado')); 
				//header('location:index.php?error=3');
				//$exit = "Los datos se han guardado correctamente.";
				echo "<script>window.location.href = 'contactenos.php'; alert('se ha guardado con éxito')</script>"; 

			}else{
				echo 'no';
				//echo(alert('No se ha guardado'));
				//header('location:contactenos.php?error=4'); 
				echo "<script>window.location.href = 'contactenos.php'; alert('Este dato ya existe')</script>"; 
				//$exit = "Error: los datos no se han guardado. Es probale que la información ya se encuentre en el sistema."; 
				}

			//echo $sql; //Al habilitar esta línea se puede observar el SQL que ha sido formado para la inserción. 

			
		}


		
		

		function mostrar_productos()
		{
			$exit ="";

			$sql="SELECT img, pronom, proprecio FROM tb_productos WHERE grpnom='abarrotes'  ";
			include('config.php');

			$connection=mysqli_connect($server,$usser, $key, $bd);
			$result= $connection->query($sql);
			//$exit .= "<table  class='table table-striped table-bordered table-hover table-condensed'>";
			// $exit .= "<table>";

			// $exit .="<tr>";
			// $exit .="<th>Producto</th>";
			// $exit .="<th>Precio</th>";


			// $exit .="</tr>";
			$exit .= "<div class='py-5'>";
			$exit .= "<div class='container-fluid'>";
			$exit .= "<div class='row hidden-md-up'>";
			$exit .= "<div class='row'>";
			$cont=0;
			$btnMore=0;
			while( $row = mysqli_fetch_assoc( $result ) )
			{
				
				if ($cont == 6) 
				{
				
					$exit .= "</div>";
					$exit .= "<div class='row' style='margin-top:5px'>";
					$btnMore++;
					$cont = 0;
				}
			$cont++; 
						
			$exit .= "<div class='col-md-2'>";
			$exit .= "<div class='card border-success '  style='width: 100%; height: 85%;'>";
			$exit .= "<div class='card-block'>";
			$exit .= "<img class='card-img-top' src='".$row['img']."' height='50%' width='10%' alt=''>";
			$exit .= "<div class='card-body'>";
			$exit .= "<h6 class='card-title'>".($row['pronom'])."</h6>";
			$exit .= "<button type='button' class='btn btn-success'><h5>Precio:".'$'.$row['proprecio']."</h5></button>";
			$exit .= "</div>";
			$exit .= "</div>";
			$exit .= "</div>";
			$exit .= "</div>";

			// $cont++;	
			// if ($cont%4 == 0) {
				
			// 	$exit .= "<div class='col-sm'>".utf8_encode($row[ $i ])."</div>"; //Este es el dato impreso	
				
			// }
			// if ($cont%8 ==0) {
			// 	$exit .= "<div class='col-sm'>".utf8_encode($row[ $i ])."</div>"; //Este es el dato impreso	
			// }

				
			}
			$exit .= "</div>";
			$exit .= "</div>";
			$exit .= "</div>";
			

			// $exit .= "</table>";
			echo $exit;

		}
		function mostrar_ofertas()
		{
			$exit ="";
          
            $sql="SELECT nombre_producto,precio_producto, url FROM tb_ofertas WHERE codigo_producto  ";
            include('config.php');

            $connection=mysqli_connect($server,$usser, $key, $bd);
            $result= $connection->query($sql);
            $exit .= "<table  class='table table-striped table-bordered table-hover table-condensed'>";

            $exit .="<tr>";
            $exit .="<th>Producto</td>";
            $exit .="<th>Precio</td>";
           
            
            $exit .="</tr>";
            while( $row = mysqli_fetch_array( $result ) )
            {
              $exit .= "<tr>";

                for( $i = 0; $i < mysqli_num_fields( $result ); $i ++ )
                $exit .= "<td>".utf8_encode($row[ $i ])."</td>"; //Este es el dato impreso
                 
                
              $exit .= "</tr>";
            }
            

			$exit .= "</table>";
			echo $exit;

		}

		

		


		


		
		
	}	


 ?>

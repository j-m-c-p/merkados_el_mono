<!-- 
*  
* Autor: Jhonnatan Cubides
*Este archivo se encarga de recibir los parametros para guardar los datos de un formulario a la BD.
* 
-->
<?php


    include( "class/BD.php" );                  
    

 
    $obj_o= new BD;

    include 'config.php';
    if (isset($_GET['table']) && isset($_GET['id']) && isset($_GET['url'])) 
    {
    
    
    $table=$_GET['table'];
    $id=$_GET['id'];
    $url=$_GET['url'];

    $key_primary_table =$obj_o-> return_date( "INFORMATION_SCHEMA.COLUMNS", "COLUMN_NAME", " TABLE_SCHEMA = '$bd' AND TABLE_NAME = '$table' AND COLUMN_KEY = 'PRI' " );
    $obj_o->delete( $table, " $key_primary_table = '$id' ", $url );
   
    }



    
 

  
    if( isset( $_GET[ 'table' ] ) && isset( $_GET[ 'total-campos' ] ) && isset( $_GET[ 'campos' ] ) && isset( $_GET[ 'url' ] ) )
    {
        $table              = $_GET[ 'table' ];
        $total_campos       = $_GET[ 'total-campos' ];
        $campos             = $_GET[ 'campos' ];
        $url                = $_GET['url'];
        $valores            = "";
        $caracter_separador = ", ";
        
        //echo $campos."<br>"; //Esta línea es para ver si están llegando los datos.
        
        //En este ciclo se preparan los diferentes elementos para el insert. Hay que recordar que los valores de los campos
        //deben venir en secuencia desde los formularios para que esto funcione. En sí, el formulario aportaría toda la información
        //necesaria para que este código funcione, sin hacerle cambios.
        for( $i = 1; $i <= $total_campos; $i ++ )
        {
            if( $i >= $total_campos ) $caracter_separador = ""; //Quitamos la coma porque el último dato no debe llevarla.
            //echo $_GET[ 'dato'.$i ]."<br>"; //Esta línea se puede habilitar si se requieren ver los datos que están llegando.
            $valores .= "'".utf8_decode($_GET[ 'dato'.$i ])."'".$caracter_separador;
        }
    
        //Aquí se ejecuta la inserción de la información. Este código está en el archivo BD.php
        echo $obj_o->save_information( $table, $campos, $valores, $url );
        echo $url;
       
        
    }



     
?>


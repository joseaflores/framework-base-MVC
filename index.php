<?php 

 require_once("Config/Config.php");
 require_once("Helpers/Helpers.php");


 // enviar al controlador home por defecto si la url está vacía si no está vacia tomará los datos de controlador y metodos que hayamos introducido
 $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home' ;

 // ingreso en una array la cadena de texto que llega en la url usando la barra como separador
 $arrUrl = explode("/", $url);
 // igualo controlador y parametros a home por defecto
 $controller = $arrUrl[0];
 $method = $arrUrl[0];
 $params = "";

 // si hay algo distinto de home o distinto de vacio entonces significa que hay un controlador
 // ahora voy a comprobar si hay metodos y parametros y los igualo en sus respectivas variables
 if( !empty($arrUrl[1]) ) 
 {
    if( $arrUrl[1] != "" ) // si además es distinta de vacio
    {
        $method = $arrUrl[1];
    }
 }

 if( !empty($arrUrl[2]) ) // si existen argumentos
 {
    if ( $arrUrl[2] !="" ) // si además no vienen vacios
    {
        for ( $i=2;  $i < count($arrUrl); $i++ )  //los agrego a una array
        {
            $params .= $arrUrl[$i].',';
        }
        $params = trim($params, ','); //elimino la ultuma coma de la array
    }
 }


require_once("libraries/Core/Autoload.php");
require_once("Libraries/Core/Load.php");




?>
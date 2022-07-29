<?php
/* 

    Este pequeño script comprueba si existen el controlador y el metodo y si no
    redirecciona a la pagina erro404



*/


// load
// si no se ha especificado controlador ya le he asignado home por defecto
$controllerfile = "Controllers/" . $controller . ".php";

if (file_exists($controllerfile)) //si existe el archivo que le llega por url
{
    require_once($controllerfile);  // lo requiero y instancio la clase correspondiente
    $controller = new $controller;
    if (method_exists($controller, $method)) {  // ahora chequeo si existe el metodo que 
        $controller->{$method}($params);     // llega en este controlador y le agrego los parametros que por defecto son igual a "" si no se han introducido por url
    } else {

        require_once("controllers/Error404.php");
    }
} else {

    require_once("controllers/Error404.php");
}



?>
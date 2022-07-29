<?php 
/* 
    Este es el controlador primario, desde aquí cargaremos la vista y el modelo correspondiente
    gracias a el autoload las clases Views y Model se cargarn de forma automatica

*/


class Controllers
{
    public function __construct() // Con ": void" indicamos que no devuelve nada
    {
        $this->views = new Views(); // Instancio la clase vistas
        $this->loadModel();  // Llamo a la funcion que que me cargará el modelo
    }
    
    public function loadModel()
    {
        $model = get_class($this) . "Model"; //HomeModel
        $routClass = "Models/". $model . ".php"; //HomeModel.php

        if( file_exists($routClass))
        {
            require_once($routClass);
            $this->model =  new $model();
        }
    }
    
    
    
    
}

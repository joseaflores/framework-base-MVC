<?php 

class Usuario extends Controllers
{
    function __construct()
    {
        
    }
    public function Usuario($args)
    {
        echo "usuario";
    }

    public function newUser($args)
    {
        echo "estas intentando crear un nuevo user" . $args;
    }
}








?>
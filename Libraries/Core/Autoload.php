<?php

// función autoload para cargar clases de forma automatica
spl_autoload_register(function ($class) {
    //echo LIBS . 'Core/' . $class. ".php";
    if (file_exists("Libraries/Core/" . $class . ".php")) {
        require_once("Libraries/Core/" . $class . ".php");
    }
});




?>
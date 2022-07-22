<?php 

class Views
{
    function __construct()
    {
        
    }

    function getView($controller,$view)
    {
        $controller = get_class($controller);
        if($controller == "Home")
        {
            $view = "Views/" . $view . ".php";
        }else{
            $view = "Views/" . $controller . "/" . $view . ".php";
        }
        require_once ($view);
    }

}


?>
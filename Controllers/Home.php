<?php
class Home extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }


    public function home()
    {
        $this->views->getView($this, "home");
    }
}



?>
<?php

use Error as GlobalError;

class  Error404  extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }


    public function notFound()
    {
        $this->views->getView($this, "error404");
    }
}

$notfound = new Error404();
$notfound->notFound();


?>
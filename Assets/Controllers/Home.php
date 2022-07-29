<?php
class Home extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }


    public function home()
    {
        $data['page_id'] = 1;
        $data['page_name'] = 'Pagina principal';
        $data['page_title'] = 'Home';
        $data['page_tag'] = 'home';
        
        $this->views->getView($this, "home");
    }
}



?>
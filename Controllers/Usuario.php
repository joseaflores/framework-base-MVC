<?php

use LDAP\Result;

class Usuario extends Controllers
{
    function __construct()
    {
        
    }
    public function Usuario($args)
    {

        $data['page_id'] = 2;
        $data['page_name'] = 'Dashboar';
        $data['page_title'] = 'Dashboard';
        $data['page_tag'] = 'Usuario';
        echo token();
        
    }
    
}








?>
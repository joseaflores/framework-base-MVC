<?php

class Conexion
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "fbdb";
    private $conect;

    function __construct()
    {
        $conectionString = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";" . DB_CHARSET;
        try {
            // $this->conect = new PDO($conectionString, $this->user, $this->pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            $this->conect = new PDO($conectionString, DB_USER, DB_PASS);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //conexion existosa
        } catch (PDOException $e) {
            $this->conect = "Error de conexion";
            echo "Error: " . $e->getMessage();
        }
    }

    public function conect()
    {
        return $this->conect;
    }
}







?>
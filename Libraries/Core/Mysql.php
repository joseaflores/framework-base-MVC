<?php


class Mysql extends Conexion
{
    private $conexion;
    private $strquery;
    private $arrvalues;


    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conect();
    }

}

?>

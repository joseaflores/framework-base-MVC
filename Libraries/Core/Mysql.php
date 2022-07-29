<?php
/* 
    Esta clase es para el CRUD con la base de datos
    Create
    Read
    Update
    Delete

*/


// use LDAP\Result;

class Mysql extends Conexion
{
    private $conexion;
    private $strquery;
    private $arrValues;


    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conect();
    }


    //insertar un registro
    public function insert(string $query, array $arrValues )
    {
        $this->strquery = $query;
        $this->arrValues = $arrValues;

        $insert = $this->conexion->prepare($this->strquery);
        $resInsert = $insert->excute($this->arrValues);
        if($resInsert){
            $lastInsert =  $this->conexion->lastInsertId();
        }else{
            $lastInsert = 0;
        }
        return $lastInsert;
    }

    //buscar un registro
    public function select(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }


    //buscar más de un registro
    public function select_all(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }

    //aztualizar un registro
    public function update(string $query, array $arrValues)
    {
        $this->strquery = $query;
        $this->arrValues = $arrValues;

        $update = $this->conexion->prepare($this->strquery)  ;
        $resExecute = $update->excute($this->arrValues);
        return $resExecute;
    }

    //eliminar un registro
    public function delete(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        return $result;

    }





}




?>

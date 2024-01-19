<?php
require_once 'model/db.php';

class Airline extends DB
{
    public function getAllAirline(){
        $sql = 'SELECT * FROM airlines';
        return $this -> getData($sql);
    }

    public function addAirline($name){
        $sql = "INSERT INTO `airlines` (`id` , `name`) VALUES (null,'$name')";
        return $this -> getData($sql,false);
    }

    public function deleteAirline($id){
        $sql = "DELETE FROM `airlines` WHERE id=".$id;
        return $this -> getData($sql,false);
    }

    public function getOneAirline($id){
        $sql = "SELECT * FROM `airlines` WHERE id=".$id;
        return $this -> getData($sql,false);
    }

    public function updateAir($id,$name){
        $sql = "update airlines set name = '{$name}' where id = {$id}";
        return $this -> getData($sql);
    }


}

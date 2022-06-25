<?php

class db{
protected $connection;

public function setconnection(){
    try{
        $con = new mysqli('mysql_db','root','root','library');
        // echo "Done";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}

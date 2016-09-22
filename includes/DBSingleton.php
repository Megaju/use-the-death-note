<?php

class DBSingleton
{
    private static $inst = NULL;
    private $connection = FALSE; //connection to be opened

    //DB connection values
    private $server = NULL; private $usr = NULL; private $psw = NULL; private $name = NULL;

    public static function getInstance()
    {
    //simply stores connections values, without opening connection

        if($bdd == NULL){
           new DBSingleton();
        }
        return $bdd;
    }
    private function __construct(){
     $bdd = new PDO('mysql:host=localhost;dbname=deathnote;charset=utf8', 'root', 'facesimplon');
    }

}

?>
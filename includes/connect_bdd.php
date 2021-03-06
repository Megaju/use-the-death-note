<?php

class DBSingleton
{
    private static $inst = NULL;
    private static $bdd = FALSE; //connection to be opened

    //DB connection values
    private $server = NULL; private $usr = NULL; private $psw = NULL; private $name = NULL;

    public static function getInstance()
    {
    //simply stores connections values, without opening connection
        if(self::$bdd == NULL){
           new DBSingleton();
        }
        return self::$bdd;
    }
    private function __construct(){
     self::$bdd = new PDO('mysql:host=localhost;dbname=DB_DEATHNOTE;charset=utf8', 'root', 'root');
    }
}

$bdd = DBSingleton::getInstance();

?>

<?php
session_start();
class Connect {
    public $pdo;

    function __construct(){

        $host = 'localhost';
        $port = '5432';
        $dbName = 'myolx';
        $dsn = 'pgsql:host=localhost;port=5432;dbname=myolx';
        $userName = 'postgres';
        $password = 'P05tGr3s';

        try{
            $this->pdo = new PDO($dsn, $userName, $password);
            $this->pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $_SESSION['connect']='';

        }catch (PDOException $exception){
            $_SESSION['connect']=$exception->getMessage();
        }
    }

}


?>
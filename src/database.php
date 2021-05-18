<?php
require_once 'const.php';

class Database{

    private $host;
    private $user;
    private $password;
    private $database;

    function __construct(){
        $this->host = HOST;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->database = DATABASE;
    }

    function connect(){
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->database;

            $pdo = new PDO($connection, $this->user, $this->password);
            return $pdo;

        }catch(PDOException $error){
            print_r('Database -> Error connection: ' . $error->getMessage());
        }
    }
}
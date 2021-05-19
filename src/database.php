<?php
require_once 'const.php';

class Database{

    private $conn;

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

            $this->conn = $pdo;

        }catch(PDOException $error){
            print_r('Database -> Error connection: ' . $error->getMessage());
            die();// Para matar la ejecucion de php
        }
    }

    function query($query, $datos = []){
        $data = $this->conn->prepare($query);
        $data->execute($datos);
        return $data->fetchAll();
    }
}
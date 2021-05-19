<?php

include_once "../database.php";


if(isset($_POST['phone'],$_POST['name'],$_POST['last_name'])){
    $db = new Database();
    $db->connect();

    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];

    if($phone > 999999999){
        header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php?message=El+numero+de+telefono+es+muy++largo");
    }elseif (strlen($name) > 15) {
        header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php?message=El+nombre+es+muy++largo");
    }elseif (strlen($last_name) > 15) {
        header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php?message=El+nombre+es+muy++largo");
    }

    $query = "INSERT INTO contacts(phone, name, last_name) VALUES (?, ?, ?)";

    $result = $db->query($query , [$phone, $name, $last_name]);

    if($result){

        header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php");

    }else{

        header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php?message=Ha+ocurrido+un+error");

    }
}
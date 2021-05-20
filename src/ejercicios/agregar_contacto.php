<?php

include_once "../database.php";


if(isset($_POST['phone'],$_POST['name'],$_POST['last_name'])){
    $db = new Database();
    $db->connect();

    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];

    if (strlen($name) > 15) {
        header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php?message=El+nombre+es+muy+largo");
    }elseif (strlen($last_name) > 15) {
        header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php?message=El+apellido+es+muy+largo");
    }
    
    try {
        
        $query = "INSERT INTO contacts(phone, name, last_name) VALUES (?, ?, ?)";
        
        $result = $db->query($query , [$phone, $name, $last_name]);
        
        header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php");
        
    } catch (PDOException $exception) {
        
        // Si ocurre un error en la consulta no se rompe la pagina, solo redirecciona con un mensaje de error
        header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php?message=Ha+ocurrido+un+error");

    }

}else{

    header("Location: " . URL_EJERCICIOS . "obteniendo_datos_bd.php?message=Ha+ocurrido+un+error+con+los+campos+ingresados");

}
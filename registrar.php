<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtName"]) 
    || empty($_POST["txtDocument"]) || empty($_POST["txtMail"]) 
    || empty($_POST["txPhone"]) || empty($_POST["txtAddres"]) 
    || empty($_POST["txtCity"])){
        header('Location: registro_usuario.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $name = $_POST["txtName"];
    $mail = $_POST["txtMail"];
    $document = $_POST["txtDocument"];
    $phone = $_POST["txPhone"];
    $addres = $_POST["txtAddres"];
    $city = $_POST["txtCity"];
    
    $sql = $bd->prepare("INSERT INTO usuario(nombre,documento,telefono,correo,direccion,ciudad) VALUES (?,?,?,?,?,?);");
    $response = $sql->execute([$name,$document,$phone,$mail, $addres, $city]);

    if ($response === TRUE) {
        header('Location: registro_usuario.php?mensaje=registrado');
    } else {
        header('Location: registro_usuario.php?mensaje=error');
        exit();
    }    
?>
<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtName"]) 
    || empty($_POST["txtDocument"]) || empty($_POST["txtMail"]) 
    || empty($_POST["txPhone"]) || empty($_POST["txtAddres"]) 
    || empty($_POST["txtCity"])){
        header('Location: registro_usuario.php?mensaje=vacio');
        exit();
    }

    include_once 'model/conexion.php';
    $name = $_POST["txtName"];
    $mail = $_POST["txtMail"];
    $document = $_POST["txtDocument"];
    $phone = $_POST["txPhone"];
    $addres = $_POST["txtAddres"];
    $city = $_POST["txtCity"];


    //Consulta si el usuario ya se encuentra registrado
    $sqlUser = $bd->prepare("select * from usuario where documento = ?;");
    $sqlUser->execute([$document]);
    $user = $sqlUser->fetch(PDO::FETCH_OBJ);
    if (!empty($user)) {
        header('Location: registro_usuario.php?mensaje=found');
        exit();
    }
    
    $sql = $bd->prepare("INSERT INTO usuario(nombre,documento,telefono,correo,direccion,ciudad, estado) VALUES (?,?,?,?,?,?,?);");
    $response = $sql->execute([$name,$document,$phone,$mail, $addres, $city, 1]);

    if ($response === TRUE) {
        header('Location: registro_usuario.php?mensaje=registrado');
    } else {
        header('Location: registro_usuario.php?mensaje=error');
        exit();
    }    
?>
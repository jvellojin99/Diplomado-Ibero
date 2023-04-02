<?php
    print_r($_POST);
    if(!isset($_POST['id_usuario'])){
        header('Location: registro_usuario.php?mensaje=error');
    }

    include 'model/conexion.php';
    $id = $_POST['id_usuario'];
    $name = $_POST["txtName"];
    $mail = $_POST["txtMail"];
    $document = $_POST["txtDocument"];
    $phone = $_POST["txPhone"];
    $addres = $_POST["txtAddres"];
    $city = $_POST["txtCity"];

    $sql = $bd->prepare("UPDATE usuario SET nombre = ?, documento = ?, telefono = ?, correo = ?, direccion = ?, ciudad = ? where id_usuario = ?;");
    $response = $sql->execute([$name, $document, $phone, $mail, $addres, $city, $id]);

    if ($response === TRUE) {
        header('Location: registro_usuario.php?mensaje=editado');
    } else {
        header('Location: registro_usuario.php?mensaje=error');
        exit();
    }    
?>
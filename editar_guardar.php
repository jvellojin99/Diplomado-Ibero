<?php
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
    $state = $_POST["txtState"];
    if($state == "on")
    {
        $valueState = 1;
    }else 
    {
        $valueState = 0;
    }

    if(empty($name))
    {
        $sql = $bd->prepare("UPDATE usuario SET estado = ? where id_usuario = ?;");
        $response = $sql->execute([1, $id]);
    }else{
        $sql = $bd->prepare("UPDATE usuario SET nombre = ?, telefono = ?, correo = ?, direccion = ?, ciudad = ?, estado = ? where id_usuario = ?;");
        $response = $sql->execute([$name, $phone, $mail, $addres, $city, $valueState, $id]);
    }

    

    if ($response === TRUE) {
        header('Location: registro_usuario.php?mensaje=editado');
    } else {
        header('Location: registro_usuario.php?mensaje=error');
        exit();
    }    
?>
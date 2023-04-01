<?php 
    if(!isset($_GET['id'])){
        header('Location: registro_usuario.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $id = $_GET['id'];

    $sql = $bd->prepare("DELETE FROM usuario where id_usuario = ?;");
    $response = $sql->execute([$id]);

    if ($response === TRUE) {
        header('Location: registro_usuario.php?mensaje=eliminado');
    } else {
        header('Location: registro_usuario.php?mensaje=error');
    }
    
?>
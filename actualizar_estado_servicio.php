<?php 
    if(!isset($_GET['id'])){
        header('Location: listado_servicios.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $id = $_GET['id'];


    //Consulta si el usuario ya se encuentra registrado
    $sqlService = $bd->prepare("select * from servicios where idServicio = ?;");
    $sqlService->execute([$id]);
    $service = $sqlService->fetch(PDO::FETCH_OBJ);

    if($service->estado == 1)
    {
        $estado = 0;
    }else{
        $estado = 1;
    }

    $sql = $bd->prepare("UPDATE servicios SET estado = ? where idServicio = ?;");
    $response = $sql->execute([$estado,$id]);

    if ($response === TRUE) {
        header('Location: listado_servicios.php?mensaje=actualizado');
    } else {
        header('Location: listado_servicios.php?mensaje=error');
    }
    
?>
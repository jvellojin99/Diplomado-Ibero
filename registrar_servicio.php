<?php
//print_r($_POST);
if (
    empty($_POST["oculto"]) || empty($_POST["date"])
    || empty($_POST["time"]) || empty($_POST["document"])
    || empty($_POST["type"]) || empty($_POST["media"])
    || empty($_POST["observation"])
) {
    header('Location: registro_usuario.php?mensaje=vacio');
    exit();
}

include_once 'model/conexion.php';
$date = $_POST["date"];
$time = $_POST["time"];
$document = $_POST["document"];
$type = $_POST["type"];
$media = $_POST["media"];
$observation = $_POST["observation"];


//Consulta si el servicio ya se encuentra registrado
$sqlUser = $bd->prepare("select * from servicios where documento = ?;");
$sqlUser->execute([$document]);
$user = $sqlUser->fetch(PDO::FETCH_OBJ);
if (!empty($user)) {
    header('Location: contactenos.php?mensaje=foundService');
    exit();
}


//Consulta si el usuario ya se encuentra registrado
$sqlUserQuery = $bd->prepare("select * from usuario where documento = ?;");
$sqlUserQuery->execute([$document]);
$userS = $sqlUserQuery->fetch(PDO::FETCH_OBJ);
if (empty($userS)) {
    header('Location: contactenos.php?mensaje=userNotFound');
    exit();
}

$sql = $bd->prepare("INSERT INTO servicios(fecha,hora,documento,tipo,medio,observacion,estado) VALUES (?,?,?,?,?,?,?);");
$response = $sql->execute([$date, $time, $document, $type, $media, $observation, 0]);

if ($response === TRUE) {
    header('Location: contactenos.php?mensaje=registrado');
} else {
    header('Location: contactenos.php?mensaje=error');
    exit();
}

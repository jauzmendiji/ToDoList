<?php

session_start();

$nombreLista = $_POST['nombre'];
$descTarea1 = $_POST['tarea1'];
$descTarea2 = $_POST['tarea2'];
$descTarea3 = $_POST['tarea3'];
$descTarea4 = $_POST['tarea4'];
$descTarea5 = $_POST['tarea5'];
$descTarea6 = $_POST['tarea6'];
$usuariosesion = $_SESSION['usuariosesion'];

$dp = mysql_connect("localhost", "jauzmendiji");
mysql_select_db("c9", $dp);



$sartu="INSERT INTO listas (nombre) VALUES ('$nombreLista')";
mysql_query($sartu);

$result = mysql_query("SELECT idLista FROM listas WHERE nombre = '$nombreLista'");

if(!$result) {
    die("Database query failed: " . mysql_error());
}

while ($row = mysql_fetch_array($result)) {
    $idLista = $row['idLista'];
}

$resultID = mysql_query("SELECT idUser FROM usuarios WHERE nombre = '$usuariosesion'");

if(!$resultID) {
    die("Database query failed: " . mysql_error());
}

while ($row = mysql_fetch_array($resultID)) {
    $idUsuario = $row['idUser'];
}

$userList = "INSERT INTO usuarioLista (idUser, idLista) VALUES ('$idUsuario', '$idLista')";
$tarea1="INSERT INTO tareas (descripcion, idLista) VALUES ('$descTarea1', '$idLista')";
$tarea2="INSERT INTO tareas (descripcion, idLista) VALUES ('$descTarea2', '$idLista')";
$tarea3="INSERT INTO tareas (descripcion, idLista) VALUES ('$descTarea3', '$idLista')";
$tarea4="INSERT INTO tareas (descripcion, idLista) VALUES ('$descTarea4', '$idLista')";
$tarea5="INSERT INTO tareas (descripcion, idLista) VALUES ('$descTarea5', '$idLista')";
$tarea6="INSERT INTO tareas (descripcion, idLista) VALUES ('$descTarea6', '$idLista')";
mysql_query($userList);

if(!empty($descTarea1)){
mysql_query($tarea1);
}
if(!empty($descTarea2)){
mysql_query($tarea2);
}
if(!empty($descTarea3)){
mysql_query($tarea3);
}
if(!empty($descTarea4)){
mysql_query($tarea4);
}
if(!empty($descTarea5)){
mysql_query($tarea5);
}
if(!empty($descTarea6)){
mysql_query($tarea6);
}
mysql_close($dp);
header("location:verListas.php");

?>
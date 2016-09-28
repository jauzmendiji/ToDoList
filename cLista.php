<?php
session_start();

$usuariosesion = $_SESSION['usuariosesion'];
$nombreUsuario = $_POST['nombreUsuario'];
$idLista = $_POST['idLista'];
$dp = mysql_connect("localhost", "jauzmendiji");
mysql_select_db("c9", $dp);

$result = mysql_query("SELECT idUser FROM usuarios WHERE nombre = '$nombreUsuario'");

if(!$result) {
    die("Database query failed: " . mysql_error());
}
while ($row = mysql_fetch_array($result)) {
    $idUsuario = $row['idUser'];
}

$compartir = "INSERT INTO usuarioLista(idUser, idLista) VALUES ('$idUsuario', '$idLista')";

mysql_query($compartir);
mysql_close($dp);
header("location:verListas.php");
?>

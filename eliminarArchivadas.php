<?php
$dp = mysql_connect("localhost", "jauzmendiji");
mysql_select_db("c9", $dp);

$fk0 = "SET foreign_key_checks = 0";
$fk1 = "SET foreign_key_checks = 1";
$ezabatu = "DELETE FROM archivadas WHERE idLista='$_GET[idLista]'";
$ezabatu2 = "DELETE FROM tareas WHERE idLista='$_GET[idLista]'";
$ezabatu3 = "DELETE FROM usuarioLista WHERE idLista='$_GET[idLista]'";

mysql_query($fk0);
mysql_query($ezabatu);
mysql_query($ezabatu2);
mysql_query($ezabatu3);
mysql_query($fk1);
mysql_close($dp);
header("location:listasArchivadas.php");
?>
<?php
$dp = mysql_connect("localhost", "jauzmendiji");
mysql_select_db("c9", $dp);

$fk0 = "SET foreign_key_checks = 0";
$fk1 = "SET foreign_key_checks = 1";
$ezabatu = "DELETE FROM tareas WHERE idTarea='$_GET[idTarea]'";

mysql_query($fk0);
mysql_query($ezabatu);
mysql_query($fk1);
mysql_close($dp);
header("location:verListas.php");
?>
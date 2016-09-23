<?php
$dp = mysql_connect("localhost", "jauzmendiji");
mysql_select_db("c9", $dp);



$archivar = "INSERT INTO archivadas VALUES('$_GET[idLista]', '$_GET[nombre]')";
$fk0 = "SET foreign_key_checks = 0";
$fk1 = "SET foreign_key_checks = 1";
$ezabatu = "DELETE FROM listas WHERE idLista='$_GET[idLista]'";

mysql_query($fk0);
mysql_query($archivar);
mysql_query($ezabatu);
mysql_query($fk1);
mysql_close($dp);
header("location:verListas.php");
?>
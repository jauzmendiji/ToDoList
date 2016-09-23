
<?php
//session_start();
$nombre = $_POST['nombre'];
$dp = mysql_connect("localhost", "jauzmendiji");
mysql_select_db("c9", $dp);
$resultareas = mysql_query("SELECT idTarea FROM tareas WHERE idLista = '$_GET[idLista]'");
$aldatu="UPDATE listas SET nombre='$nombre' WHERE idLista='$_GET[idLista]'";
mysql_query($aldatu);
while ($row = mysql_fetch_array($resultareas)) {
    $i++;
    $desc = $_POST['tarea'.$i];
    $aldatu2="UPDATE tareas SET descripcion='$desc' WHERE idTarea='$row[idTarea]'";
    mysql_query($aldatu2);
}
mysql_close($dp);
header("location:verListas.php");
?>
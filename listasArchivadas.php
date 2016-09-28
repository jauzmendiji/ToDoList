<!DOCTYPE html>
<html>
<head>
 
 <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="/style.css" />
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
 
  <title>Mis Listas</title>
  
</head>

<body>
 
<?php
session_start();
$usuariosesion = $_SESSION['usuariosesion'];
 
$con = 0;
$cont = 0;

$dp = mysql_connect("localhost", "jauzmendiji");
mysql_select_db("c9", $dp);


//Muestra el número de listas mediante un bucle que las recorre todas
$sql = "SELECT * FROM archivadas WHERE idLista in (SELECT idLista FROM usuarioLista where idUser in ( SELECT idUser FROM usuarios WHERE nombre = '$usuariosesion'))";
/*
$archivadas = mysql_query($sql);
while ($row = mysql_fetch_assoc($archivadas)) {
 $con = $con+1;
};
echo "Listas archivadas: (En total: $con listas)<hr/>";
*/
//hace los select de las listas y los guarda en variables
$archivadas = mysql_query($sql);
while ($row = mysql_fetch_assoc($archivadas)) {
   echo "<table id='tablaArchivadas' class='table table-striped'";
   echo "<tr><th><h3 class='text-uppercase'>$row[nombreLista]</h3></td><td><h2>$row[idLista]</h2></td><td><a href='eliminarArchivadas.php?idLista=$row[idLista]'><button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button></a>
   <a class='pull-right' href='desarchivarLista.php?nombreLista=$row[nombreLista]&idLista=$row[idLista]'><img width='30' height='30' src='img/dearchive.png'></a></th></tr>";
}
 echo "</table><br/>";

mysql_close($dp);
?>

</body>
</html>
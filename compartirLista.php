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
        
        <title>Compartir listas</title>
    </head>
    <body style="padding-top:20px; padding-left:20px;">
        
        <h3 class="text-uppercase">Compartir Lista</h3>
        
        <form enctype='multipart/form-data' action='cLista.php?nombreLista=nomLista&nombreUsuario=nombreUsuario' method='post'>
    
        <input class="form-control-in" type='number' name='idLista' placeholder='ID de la lista'><br><br>
        <input class="form-control-in" type='text' name='nombreUsuario' placeholder='Nombre del usuario'><br><br>
        
        <input class="btn btn-success" type='submit' value='Compartir'/><br><br>
        </form>

        <a href="verListas.php"><img width="30" height="30" src="img/back.png"></a>
    </body>
</html>




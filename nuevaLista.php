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

    <title>Insertar lista</title>
    
</head>

<body style='padding-left:20px; padding-top:20px;'>
    
        <script>
        var cont = 0;
            function nuevaTarea(){
                cont++;
                if(cont<=6){
                    document.getElementById("tareas").innerHTML += "<input class='form-control-in' type='text' rows='3' cols='25' name='tarea" +cont+"' placeholder='Tarea " +cont+"'/><br><br>";
                } else{
                    alert("Has llegado al limite de tareas");
                } 
                document.getElementById("contador").innerHTML = parseInt(cont);
                    
                }
        </script>
        
        <h3 class="text-uppercase">Inserte la lista</h3>
        
        <form enctype='multipart/form-data' action='nLista.php' method='post'>
            
            <input class="form-control-in" type='text' name='nombre' value=''  placeholder="Nombre de la lista">
            <input class="btn btn-default" type="button" name="boton" value="Añadir tarea" onclick="nuevaTarea()"/>
            
            <div id="tareas">
            </div>
            
            <p hidden name="cont" id="contador"></p>
        
            <input class="btn btn-success" type='submit' value='Crear Lista'/><br/>
        
        </form>

        <a href="verListas.php"><img width="50" height="50" src="img/back.png"></a>
    </body>
</html>
<html>
    <head>
        <title>Nuevo Usuario</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <style>
             body{
                background: plum;
            }
            </style>
            
    
       <center> <h1 style="background-color:mistyrose;">Ingresar Nuevo Usuario</h1></center>
        
        <center>
        <form action="nuevo_respuesta.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre"><br><br>
            
            <div>Correo</div>
            <input type="text" name="correo"><br><br>
            
            <div>Curso</div>
            <input type="text" name="curso"><br><br>
            
            <div>Contraseña</div>
            <input type="text" name="password"><br><br>
            
            <button>Guardar Usuario</button>
            
        </form>
        </center>
    
    <script>
        //alert("Hola");
    </script>
    </body>

</html>
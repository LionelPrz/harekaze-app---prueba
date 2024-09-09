<?php
    if($_POST){
        print_r($_POST);
        // metodos para obtener informacion concreta de los archivos subidos necesita = nombre y caracteristica para ser usado
        print_r($_FILES['archivo']['name']);
        // metodo para mover archivos subidos a rutas especificas
        move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos</title>
</head>
<body>
    <form action="subida-archivos.php" method="post" enctype="multipart/form-data">
        Archivo:
        <input type="file" name="archivo" id="">
        <br> 
        <br>
        <input type="submit" name="enviar" value="Enviar Informacion">
        <br>
    </form>
</body>
</html>
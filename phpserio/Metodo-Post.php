<?php
    $nombre=$_POST['txtNombre'];

    echo $nombre;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Que onda master

    <form action="Metodo-Post.php" method="post">
    Nombre : 
    <input type="text" name="txtNombre" id="">
    <br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>
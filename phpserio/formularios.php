<?php
// Declaracion de variables para su posterior uso
    $txtNombre="";
    $rdgLenguaje="";
    $chkphp="";
    $chkjsc="";
    $chkmysql="";
    $lsAnime="";

    if($_POST){
        // validacion de tipo text
        $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
        // validacion de tipo radio
        $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
        // validacion de tipo checkbox
        $chkphp=(isset($_POST['chkphp'])=="si" )?"checked":"";
        $chkjsc=(isset($_POST['chkjsc'])=="si")?"checked":"";
        $chkmysql=(isset($_POST['chkmysql'])=="si")?"checked":"";
        // validacion de tipo select
        $lsAnime=(isset($_POST['lsAnime'])?$_POST['lsAnime']:"");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
        <!-- Eta vaina eh seria goku cosa del diablo -->
        <?php if($_POST){ ?>
        <strong> Hola </strong>: <?php echo $txtNombre;?>
        <?php } ?>
        <!-- watafac y este quien poronga es ? -->
        <form action="formularios.php" method="post">
        
        Nombre: <br>
        <input type="text" name="txtNombre" id="">
        <br>
        Why a you gay?<br>
        <!-- enviando informacion y verificando la misma mediante los imputs -->
        <br> si : <input type="radio"  <?php echo ($rdgLenguaje=="si")?"checked":"" ?> name="lenguaje"  value="si" id=""><br>
        <br> sas : <input type="radio" <?php echo ($rdgLenguaje=="sas")?"checked":"" ?>  name="lenguaje" value="sas" id=""><br>
        <br> lel : <input type="radio" <?php echo ($rdgLenguaje=="lel")?"checked":"" ?>  name="lenguaje" value="lel" id=""><br>
        <br>
        Estas aprendiendo... <br>
        <br> php : <input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si" id="">
        <br> javascript : <input type="checkbox" <?php echo $chkjsc;?> name="chkjsc" value="si" id="">
        <br> mysql : <input type="checkbox" <?php echo $chkmysql;?> name="chkmysql" value="si" id="">
        <br>
        Que anime miras prieto-kun?
        <br>
        <select name="lsAnime" id="" >

            <option value="Nada">[Ninguna Serie]</option>
            <option value="BlueMermaid" <?php echo($lsAnime=="BlueMermaid")?"selected":""; ?> >[High School Fleet]</option>
            <option value="Kimetsu" <?php echo($lsAnime=="Kimetsu")?"selected":""; ?> >[Kimetsu no Yaiba]</option>
            <option value="Monster" <?php echo($lsAnime=="Monster")?"selected":""; ?> >[Monster]</option>

        </select>
        <br>
        <br>
        <input type="submit" value="Enviar Informacion">
        <br>
    </form>
</body>
</html>
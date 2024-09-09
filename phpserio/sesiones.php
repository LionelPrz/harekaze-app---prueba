<?php
    //Inicio de las sesiones
    session_start();

    //variable de tipo session
    $_SESSION["usuario"]="pingo";
    $_SESSION["estado"]="logueado";

    echo "Sesion Iniciada".":<br/>";

    echo "Usuario : ".$_SESSION["usuario"]."<br/> estatus : ".$_SESSION["estado"];


?>
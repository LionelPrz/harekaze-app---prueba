<?php
    $servidor="localhost";//127.0.0.1 normalmente caso P = 192.168.77.108 por wsl
    $usuario="lion-sama";
    $clave = "tigerh1";


    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$clave);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //Insertando datos desde PHP a la BD usando los metodos propios de PDO
        // $sql ="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
        //     $conexion->exec($sql);
        
        //Seleccionando datos de la BD desde PHP usando los metodos propios de PDO
        $sql ="SELECT * FROM `fotos`";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        $resultado = $sentencia->fetchALL();

        print_r($resultado);



        echo "Conexion establecida";
    }catch(PDOException $error){
        echo "Conexion erronea".$error;

    }
?>
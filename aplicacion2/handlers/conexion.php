<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=login', 'lion-sama', 'tigerh1');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error en la conexión: ' . $e->getMessage());
}

?>


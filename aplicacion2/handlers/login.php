<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'conexion.php';
// require 'token_session.php'; // Asegúrate de que esta conexión esté correcta

// $storedToken = $_SESSION['csrf_token'] ?? '';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $receivedToken = $_POST['csrf_token'] ?? '';

//     if ($receivedToken !== $storedToken) {
//         echo 'Token CSRF inválido';
//         exit;
//     }
$username = trim($_POST['username'] ?? '');  // Arreglar nombre de variable y prevenir error
$password = trim($_POST['password'] ?? '');  // Arreglar nombre de variable y prevenir error

    if (empty($username) || empty($password)) {
        // echo 'Nombre de usuario y contraseña son requeridos';
        echo json_encode('Nombre de usuario y clave son requeridos');
        exit;
    }
    $sql = "SELECT `nombre_usuario`, `clave`, `id_rol` FROM `usuarios` WHERE `nombre_usuario` = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['clave'])) {
        $_SESSION['username'] = $user['nombre_usuario'];
        $_SESSION['role'] = $user['id_rol'];

        if ($user['id_rol'] == '1') {
            echo json_encode(array('success'=> 1));
            exit;
        } else {
            echo json_encode(array('success'=> 2));
            exit;
        }
    } else {
        echo json_encode('Nombre de usuario o clave incorrectos');
        exit;
    }

   
?>

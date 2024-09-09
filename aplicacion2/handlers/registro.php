<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require 'conexion.php';  
require 'token_session.php';

$storedToken = $_SESSION['csrf_token'] ?? '';
$url_login = 'https://pruebaej.com/aplicacion2/public/login.html';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $receivedToken = $_POST['csrf_token'] ?? '';

    if ($receivedToken !== $storedToken) {
        echo 'Invalid CSRF token.';
        exit;
    }

    // Capturar datos del formulario
    $username = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $date_crt = date('Y-m-d H:i:s');
    $id_rol = 2;

    // Validaciones
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo 'Todos los campos son requeridos';
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Formato de correo electrónico no válido';
        exit;
    }
    if ($password !== $confirm_password) {
        echo 'Las contraseñas no coinciden';
        exit;
    }

    // Verificar correos repetidos
        $sql_check = "SELECT * FROM usuarios WHERE email = :email";
        $stmt_check = $pdo->prepare($sql_check);
        $stmt_check->bindParam(':email', $email);
        $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        echo 'El correo electrónico ya está registrado.';
        exit;
    }

    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insertar en la base de datos
    $sql = "INSERT INTO usuarios(`usuario_id`, `nombre_usuario`, `clave`, `email`, `fecha`,`id_rol`) VALUES (NULL, :username, :password, :email, :fecha, :id_rol)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':fecha', $date_crt);
    $stmt->bindParam(':id_rol',$id_rol);

    if ($stmt->execute()) {
        echo 'success';
        unset($_SESSION['csrf_token']);
    } else {
        echo 'Hubo un error al registrar el usuario.';
    }
} else {
    echo 'Método de solicitud no válido.';
}
?>

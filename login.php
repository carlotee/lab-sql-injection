<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "injectionsql");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios 
            WHERE (usuario = '$login' OR email = '$login') 
            AND password = '$password'";

    $resultado = $conexion->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();


        $_SESSION['id'] = $usuario['id'];
        $_SESSION['usuario'] = $usuario['usuario'];

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "❌ Datos incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login SQL Injection</title>
</head>
<body>

<h2>Login</h2>

<?php if (isset($error)) echo "<p>$error</p>"; ?>

<form method="POST">
    Usuario o Email: <input type="text" name="login" required><br><br>
    Contraseña: <input type="password" name="password" required><br><br>
    <button type="submit">Ingresar</button>
</form>

</body>
</html>

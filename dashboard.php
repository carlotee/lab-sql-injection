<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h1>Bienvenido <?php echo $_SESSION['usuario']; ?> 👋</h1>

<p>Estás dentro del dashboard</p>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>
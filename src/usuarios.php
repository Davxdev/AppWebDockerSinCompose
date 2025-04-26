<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Usamos prepared statements para evitar inyección SQL
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $email);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>

<h1>Agregar usuario</h1>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit">Guardar</button>
</form>

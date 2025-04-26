<?php
include 'db.php';

$resultado = $conexion->query("SELECT * FROM usuarios");
?>

<h1>Usuarios</h1>
<ul>
<?php while ($fila = $resultado->fetch_assoc()): ?>
    <li><?= $fila['nombre'] ?> (<?= $fila['email'] ?>)</li>
<?php endwhile; ?>
</ul>

<a href="usuarios.php">Agregar usuario</a>
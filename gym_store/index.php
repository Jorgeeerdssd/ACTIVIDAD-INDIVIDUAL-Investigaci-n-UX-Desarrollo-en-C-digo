<?php
session_start();
include("db.php");
$resultado = $conn->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GYMPOWER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <h1>💪 Tienda de Suplementos & Gym</h1>

    <div class="auth-buttons">
        <?php if(!isset($_SESSION['usuario_id'])): ?>
            <a href="login.php" class="btn-header">Iniciar sesión</a>
            <a href="registro.php" class="btn-header btn-outline">Registrarse</a>
        <?php else: ?>
            <span class="bienvenida">
                Bienvenido, <?php echo $_SESSION['nombre']; ?>
            </span>
            <a href="perfil.php" class="btn-header">Mi perfil</a>
            <a href="carrito.php" class="btn-header">🛒 Carrito</a>
            <a href="logout.php" class="btn-header btn-outline">Salir</a>
        <?php endif; ?>
    </div>
</header>


<div class="productos">
<?php while($row = $resultado->fetch_assoc()): ?>
    <div class="producto">
        <img src="img/<?php echo $row['imagen']; ?>" alt="<?php echo $row['nombre']; ?>">
        <h2><?php echo $row['nombre']; ?></h2>
        <p><?php echo $row['descripcion']; ?></p>
        <span>$<?php echo $row['precio']; ?></span>

        <?php if(isset($_SESSION['usuario_id'])): ?>
            <a href="agregar_carrito.php?id=<?php echo $row['id']; ?>" class="btn">
                Agregar al carrito
            </a>
        <?php else: ?>
            <a href="login.php" class="btn">
                Inicia sesión para comprar
            </a>
        <?php endif; ?>
    </div>
<?php endwhile; ?>
</div>


</body>
</html>

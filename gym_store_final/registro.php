<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <form action="guardar_usuario.php" method="POST" class="formulario">
        <h2>Crear cuenta</h2>

        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido_paterno" placeholder="Apellido paterno" required>
        <input type="text" name="apellido_materno" placeholder="Apellido materno">

        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="tel" name="telefono" placeholder="Teléfono" required>

        <input type="password" name="password" placeholder="Contraseña" required>

        <button type="submit">Registrarse</button>

        <p style="text-align:center;margin-top:10px;">
            ¿Ya tienes cuenta?
            <a href="login.php" class="btn-outline">Inicia sesión</a>
        </p>
    </form>
</div>

</body>
</html>

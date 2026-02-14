<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <form action="validar_login.php" method="POST" class="formulario">
        <h2>Iniciar sesión</h2>

        <input type="email" name="email" placeholder="Correo" required>
        <input type="password" name="password" placeholder="Contraseña" required>

        <button type="submit">Entrar</button>
    </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Registro de Usuario 💪</h1>
</header>

<form action="guardar_usuario.php" method="POST" class="formulario">

    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="apellido_paterno" placeholder="Apellido Paterno" required>
    <input type="text" name="apellido_materno" placeholder="Apellido Materno" required>

    <input type="number" name="edad" placeholder="Edad" required>
    <input type="date" name="fecha_nacimiento" required>

    <select name="genero">
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
    </select>

    <input type="text" name="telefono" placeholder="Teléfono" required>
    <input type="email" name="email" placeholder="Correo electrónico" required>

    <input type="password" name="password" placeholder="Contraseña" required>

    <input type="text" name="direccion" placeholder="Dirección">
    <input type="text" name="ciudad" placeholder="Ciudad">
    <input type="text" name="estado" placeholder="Estado">
    <input type="text" name="codigo_postal" placeholder="Código Postal">
    <input type="text" name="pais" placeholder="País">

    <input type="number" step="0.01" name="peso" placeholder="Peso (kg)">
    <input type="number" step="0.01" name="estatura" placeholder="Estatura (m)">

    <input type="text" name="objetivo" placeholder="Objetivo fitness">
    
    <select name="nivel_actividad">
        <option>Sedentario</option>
        <option>Moderado</option>
        <option>Activo</option>
        <option>Atleta</option>
    </select>

    <button type="submit">Registrarse</button>
</form>

</body>
</html>

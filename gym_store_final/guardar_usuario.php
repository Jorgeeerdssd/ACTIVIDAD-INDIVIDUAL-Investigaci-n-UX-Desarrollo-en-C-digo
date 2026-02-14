<?php
include("db.php");

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (
    nombre, apellido_paterno, apellido_materno, edad, fecha_nacimiento,
    genero, telefono, email, password, direccion, ciudad, estado,
    codigo_postal, pais, peso, estatura, objetivo, nivel_actividad
) VALUES (
    '{$_POST['nombre']}',
    '{$_POST['apellido_paterno']}',
    '{$_POST['apellido_materno']}',
    '{$_POST['edad']}',
    '{$_POST['fecha_nacimiento']}',
    '{$_POST['genero']}',
    '{$_POST['telefono']}',
    '{$_POST['email']}',
    '$password',
    '{$_POST['direccion']}',
    '{$_POST['ciudad']}',
    '{$_POST['estado']}',
    '{$_POST['codigo_postal']}',
    '{$_POST['pais']}',
    '{$_POST['peso']}',
    '{$_POST['estatura']}',
    '{$_POST['objetivo']}',
    '{$_POST['nivel_actividad']}'
)";

if ($conn->query($sql)) {
    echo "✅ Usuario registrado correctamente <br><a href='index.php'>Ir a la tienda</a>";
} else {
    echo "❌ Error: " . $conn->error;
}
?>

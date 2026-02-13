<?php
session_start();
include("db.php");

$email = $_POST['email'];
$pass = $_POST['password'];

$q = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
$q->bind_param("s",$email);
$q->execute();
$res = $q->get_result();

if($u = $res->fetch_assoc()){
    if(password_verify($pass,$u['password'])){
        $_SESSION['usuario_id'] = $u['id'];
        $_SESSION['nombre'] = $u['nombre'];
        header("Location: index.php");
    } else echo "Contraseña incorrecta";
} else echo "Usuario no encontrado";


<?php
session_start();
include("db.php");

$uid = $_SESSION['usuario_id'];
$pid = $_GET['id'];

$conn->query("INSERT INTO carrito (usuario_id, producto_id) VALUES ($uid,$pid)");
header("Location: carrito.php");

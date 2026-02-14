<?php
session_start();
include("db.php");

$id = $_SESSION['usuario_id'];

$q = $conn->query("
SELECT p.nombre, p.precio, c.cantidad
FROM carrito c
JOIN productos p ON c.producto_id = p.id
WHERE c.usuario_id = $id
");

$total = 0;
while($r = $q->fetch_assoc()){
    echo $r['nombre']." - $".$r['precio']."<br>";
    $total += $r['precio'];
}
echo "<h3>Total: $$total</h3>";

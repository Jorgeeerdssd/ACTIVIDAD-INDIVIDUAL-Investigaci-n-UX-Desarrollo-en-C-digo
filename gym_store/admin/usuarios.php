<?php
include("../db.php");
$res = $conn->query("SELECT nombre,email FROM usuarios");
while($u = $res->fetch_assoc()){
    echo $u['nombre']." - ".$u['email']."<br>";
}

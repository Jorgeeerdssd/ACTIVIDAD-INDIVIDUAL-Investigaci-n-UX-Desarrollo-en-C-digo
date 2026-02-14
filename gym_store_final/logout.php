<?php
session_start();

/* Vaciar variables de sesión */
$_SESSION = [];

/* Destruir la sesión */
session_destroy();

/* Redirigir al inicio */
header("Location: index.php");
exit();

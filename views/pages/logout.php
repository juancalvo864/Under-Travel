<?php
session_start();

// Limpio las variables de session
$_SESSION = array();

// Destruyo la session
session_destroy();

// Elimino la cookie de sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Redirecciono a home
echo '<script>window.location = "index.php?route=home";</script>';
?>
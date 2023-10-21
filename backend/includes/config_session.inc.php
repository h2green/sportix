<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

// Colocamos los parametros de la cookie de sesion
session_set_cookie_params([
    'lifetime' => 60 * 60 * 24,         // La cookie va a expirar despues de un dia
    'path' => '/',                      // La cookie va a estar disponible en todas las paginas
    'domain' => $_SERVER['HTTP_HOST'],  // La cookie va a estar disponible en el dominio
    'secure' => true,                   // La cookie solo se va a enviar por el protocolo HTTPS
    'httponly' => true,                 // La cookie solo se va a enviar por HTTP
    'samesite' => 'Strict'              // La cookie solo se va a enviar con peticiones del mismo sitio
]);

session_start();

/**
 * Si el usuario ha iniciado sesión, se regenera la sesión cada hora para evitar ataques de sesión.
 * Si el usuario no ha iniciado sesión, se regenera la sesión cada vez que se carga la página.
 */
if (isset($_SESSION["user_id"])) {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id_loggedin();
    } else {
        $interval = 60 * 60 * 1;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id_loggedin();
        }
    }
} else {
    if (!isset($_SESSION["last_regeneration"])) {
        session_regenerate_id();
        $_SESSION["last_regeneration"] = time();
    } else {
        $interval = 60 * 60 * 1;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            session_regenerate_id();
            $_SESSION["last_regeneration"] = time();
        }
    }
}

/**
 * Regenera la sesión del usuario y actualiza el ID de sesión en la base de datos.
 */
function regenerate_session_id_loggedin() 
{
    $userId = $_SESSION["user_id"];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $userId;
    session_id($sessionId);

    $_SESSION["last_regeneration"] = time();
}

/**
 * Regenera la sesión del usuario y actualiza la última vez que se regeneró la sesión.
 */
function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}
?>
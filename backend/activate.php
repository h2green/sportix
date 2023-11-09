<?php
include 'connection.php';

if (isset($_GET['email'], $_GET['token'])) {
    if ($stmt = $conn->prepare('SELECT * FROM users WHERE email = ? AND active = ?')) {
        $stmt->bind_param('ss', $_GET['email'], $_GET['token']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            if ($stmt = $conn->prepare('UPDATE users SET active = ? WHERE email = ? AND active = ?')) {
                $newActive = '1';
                $stmt->bind_param('sss', $newActive, $_GET['email'], $_GET['token']);
                $stmt->execute();

                echo 'Tu cuenta ha sido activada, ahora puedes iniciar sesión!';
            }
        } else {
            echo 'La URL no es válida o ya has active tu cuenta.';
        }
    }
}

?>
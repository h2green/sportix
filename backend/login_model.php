<?php
declare (strict_types = 1);

/**
 * Función que obtiene un usuario de la base de datos a partir de su nombre de usuario.
 *
 * @param mysqli $mysqli Objeto mysqli que representa la conexión a la base de datos.
 * @param string $username Nombre de usuario del usuario a obtener.
 * @return array|null Retorna un array asociativo con los datos del usuario si se encuentra en la base de datos, o null si no se encuentra.
 */
function get_user(mysqli $mysqli, string $username) 
{
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $user;
}


?>
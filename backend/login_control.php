<?php
declare(strict_types=1);

/**
 * Verifica si el nombre de usuario y la contraseña están vacíos.
 *
 * @param string $username El nombre de usuario.
 * @param string $password La contraseña.
 * @return bool Retorna verdadero si el nombre de usuario o la contraseña están vacíos, de lo contrario retorna falso.
 */
function is_input_empty(string $username, string $password)
{
    if (empty($username) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el resultado de la consulta de la base de datos es incorrecto.
 *
 * @param bool|array $result El resultado de la consulta de la base de datos.
 * @return bool Retorna verdadero si el resultado es incorrecto, de lo contrario retorna falso.
 */
function username_exists($result)
{
    if ($result) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si la contraseña es incorrecta.
 *
 * @param string $password La contraseña ingresada por el usuario.
 * @param string $hashPassword La contraseña almacenada en la base de datos.
 * @return bool Retorna verdadero si la contraseña es incorrecta, de lo contrario retorna falso.
 */
function is_password_wrong(string $password, string $hashPassword)
{
    if (!password_verify($password, $hashPassword)) {
        return true;
    } else {
        return false;
    }
}

?>
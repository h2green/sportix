<?php

declare (strict_types = 1);
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
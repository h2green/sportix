<?php

declare(strict_types=1);

function get_username(mysqli $mysqli, string $username) 
{
    $user_check_query = mysqli_query($mysqli, "SELECT username FROM users WHERE username='{$username}'");
    $row = mysqli_num_rows($user_check_query);

    return $row;
}

function get_email(mysqli $mysqli, string $email) 
{
    $email_check_query = mysqli_query($mysqli, "SELECT email FROM users WHERE email='{$email}'");
    $row = mysqli_num_rows($email_check_query);

    return $row;
}

function set_user(mysqli $mysqli, string $username, string $password, string $email)
{
    $query = "INSERT INTO users (username, password, email, token, active) VALUES (?, ?, ?, ?, 0)";
    $stmt = mysqli_stmt_init($mysqli);
    $stmt = mysqli_prepare($mysqli, $query);

    $options = [
        'cost' => 12,
        'salt' => bin2hex(random_bytes(11))
    ];
    $password = password_hash($password, PASSWORD_DEFAULT, $options);
    $token = md5(rand().time());
    mysqli_stmt_bind_param($stmt, "ssss", $username, $password, $email, $token);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
?>
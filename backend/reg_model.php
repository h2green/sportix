<?php

declare(strict_types=1);

function get_username(mysqli $mysqli, string $username) 
{
    $query = "SELECT username FROM users WHERE username = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['username'];
}

function get_email(mysqli $mysqli, string $email) 
{
    $email_check_query = mysqli_query($mysqli, "SELECT email FROM users WHERE email='{$email}'");
    $row = mysqli_num_rows($email_check_query);

    return $row;
}

?>
<?php
declare(strict_types=1);
require_once 'reg_model.php';
function is_input_empty($username, $password, $cpassword, $email) 
{
    if (empty($username) || empty($password) || empty($cpassword) || empty($email)) {
        return true;
    } else {
        return false;
    }
}

function is_email_invalid($email) 
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_username_taken(mysqli $mysqli, string $username) 
{
    if (get_username($mysqli, $username)) {
        return true;
    } else {
        return false;
    }
}

function is_email_registered(mysqli $mysqli, string $email)
{
    if (get_email($mysqli, $email)) {
        return true;
    } else {
        return false;
    }
}
?>
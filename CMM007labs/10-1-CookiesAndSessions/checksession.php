<?php
/**
 * Created by PhpStorm.
 * User: 1412632
 * Date: 11/04/2016
 * Time: 10:32
 */


$username = $_POST["username"];
$password = $_POST["password"];

if ($username=="Mike" && $password=="mysecretpassword")
{
    session_start();
    $_SESSION['access_level'] = "standarduser";
}

header('Location: sessionhomepage.php');

?>
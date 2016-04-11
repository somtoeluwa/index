<?php
/**
 * Created by PhpStorm.
 * User: 1412632
 * Date: 11/04/2016
 * Time: 09:37
 */




$username = $_POST["username"];
$password = $_POST["password"];

if ($username=="Mike" && $password=="mysecretpassword")
{
    setcookie('access_level','standarduser');
}

header('Location: homepage.php');

?>
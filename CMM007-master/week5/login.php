<?php
/**
 * Created by PhpStorm.
 * User: 1412632
 * Date: 14/03/2016
 * Time: 10:49
 */

include("dbconnect.php");


    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both Fields are required.";
    }else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

    }
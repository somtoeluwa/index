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


    $sql = "SELECT uid FROM users WHERE username = '$username'
            and
            password = '$password'";
    $result = mysqli_query($db,$sql);

    if (mysqli_num_rows($result) == 1)
    {
    header("loaction: home.php");
    }else
    {
    echo "Incorrect username or password";
    }

}

?>
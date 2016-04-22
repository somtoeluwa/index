

<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 4/22/2016
 * Time: 3:56 AM
 */

include 'dbconnect.php';

if(empty($_POST["username"]) && empty($_POST["password"])){

    echo "<p> Both fields are required </p>";
}

else{
    $username =$_POST["username"];
    $password =$_POST["password"];

    $sql = "SELECT uid FROM users WHERE username = '$username' AND password = '$password' ";

    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result == 1)){

        header('location: home.php ');

    }
    else {

        echo "<p>worng login details</p>";
}
}
?>


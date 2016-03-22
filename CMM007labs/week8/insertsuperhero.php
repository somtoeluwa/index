<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 3/22/2016
 * Time: 10:02 AM
 */

include "dbconnect.php";

$forename = $_POST["forename"];
$surname = $_POST["surname"];
$gender = $_POST["gender"];
$power = $_POST["power"];



    $sql_query = "INSERT INTO superheros (superheroID,firstname,lastname,mainSuperpower)
              VALUES ('$forename','$surname','$gender','$power')";
    $result = $db->query($sql_query);

        header('Location: index.html');

?>
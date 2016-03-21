<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 3/21/2016
 * Time: 2:04 PM
 */
include "dbconnect.php";

$sql =  "SELECT * FROM marvelmovies";

$result=mysqli_query($db,$sql);
while($row = $result->fetch_array())
{
    $movieTitle = $row['title'];
    $yearReleased = $row['yearReleased'];
    $productionStudio = $row['productionStudio'];
    $notes = $row['notes'];

    echo "<p>" . $movieTitle ."</p>";
    echo "<br>";
    echo "<p>" . $yearReleased ."</p>";
    echo "<p>" . $productionStudio ."</p>";
    echo "<p>" . $notes ."</p>";
}




?>
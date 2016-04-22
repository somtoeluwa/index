<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 3/22/2016
 * Time: 10:02 AM
 */

include "dbconnect.php";

$superheroID = $_POST["superheroes"];
$villanFought = $_POST["villanFought"];

$sql_query = "INSERT INTO battles (superheroID,villanFought)
              VALUES ('$superheroID','$villanFought')";
$result = $db->query($sql_query);

header('Location: index.php');

?>
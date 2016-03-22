<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 3/22/2016
 * Time: 10:03 AM
 */


include 'dbconnect.php';


$sql = "SELECT * FROM superherobattles";
$result = $db->query($sql);

while($row = $result->fetch_array()){
    echo "<p>" . $row['superheroID'] . "</p>";
    echo "<p>" . $row['firstName'] . "</p>";
    echo "<p>" . $row['lastname'] . "</p>";
    echo "<p>" . $row['mainSuperPower'] . "</p>";
    echo "<p>" . $row['villanFought'] . "</p>";
}
$result->close();
$db->close();

?>
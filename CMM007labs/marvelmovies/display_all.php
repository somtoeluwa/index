


<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 3/21/2016
 * Time: 1:34 PM
 */
include "dbconnect.php";

$sql =  "SELECT * FROM marvelmovies WHERE productionStudio = 'Marvel Studios'";

$result=mysqli_query($db,$sql);
while($row = $result->fetch_array())
{    /* the code inside here is repeated for each item in the array
    You can do things like the following to print out each movie title */
    $movieTitle = $row['title'];
    $productionStudio = $row['productionStudio'];

echo "<p>" . $movieTitle . $productionStudio. "</p>";
}




?>
<?php
/**
 * Created by PhpStorm.
 * User: 1412632
 * Date: 07/03/2016
 * Time: 10:51
 */

/*$wantedgood = "sausage";

switch($wantedgood){

    case "mugs":
        echo "You have to be 18 to buy ". $wantedgood;
        break;
    case "sausage":
        echo "You have to be 16 to buy ". $wantedgood;
        break;
}

$provisionedActivities = array(	"Specs","Drugs","Rock and Roll");
    foreach($provisionedActivities as $x){
        print "<p>$x</p>";
    }

$provisionedActivities[1]="hugs";

unset($provisionedActivities[2]);

echo $provisionedActivities[2];
*/

$goods = array(	"Specs","Mugs","sausage Rolls");
$x;
$y;

for ($i = 1;$i< 30; $i++){
   echo "On the ". $i. " of the month " . $goods[$i]. " are available";
    echo "<br>";

}



?>
<?php
/**
 * Created by PhpStorm.
 * User: 1412632
 * Date: 07/03/2016
 * Time: 10:51
 */

$wantedgood = "mugs";

switch($wantedgood){

    case "mugs":
        echo "You have to be 18 to buy ". $wantedgood;
        break;
    case "sausage":
        echo "You have to be 16 to buy ". $wantedgood;
        break;
}

?>
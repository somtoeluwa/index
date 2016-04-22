<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 4/22/2016
 * Time: 3:07 AM
 */


$myage = 17;
$specs = "Specs";
$mugs = "mugs";
$sausage = "Sausage rolls";


if ($myage >= 21 ){

    echo "<p> You can buy ".$sausage.", ". $mugs.", ". $specs."</p>";
}
elseif($myage >= 18 && $myage <21){

    echo "<p> You can buy ".$specs.", ". $mugs."</p>";
}
elseif( $myage< 18 && $myage >= 16){

    echo "<p> You can buy ".$specs."</p>";
}
else {
    echo "<p> You cant buy anything here </p>";
}
<?php
/**
 * Created by PhpStorm.
 * User: 1412632
 * Date: 11/04/2016
 * Time: 09:47
 */


session_start();
$accesslevel = $_COOKIE['access_level'];

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accessLevel) {
    if ($accessLevel == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($accessLevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: 1412632
 * Date: 11/04/2016
 * Time: 10:35
 */


session_start();

    if (isset($_SESSION['access_level'])) {
        echo "<p>You are currently logged in as a standard user</p>";
    }


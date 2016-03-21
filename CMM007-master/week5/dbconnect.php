<?php
/**
 * Created by PhpStorm.
 * User: 1412632
 * Date: 14/03/2016
 * Time: 10:46
 */

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b3694618fbe651');
define('DB_PASSWORD', '6845c6ec');
define('DB_DATABASE', 'lab7db');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
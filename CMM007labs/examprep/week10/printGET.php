<!DOCTYPE html>
<html lang="en">
<head>
    <title>selfreference lab</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // execute if requested using HTTP GET Method
        ?>
        <ul>
            <li><?php echo $_GET["query"] ?></li>
            <li><?php echo $_GET["type"] ?></li>

        </ul>

<?
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // execute if requested using HTTP POST Method
    }
    else {
    // this is impossible
    }
?>
</body>
</html>
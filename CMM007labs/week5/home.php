<?php
include ("login.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>

<body>
  <p>Curently logged in:<?php
      echo $_POST["username"];
        ?> </p>


<h1>Hello</h1>
</body>
</html>
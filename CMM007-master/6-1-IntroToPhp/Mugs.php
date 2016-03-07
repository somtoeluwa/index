
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mugs</title>
</head>
<body>

 <form action="Mugs.php" method="post">
     <label>Name:</label>
     <input type="text" name="name" value=""/>

     <label>Age:</label>
     <input type="number" name="age" value=""/>

     <input type="submit" value="Submit" name="submit"/>

 </form>

<?php
$myName = $_POST['name'];
$myage = $_POST['age'];

if ($myage >= 21) {
    echo "<br>";
    echo $myName . " " . "you can buy sausage, mugs and specs";
}
if ($myage >=18  ){
    echo "<br>";
    echo $myName. " ". "you can buy mugs and specs";
}

if ($myage >= 16){
    echo $myName. " ". "you can only buy specs";
}
else echo "GO HOME!";






?>
</body>

</html>

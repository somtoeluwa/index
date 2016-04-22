
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forloop</title>
</head>
<body>
    <h3>Product Availability Calender</h3>
<?php

$product;
$month = 30;
    if ($month% 4 ==0){
        $product= "sausages";
    }

    for ($i = 0; $i<$month;$i++){

        echo "<p> Day ".$i." only";
    }


?>



</body>
</html>
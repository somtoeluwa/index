<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Movie Database</title>
</head>

<body>

<table>
    <tr>
        <th>marvelMovieID</th>
        <th>yearReleased</th>
        <th>title</th>
        <th>productionStudio</th>
        <th>notes</th>
    </tr>
    <tr>
        <?php

            $sql= "SELECT * FROM `marvelmovies`";
            $result = mysqli_query($db,$sql);

            while($row = $result->fetch_array()){

        ?>

        <td><?php echo $row['`marvelMovieID`'];?></td>
        <td><?php echo $row['`yearReleased`'];?></td>
        <td><?php echo $row['`title`'];?></td>
        <td><?php echo $row['`productionStudio`'];?></td>
        <td><?php echo $row['`notes`'];?></td>
    </tr>
    <?php

    }
    $result->close();
    $db->close();
    ?>


</table>



</body>
</html>
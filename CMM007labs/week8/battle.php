<?php include "dbconnect.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 8</title>
</head>
<body>
<form action="insertbattle.php" method="post">

    <label for="superheroes">SuperHero name:</label>
<?php
    $sql = "SELECT superheroID,firstName FROM superheros ORDER BY superheroID";
        echo "<select name=superheroes value=''>Superhero Name</option>"; // list box select command
    foreach ($db->query($sql) as $row){//Array or records stored in $row
    echo "<option value=$row[id]>$row[name]</option>";
   /* Option values are added by looping through the array */
}
echo "</select>";
?>
        <br><br>
        <label>Villain Fought:</label>
        <input type="text" name="villanFought" value="">
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>
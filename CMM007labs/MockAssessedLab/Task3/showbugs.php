<?php
    include ('dbConnect.php');

    $category=$_GET['BugCategory'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Bugs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/CSS/style.css">
</head>

<body>

<!-- Header Start-->
<header>
    <img src="../resources/logo.png" alt="Logo" id="logo">
    <h2>BugTracker</h2>
    <h4>Keeping track of all the pesky bugs</h4>
</header>

<!-- Main Start-->
<main>
    <div class="row">

        <div id="navbar" class="col-2">
            <ul>
                <li><a href="showbugs.php">All bug Items</a></li>
                <li><a href="showbugs.php?BugCategory=Android">Android Bugs</a></li>
                <li><a href="showbugs.php?BugCategory=iOS">iOS Bugs</a></li>
                <li><a href="showbugs.php?BugCategory=Windows">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bugs</a></li>
            </ul>
        </div>

        <div id="content" class="col-10">
            <?php

           // $category=$_GET['BugCategory'];

            if(empty($_GET['BugCategory'])){

                $sql_query = "select * from `bugs`";

            }else {

                $sql_query = "select * from `bugs` WHERE BugCategory  = '$category'";
                $result = mysqli_query($db, $sql_query);
                while ($row = $result->fetch_array()) {

                    ?>

                    <div id="bugitem">
                        <h3><?php echo $row['bugName'] ?></h3>
                        <h5><?php echo $row['BugCategory'] ?></h5>
                        <p><?php echo $row['BugSummary'] ?></p>
                    </div>

                    <?php

                }
            }
            ?>


        </div>


    </div>
</main>

<!-- footer Start-->
<footer>
    <p>Designed by Sommy B (c)2016</p>

</footer>
</body>
</html>
<?php


include 'dbConnect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bugs</title>
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
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// execute if requested using HTTP GET Method
?>
            <form class="inputBug" action = "<?{$_SERVER['PHP_SELF'];}?>" METHOD="post" >
                <label for="bugName" > Bug Name </label >
                <input type = "text" id = "bugName" name="bugName" value = "" required >
                <br ><br>
                <label for="bugSummary" > Bug Summary </label >
                <textarea required name="BugSummary" id = "BugSummary" cols = "30" rows = "3" value = "" ></textarea >
                <br > <br >
                <label for="BugCategory" > Bug Category </label >
                <select id = "BugCategory" name="BugCategory" >
                    <option value = "Android" > Android</option >
                    <option value = "iOS" > iOS</option >
                    <option value = "Windows" > Windows</option >
                </select >
                <br > <br >
                <input type = "submit" value = "submit" >
            </form >
<?
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
// execute if requested using HTTP POST Method
    $bugName = $_POST["bugName"];
    $bugSummary = $_POST["BugSummary"];
    $BugCategory = $_POST["BugCategory"];

    $sql = "INSERT INTO `bugs` ( bugName, BugSummary, BugCategory)
            VALUES('$bugName',	'$bugSummary',	'$BugCategory') ";
    $result = mysqli_query($db,$sql);

    header('location: showbugs.php');
}
else{
    header('location: index.php');
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
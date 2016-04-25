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
                <li><a href="showbugs.html">All bug Items</a></li>
                <li><a href="#">Android Bugs</a></li>
                <li><a href="#">iOS Bugs</a></li>
                <li><a href="#">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bugs</a></li>
            </ul>
        </div>

        <div id="content" class="col-10">

            <form class="inputBug">
                <label for="bugName">Bug Name</label>
                <input type="text" id="bugName" value="" required >
                <br><br>
                <label for="bugSummary">Bug Summary</label>
                <textarea required id="bugSummary" cols="30" rows="3" value=""></textarea>
                <br> <br>
                <label for="bugCategory">Bug Category</label>
                <select id="bugCategory">
                    <option value="Android">Android</option>
                    <option value="iOS">iOS</option>
                    <option value="Windows">Windows</option>
                </select>
                <br> <br>
                <input type="submit" value="submit">
            </form>



        </div>


    </div>
</main>

<!-- footer Start-->
<footer>
    <p>Designed by Sommy B (c)2016</p>

</footer>

</body>


</html>
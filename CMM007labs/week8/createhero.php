<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SHIELD RECRUITER</title>
</head>
<body>
<header>
    <h2>New Super Hero Details</h2>
</header>
<main>
    <form action="formResponse.php" method="post">
        <label>Forename:</label><input type="text" name="forename">
        <br><br>
        <label>Surname:</label><input type="text" name="surname">
        <br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Alien">Alien
        <br><br>
        <label>Describe your Powers:</label>
        <textarea name="power" cols="45" rows="6"></textarea>
        <br><br>
        <input type="submit" value="submit">
    </form>

</main>


</body>
</html>
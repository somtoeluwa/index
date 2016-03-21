<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Login Form without Session</title>
</head>

<body>
<h1>PHP Login For with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="login.php">
        <label>Username:</label>
        <input type="text" name="username" placeholder="username"/>
        <br><br>
        <lable>Password:</lable>
        <input type="password" name="password" placeholder="password"/>
        <br><br>
        <input type="submit" name="submit" value="login"/>
    </form>
    <div class="error"><?php//echo $error;?><?php //echo $username;
        // echo $password;?></div>
    </div>
</div>
</body>
</html>

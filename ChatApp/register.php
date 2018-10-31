<?php include('DataBase/server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title>Duo Lane - Register</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css"
</head>
<body>
<body>
<div class="login">
    <img src="pictures/user-icon.png" class="avatar">
    <form class="login" method="post">
        <label for="username" class="loginPage login_string_format">Username:</label>
        <input id="username" type="text" name ="" placeholder="Enter Username">

        <label for="email" class="loginPage login_string_format">Email:</label>
        <input id="email" type="text" name ="" placeholder="Enter Your Email Adress">

        <label for="password" class="loginPage login_string_format">Passwod:</label>
        <input id="password" type="password" name ="" placeholder="Enter Password">

        <label for="confirm_password" class="loginPage login_string_format">Confirm Passwod:</label>
        <input id="confirm_password" type="password" name ="" placeholder="Confirm your Password">

        <div class="login_actions">
            <input id="register" type="submit" class="login btn" value="Register!">
        </div>
    </form>
</div>
</body>
</body>
</html>



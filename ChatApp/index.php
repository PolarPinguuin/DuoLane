<?php include('DataBase/server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Duo Lane - Login page</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
    <body>
        <div class="login">
            <img src="pictures/user-icon.png" class="avatar">
            <form class="login" method="post" action="index.php">
                <?php include('php_files/errors.php'); ?>

                <label for="username" class="loginPage login_string_format">Username:</label>
                <input id="username" type="text" name ="username" placeholder="Enter Username">

                <label for="password" class="loginPage login_string_format">Passwod:</label>
                <input id="password" type="password" name ="password" placeholder="Enter Password">

                <div class="login_actions">
                    <button type="submit" class="login btn" name ="login_button"> Login </button>
                    <p>
                        Not yet a member ? <a href="register.php" class="login_string_format">Sing up</a>
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>
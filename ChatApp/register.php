<?php include('DataBase/server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title>Duo Lane - Register</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
    <body>
        <div class="login">
            <img src="pictures/user-icon.png" class="avatar">

            <form class="login" method="post" action="register.php">
                <?php include('php_files/errors.php'); ?>

                <label for="username" class="loginPage login_string_format">Username:</label>
                <input id="username" type="text" name ="username" placeholder="Enter Username" value="<?php echo $username ?>">

                <label for="email" class="loginPage login_string_format">Email:</label>
                <input id="email" type="text" name ="email" placeholder="Enter Your Email Adress" value="<?php echo $email ?>">

                <label for="password" class="loginPage login_string_format">Passwod:</label>
                <input id="password" type="password" name ="password" placeholder="Enter Password">

                <label for="confirm_password" class="loginPage login_string_format">Confirm Passwod:</label>
                <input id="confirm_password" type="password" name ="confirm_password" placeholder="Confirm your Password">

                <div class="login_actions">
                    <button id="register" name="register" type="submit" class="btn"> Register </button>
                </div>
            </form>
        </div>
    </body>
</html>



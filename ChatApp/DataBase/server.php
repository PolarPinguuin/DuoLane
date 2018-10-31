<?php
    $username = "";
    $email = "";
    $errors = array();

    $db = mysqli_connect('localhost','root', 'banifacviata', 'duolane');

    if(mysqli_connect_errno()) {
        console('Connection failed');
        die('Connection to the database failed: ' . $db -> connect_error);
    }

    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

        if(empty($username)){
            array_push($errors,'Username is required');
            console("A field is empty");
        }

        if(empty($email)){
            array_push($errors,'Email is required');
            console("A field is empty");
        }
        if(empty($password)){
            array_push($errors,'Password is required');
            console("A field is empty");
        }
        if($password != $confirm_password){
            array_push($errors,'Password do not match');
            console("A field is empty");
        }

        console('Am ajuns la querry');
        $user_check_query = "SELECT * FROM users WHERE username = '{$username}' or email = '{$email}' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if($user) {
            console('Found a user :');
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        if(count($errors) == 0){
            console('Nu am gasit erori');
            $password = md5($confirm_password);

            $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";

            mysqli_query($db, $query);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
           // header('location: index.html');
        }
    }

    if(isset($_POST['login_button'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username)) {
            console('Username not set');
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            console('Password not set');
            array_push($errors, "Password is required");
        }

        if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);

            console('There are no errors');

            if(mysqli_num_rows($results) == 1) {
                console('You are now loged in');
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

function console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo '<script>console.log( \'Debug TEXT: ' . $output . "' );</script>";
}
?>
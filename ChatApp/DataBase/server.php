<?php
    $username = "";
    $email = "";
    $errors = array();

    $db = mysqli_connect('localhost','root', 'banifacviata', 'duolane');

    if(isset($_POST['register'])){
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $confirm_password = addslashes($_POST['confirm_password']);

        if(empty($username)){
            array_push($errors,'Username is required');
        }

        if(empty($email)){
            array_push($errors,'Email is required');
        }
        if(empty($password)){
            array_push($errors,'Password is required');
        }
        if($password != $confirm_password)
            array_push($errors,'Password do not match');

        if(count($errors) == 0){
            $password = md5($confirm_password);

            $sql = "INSERT INTO \"users\" (username, email, password) VALUES ('$username', '$email', '$password')";

            mysqli_query($db, $sql);
        }
    }
?>
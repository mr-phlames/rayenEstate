<?php
    require_once("connection.php");

    $errors = ["email" => "", "password" => ""];

    if (isset($_POST['login_btn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);

        # validation
        if (empty($email) && empty($password)) {
            $errors['email'] = "Email is required";
            $errors['password'] = "Password is required";
            return;
        }
        if (empty($email)) {
            $errors['email'] = "Email is required";
            return;
        }
        if (empty($password)) {
            $errors['password'] = "Password is required";
            return;
        }

        $query = "SELECT email FROM users WHERE email='$email'";
        $try = mysqli_query($connection, $query);
        $try = mysqli_fetch_assoc($try);

        if ($try['email']) {
            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $user = mysqli_query($connection, $query);
            $user = mysqli_fetch_assoc($user);

            if(is_array($user)) {
                # start a session
                session_start();
                # session data
                $_SESSION['id'] = session_id();
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['country'] = $user['country'];

                # redirect to homepage
                header('location: ../home.php');
            } else {
                $errors['password'] = "Your password is incorrect";
                return;
            }
        } else {
            $errors['email'] = "This user doesn't exist";
            return;
        }
        
    }
        
?>
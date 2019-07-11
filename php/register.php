<?php 
    require_once("connection.php");

    $errors = ["username" => "", "email" => "", "password" => ""];

    if (isset($_POST['register_btn'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $username = mysqli_real_escape_string($connection, $username);
        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);
        $confirm_password = mysqli_real_escape_string($connection, $confirm_password);

        # validation
        if (empty($username) && empty($email) && empty($password)) {
            $errors['username'] = "Username is required";
            $errors['email'] = "Email is required";
            $errors['password'] = "Password is required";
            return;
        }
        if (empty($username) && empty($password)) {
            $errors['username'] = "Username is required";
            $errors['password'] = "Password is required";
            return;
        }
        if (empty($email) && empty($password)) {
            $errors['email'] = "Email is required";
            $errors['password'] = "Password is required";
            return;
        }
        if (empty($username) && empty($email)) {
            $errors['username'] = "Username is required";
            $errors['email'] = "Email is required";
            return;
        }
        if (empty($username)) {
            $errors['username'] = "Username is required";
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
        if ($username == $password) {
            $errors['password'] = "Username and password cannot be the same";
            return;
        }
        if ($password != $confirm_password) {
            $errors['password'] = "Passwords don't match";
            return;
        }

        $query = "SELECT * FROM users WHERE email='$email'";
        $try = mysqli_query($connection, $query);
        $try = mysqli_fetch_assoc($try);

        if ($try['email']) {
            $errors['email'] = "This email is already in use";
            return;
        } else {
            $query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
            mysqli_query($connection, $query);

            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $user = mysqli_query($connection, $query);
            $user = mysqli_fetch_assoc($user);

            # start a session
            session_start();
            # session data
            $_SESSION['id'] = session_id();
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['country'] = $user['country'];

            # redirect to homepage
            header('location: ../home.php');
        }     
    }

?>
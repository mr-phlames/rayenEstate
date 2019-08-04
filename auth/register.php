<?php 
    session_start();
    require('../php/register.php');
    if (isset($_SESSION['id'])) {
        header('location: ../home.php');
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Rayen Real Estate">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="auth.css">
    <style>
        /* * {
    border:  2px solid red;
} */

        body {
            padding: 0px;
            margin: 0px;
            width: 100%;
            height: 100vh !important;
            display: flex;
            flex-direction: row;
        }

        .side-image {
            width: 50% !important;
            height: 100% !important;
        }

        .form-container {
            width: 50% !important;
            display: flex;
            flex-direction: column;
            justify-content: center !important;
            align-items: center !important;
        }

        .logo {
            width: 150px;
            height: 100px;
        }

        .form {
            width: 60% !important;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .text-input {
            width: 97% !important;
            padding: 10px 0px 10px 10px;
            border: 1px solid #777777 !important;
            border-radius: 3px;
        }

        .form-error {
            text-align: left !important;
        }

        .submit_btn {
            width: 100%;
            background: #36a;
            border: 1px solid;
            border-color: #36a !important;
            border-radius: 3px;
            color: #fff;
            padding: 10px;
        }

        .submit_btn:focus {
            background: #6ad;
            border-color: #6ad;
        }

        .link_to {
            text-decoration: none;
            margin-top: 7%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important;
        }


        @media only screen and (max-width: 500px) {
            .side-image {
                display: none !important;
                width: 0px !important;
            }

            .form-container {
                width: 100% !important;
            }
        }
    </style>
</head>
<body>
    <img src="../images/blog_2.jpg" class="side-image">
    <div class="form-container">
        <img src="../images/logo.png" class="logo">
        <br>
        <form action="register.php" method="POST" class="form">
            <div class="form-group">
                <input type="text" class="text-input" name="username" placeholder="Username" value="<?php echo ($errors['username'] || $errors['email'] || $errors['password']) ? $username : ''; ?>">
                <div class="form-error"><?php echo $errors['username']; ?></div>
            </div>
            <br>
            <div class="form-group">
                <input type="email" class="text-input" name="email" placeholder="Email" value="<?php echo ($errors['username'] || $errors['email'] || $errors['password']) ? $email : ''; ?>">
                <div class="form-error"><?php echo $errors['email']; ?></div>
            </div>
            <br>
            <div class="form-group">
                <input type="password" class="text-input" name="password" placeholder="Password" value="<?php echo ($errors['username'] || $errors['email'] || $errors['password']) ? $password : ''; ?>">
                <div class="form-error"><?php echo $errors['password']; ?></div>
            </div>
            <br>
            <div class="form-group">
                <input type="password" class="text-input" name="confirm_password" placeholder="Confirm Password" value="<?php echo ($errors['username'] || $errors['email'] || $errors['password']) ? $confirm_password : ''; ?>">
            </div>
            <br>
            <button type="submit" name="register_btn" class="submit_btn">Register</button>
        </form>
        <a href="login.php" class="link_to">Login instead</a>
    </div>
</body>
</html>
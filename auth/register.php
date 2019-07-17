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
    <link rel="stylesheet" href="auth.css" type="text/css">
</head>
<body>
    <img src="../images/blog_2.jpg" class="image">
    <div class="form-container">
        <img src="../images/logo.png" class="logo" style="display: none !important;">
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
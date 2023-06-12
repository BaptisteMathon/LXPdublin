<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | FitHome</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="Img/logo_startp-removebg-preview - Copie.png">
</head>
<body>

    <?php require('.\header.php') ?>

<form class="form">
    <p class="title">Login </p>
    <p class="message">Sign in to your account. </p>
        <div class="flex">
    <label>
        <input required="" placeholder="" type="email" class="input">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input">
        <span>Password</span>
    </label>
        </div>
    <button class="submit">Sign in</button>
    <p class="signin">Doesn't have an account<a href="register.php">Sign up</a> </p>
</form>

<?php require('.\footer.php') ?>

</body>
</html>
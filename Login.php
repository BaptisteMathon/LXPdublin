<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | FitHome</title>
    <link rel="stylesheet" href="styleloginregister.css">
    <link rel="shortcut icon" href="Img/logo_startp-removebg-preview - Copie.png">
</head>
<body>

    <?php require('.\header.php') ?>
    <div class="centré">
    <form class="form">
    <p class="title">Login </p>
    <p class="message">signin to your account. </p>
    <label>
        <input required="" placeholder="" type="email" class="input">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input">
        <span>Password</span>
    </label>
    <button class="submit">Submit</button>
    <p class="signin">Doesn't have an account ? <a href="register.php">Signup</a> </p>
</form>
    </div>
    <?php require('.\footer.php') ?>
</body>
</html>
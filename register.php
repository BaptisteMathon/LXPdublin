<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | FitHome</title>
    <link rel="stylesheet" href="styleloginregister.css">
    <link rel="shortcut icon" href="Img/logo_startp-removebg-preview - Copie.png">
</head>
<body>
    <?php require('.\header.php') ?>
    <div class="centré">
    <form action="myProfile.php" method="POST" class="form">
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="FirstName">
            <span>Firstname</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="LastName">
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input" name="Email">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="Password">
        <span>Password</span>
    </label>
    <button class="submit">Submit</button>
    <p class="signin">Already have an acount ? <a href="Login.php">Signin</a> </p>
    </form>
    </div>
    <?php require('.\footer.php') ?>
</body>
</html>
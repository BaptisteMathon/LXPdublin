<?php 
    if(count($_POST) != 0){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=fithome;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }

        $sqlQueryInfo = 'SELECT * FROM users';
        $usersStatement = $db->prepare($sqlQueryInfo);
        $usersStatement->execute();
        $users_online = $usersStatement->fetchAll();

        for($i = 0; $i < count($users_online); $i++){
            if($users_online[$i]['Email'] == $_POST['mailLogin'] && $users_online[$i]['Password'] == $_POST['passwordLogin']){

                $indice = intval($users_online[$i]['user_id']);
                
                $sqlLogin = "UPDATE users SET UserOnline = 1 WHERE user_id = $indice";
                $userEdit = $db->prepare($sqlLogin);
                $userEdit->execute();
            } else 
            {
                // echo '<br>KO<br>';
            }
        }
    }
    
?>

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
    <form action="Login.php" method="POST" class="form">
    <p class="title">Login </p>
    <p class="message">signin to your account. </p>
    <label>
        <input required="" placeholder="" type="email" class="input" name="mailLogin">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="passwordLogin">
        <span>Password</span>
    </label>
    <button class="submit">Submit</button>
    <p class="signin">Doesn't have an account ? <a href="register.php">Signup</a> </p>
</form>
    </div>
    <?php require('.\footer.php') ?>
</body>
</html>
<?php 
    // var_dump($_POST);

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=fithome;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    if(count($_POST) == 4){
        
        $sqlQuery = 'INSERT INTO users(First_Name, Last_Name, Email, Password, UserOnline) VALUES (:First_Name, :Last_Name, :Email, :Password, :UserOnline)';

        $insertRecipe = $db->prepare($sqlQuery);

        $insertRecipe->execute([
            'First_Name' => $_POST['FirstName'],
            'Last_Name' => $_POST['LastName'],
            'Email' => $_POST['Email'],
            'Password' => $_POST['Password'],
            'UserOnline' => 1,
        ]);
    }

    if(count($_POST) == 5){
        echo "Condition post == 5";
        var_dump($_POST);
        
        $Nom = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Mail = $_POST['Mail'];
        $Password = $_POST['password'];

        $UsId = intval($_POST['user_id']);
        
        $insertRecipeStatement = $db->prepare('UPDATE users SET First_Name = :First_Name, Last_Name = :Last_Name, Email = :Email, Password = :Password  WHERE user_id = :user_id');
        $insertRecipeStatement->execute([
            'First_Name' => $Nom,
            'Last_Name' => $LastName,
            'Email' => $Mail,
            'Password' => $Password,
            'user_id' => $UsId,
        ]);
    }

    $sqlQueryInfo = 'SELECT * FROM users WHERE UserOnline = 1';
    $usersStatement = $db->prepare($sqlQueryInfo);
    $usersStatement->execute();
    $users_online = $usersStatement->fetchAll();

    // var_dump($users_online);

    // if(count($_GET) != 0){

    //     $sqlEdit = 'UPDATE users SET UserOnline = 0 WHERE UserOnline = 1';
    //     $userEdit = $db->prepare($sqlEdit);
    //     $userEdit->execute();
    // }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | FitHome</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="Img/logo_startp-removebg-preview - Copie.png">
</head>
<body>
    <?php require('.\header.php') ?>

    <p class="Home_Rep">> <a href="index.php" class="Home_Rep1">Home</a> > <a href="myProfile.php" class="Home_Rep1">My Profile</a></p>
    
    <form action="index.php" method="GET">
        <input type="text" name="logOut" style="display: none">
        <input type="submit" value="LOG OUT" class="LogOut">
    </form>

    <main class="mainMyProfile">
        <div class="ProfilPicDiv">
            <h1>My Profile</h1>
            <img src="Img/103061783.jpeg" alt="Profil pic" width="200px" height="200px" class="PicUSer">
            
        </div>

        <form action="myProfile.php" method="POST" class="PersonalInformation">
            <div>
                <label for="FirstName">First Name</label>
                <input type="text" name="FirstName" id="FirstName" value="<?php echo $users_online[0]['First_Name'] ?>">
            </div>

            <div>
                <label for="LastName">Last Name</label>
                <input type="text" name="LastName" id="LastName" value="<?php echo $users_online[0]['Last_Name'] ?>">
            </div>

            <div>
                <label for="Mail">E-mail</label>
                <input type="email" name="Mail" id="Mail" value="<?php echo $users_online[0]['Email'] ?>">
            </div>

            <div>
                <label for="PhoneNumber">Password</label>
                <input type="tel" name="password" id="password" value="<?php echo $users_online[0]['Password'] ?>">
            </div>

            <input type="text" name="user_id" style="display: none" value="<?php echo $users_online[0]['user_id'] ?>">

            <input type="submit" value="UPDATE" class="UpdatePersonalInformation">
        </form>
    </main>

    <div class="SessionsFutur">
        <p class="SessionAl">Sessions already scheduler</p>
        <div class="Sessions">
            <ul>
                <li>no session yet</li>
            </ul>
        </div>
    </div>

    <?php require('.\footer.php') ?>
</body>
</html>
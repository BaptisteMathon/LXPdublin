<?php 
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=fithome;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    $sqlQueryInfo = 'SELECT * FROM users WHERE UserOnline = 1';
    $usersStatement = $db->prepare($sqlQueryInfo);
    $usersStatement->execute();
    $users_online = $usersStatement->fetchAll();

    if(empty($users_online)){
        $Verif = 0;
        // echo "Vide";
    } else {
        $Verif = 1;
        // echo "pas vide";
    }
?>

<header>
    <div class="FitHome">
        <a href="index.php">
            <img src="Img/logo_startp-removebg-preview.png" alt="Logo FitHome" width="75px">
            <p class="Fit-Home">Fit-Home</p>
        </a>
    </div>
    <nav>
        <ul>
            <a href="coach.php" class="NavPage"><li>Coach</li></a>
            <a href="contact.php" class="NavPage"><li>Contact</li></a>
            <?php if($Verif == 1): ?>
                <a href="myProfile.php"><li><img src="Img/icons8-utilisateur-24.png" alt="User Page"></li></a>
            <?php else: ?>
                <a href="register.php"><li><img src="Img/icons8-utilisateur-24.png" alt="User Page"></li></a>
            <?php endif; ?>

        </ul>
    </nav>
</header>
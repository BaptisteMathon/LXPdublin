<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="Img/logo_startp-removebg-preview - Copie.png">
    <title>Contact</title>
    <style>@import url('https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap');</style> 
</head>
<body>
    <?php require('.\header.php') ?>
    <main class="mainCoachSelect">
        <p class="Home_Rep">> 
            <a href="index.php" class="Home_Rep1"> Home</a>>
            <a href="coach.php" class="Home_Rep1"> Coach</a>>
            <a href="#" class="Home_Rep1">
                BRICE
                <?php
                    //Coach Name
                ?>
            </a>
        </p>
        <div class="Home_Rep_Adjust"> 
        </div>
        <section id="MainPartSelectCoach">
            <section id="SelectCoachGauche">
                <h2 class="coachName" >
                    BRICE
                    <?php
                        //Coach Name
                    ?>
                </h2>
                <img class="CoachPhoto" src="./Img/coach1.png<?php 
                        //photo coach
                    ?>"
                >
                <a href="" class="BookingButton">Book Coach</a>
            </section>
            <section id="SelectCoachDroite">
                <div>
                    <h3>
                        Desccription
                    </h3>
                    <p class="CoachDescription">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis in massa quis luctus. 
                    Nullam eget porta dolor. Vivamus tincidunt neque a est rhoncus, id venenatis mauris venenatis. 
                    Nullam vulputate est nec nisl feugiat, eget rhoncus elit tempor. Ut ac orci sed enim feugiat lacinia. 
                    Curabitur pellentesque risus tortor, a ultrices purus sagittis nec. 
                    Aliquam risus ex, dictum sit amet laoreet vel, tincidunt eget felis.
                    Vestibulum fringilla vel libero ac lobortis. Curabitur maximus est nisl, eget venenatis risus lobortis vel. 
                    Nunc eget auctor dui. Integer consectetur ullamcorper urna, suscipit rhoncus mi pulvinar nec.
                        <?php
                            //coach description
                        ?>
                    </p>
                    <form>
                        <div>
                            <label for="SessionNum">Number of sessions:</label>
                            <input id="ticketNum" type="number" name="ticketNum" value="1" min="1">
                        </div>
                        <div>
                            <label for="start">Date of the first session:</label>
                            <input type="date" id="start" name="session-start" value="<?php date("j/m/Y")?>" >
                        </div>
                    </form>
                    <P class="price">
                        Final price:
                        <?php 
                            if (isset($_GET['ticketNum']) && ($_GET['ticketNum']!="")){
                                echo 55*$_GET['ticketNum'] ?>€ <?php ;
                            }
                            else{ ?>
                                Please select a number of sessions
                            <?php }
                        ?>
                        
                    </P>
                </div>
            </section>
        </section>
    </main>
    <div style="position:absolute;bottom:0;width:100%;">
        <?php require('.\footer.php') ?>
    </div>
</body>
</html>
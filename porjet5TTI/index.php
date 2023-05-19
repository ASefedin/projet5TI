<?php
    session_start();
    require_once "Config/databaseConnexion.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/flex.css">
    <link rel="stylesheet" href="CSS/form.css">
    <link rel="icon" href="Images/icon1.png">
    <title>UFC Play</title>
</head>
<body>
    <header class="flex space-between">
        <div >
            <img class="imageIcon1" src="Images/icon1.png" alt="ufc" >
        </div>
        <div class="black">
            <h2>Ultimate Fighting Combat</h2>
        </div>
        <ul class="flex space-evenly">
            <li class="menu"><a href="/index.php">Home</a></li>
            <?php if(isset($_SESSION['user'])) : ?>
                <li class="menu"><a href="mesCombattants">mes combattants</a></li>
                <li  class="menu"><a href="profil">Page profil</a></li>

            <?php endif ?>
            <li  class="menu">
                <?php if(isset($_SESSION['user'])) : ?>
                                    <a href="deconnexion">Déconnexion</a>
                                <?php else :?>   
                                    <a href="connexion">Connexion</a>
                                <?php endif ?></li>
        </ul>
    </header>
        <main>
            <?php
                require_once "controllers/combattantControllers.php";
                require_once "controllers/utilisateursControllers.php";
            ?>
        </main>
    <footer>
        <div class="flex space-between align-item-center">
            <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
</body>
</html>
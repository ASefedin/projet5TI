<form method="post" action="">
    <fieldset>
        <legend><?php if(isset($_SESSION["user"])) : ?>Modifier<?php else : ?>Inscription<?php endif ?></legend>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" placeholder="Nom" class="form-control" id="Nom" name="Nom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->nomUser ?><?php endif ?>" >

            <?php if(isset($messageErrorLogin["Nom"])) : ?><p><?= $messageErrorLogin["Nom"] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prenom</label>
            <input type="text" placeholder="Prénom" class="form-control" id="Prenom" name="Prenom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->prenomUser ?><?php endif ?>"> 

            <?php if(isset($messageErrorLogin["Prenom"])) : ?><p><?= $messageErrorLogin["Prenom"] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" placeholder="Email" class="form-control" id="email" name="Email" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->emailUser ?><?php endif ?>">

            <?php if(isset($messageErrorLogin["Email"])) : ?><p><?= $messageErrorLogin["Email"] ?></p> <?php endif ?> 
        </div>
        <div class="mb-3">
            <label for="Login" class="form-label">Login</label>
            <input type="text" placeholder="Login" class="form-control" id="Login" name="Login" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->loginUser ?><?php endif ?>">

            <?php if(isset($messageErrorLogin["Login"])) : ?><p><?= $messageErrorLogin["Login"] ?></p> <?php endif ?> 
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Mot de passe</label>
            <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="Mot_de_passe" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->Mot_de_passeUser ?><?php endif ?>">

            <?php if(isset($messageErrorLogin["Mot_de_passe"])) : ?><p><?= str_replace('_', ' ',$messageErrorLogin["Mot_de_passe"]) ?></p>  <?php endif ?> 
        </div>
        <div>
            <button name="btnEnvoi" class="btn btn-primary" value="envoyer"><?php if(isset($_SESSION["user"])) : ?>Modifier<?php else : ?>Envoyer<?php endif ?></button>
        </div>
    </fieldset>
</form>
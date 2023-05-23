<link rel="stylesheet" href="CSS/index.css">
<link rel="stylesheet" href="CSS/flex.css">
<link rel="stylesheet" href="CSS/from.css">
<link rel="stylesheet" href="CSS/button.css">

<form method="post" action="">
    <fieldset>
        <legend><h4><?php if(isset($combattant)) : ?>Modifier un combattant<?php else : ?>Creer un combattant<?php endif ?></h4></legend>
        <div class="my-div">
            <section>
                <?php if(isset($_SESSION['user'])) : ?>
                    <p>Nom<input type="text" placeholder="Nom" class="form-control" id="Nom" name="nom" value="<?php if (isset($combattant)) : ?><?= $combattant->combattantNom ?><?php endif ?>" required></p>
                    <p>Prenom<input type="text" placeholder="Nom" class="form-control" id="Prenom" name="prenom" value="<?php if(isset($combattant)) : ?><?= $combattant->combattantPrenom ?><?php endif ?>" required></p>
                    <p>age<input type="date" placeholder="age" class="form-control" id="age" name="age" value="<?php if(isset($combattant)) : ?><?= $combattant->combattantAge ?><?php endif ?>" required></p>
                    <p>description<input type="text" placeholder="Nom" class="form-control" id="description" name="description" value="<?php if(isset($combattant)) : ?><?= $combattant->combattantDescription ?>" required<?php endif ?>" ></p>
                    <p>image<input type="text" placeholder="Nom" class="form-control" id="img" name="illustration" value="<?php if(isset($combattant)) : ?><?= $combattant->combattantIllustration ?><?php endif ?>" required></p>
                    
                    <div class="my-div">
                    <p>categorie de poids:</p>
                        <select name="categorie[]" required multiple>
                            <?php foreach ($categories as $categorie) : ?>
                                <option value="<?= $categorie->categorieId ?>"><?= $categorie->categoriePoid?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="my-div">
                        <p>competence requise:</p>
                            <select name="competence[]" required multiple>
                                <?php foreach ($competences as $competence) : ?>
                                    <option value="<?= $competence->competenceId ?>"><?= $competence->competenceNom ?></option>
                                <?php endforeach ?>
                        </select>
                    </div>
                        <div class="flex space-evenly">
                            <button name="btnEnvoi" value="envoyer"><?php if (isset($combattant)) : ?>Modifier<?php else : ?>Ajouter<?php endif ?></button>
                        </div>
                <?php endif ?>
            </section>
        </div>
    </fieldset>
</form>
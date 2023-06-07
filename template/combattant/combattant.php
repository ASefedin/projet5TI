<?php if(isset($_SESSION['user'])) : ?> <!--si l'utilisateur est connecte-->
    <div class="flex space-evenly">
        <div class="">
            <h3 class="text-danger"> créer votre combattant</h3>
            <a href="createCombattant" class="btn btn-secondary">créer le combattant</a></li>
        </div>
    </div>
<?php endif ?>


<div class="flex wrap space-evenly">
    <?php foreach ($combattants as $combattant) : ?> <!--récup tout les combattants-->
        <div class ="border">
            <u><h2>Presentation de <?= $combattant->combattantPrenom ?> <?= $combattant->combattantNom ?></h2></u> <!--affichage des données dans la bdd-->
            <div>
                    <div class="flex space-evenly">
                        <img class="wrap" id="combattantImage" src=<?= $combattant->combattantIllustration?>>
                    </div>
            </div>
            <div class="flex">
                <h3 class="text-danger">plus d'info =========================></h3>
                <a href="/voirLeCombattant?combattantId=<?=$combattant->combattantId ?>" class="btn btn-secondary">Clique</a> <!--/voirLeCombattant = uri--> <!--?combattantId = $combattant->combattantId = recup l'id du combattant en qst. En soi voir le combattant en qst grace a l'id.-->
            </div>
            <?php if(isset($_SESSION['user'])) : ?> <!--si l'utilisateur est connecte-->
                <div class="flex">
                    <h3 class="text-danger">supprimer ton combattant =========================></h3>
                    <a href="/suppLeCombattant?combattantId=<?=$combattant->combattantId ?>" class="btn btn-secondary">supprimer</a> <!--/voirLeCombattant = uri--> <!--?combattantId = $combattant->combattantId = recup l'id du combattant en qst. En soi voir le combattant en qst grace a l'id.-->
                </div>
            <?php endif ?>
        </div>
    <?php endforeach ?>
</div>

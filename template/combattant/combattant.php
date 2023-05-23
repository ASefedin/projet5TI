<p>bonjour a tous, je vais vous presenter quelque combattant, celui qui vous plait le plus vous pouvez le choisir !</p>
<?php if(isset($_SESSION['user'])) : ?>
    <div class="flex space-evenly">
        <div class="">
            <h3 class="text-danger"> créer votre combattant</h3>
            <a href="createCombattant" class="btn btn-secondary">créer le combattant</a></li>
        </div>
    </div>
<?php endif ?>
<div class="flex wrap space-evenly">
    <?php foreach ($combattants as $combattant) : ?>
        <div class ="border">
            <u><h2>Presentation de <?= $combattant->combattantPrenom ?> <?= $combattant->combattantNom ?></h2></u>
            <div>
                    <div class="flex space-evenly">
                        <img class="wrap" id="combattantImage" src=<?= $combattant->combattantIllustration?>>
                    </div>
            </div>
            <div class="flex">
                <h3 class="text-danger">plus d'info =========================></h3>
                <a href="/voirLeCombattant?combattantId=<?= $combattant->combattantId ?>" class="btn btn-secondary">Clique</a>
            </div>
                <div class="flex">
                    <h3 class="text-danger">supprimer ton combattant =========================></h3>
                    <a href="/suppLeCombattant?combattantId=<?= $combattant->combattantId ?>" class="btn btn-secondary">supprimer</a>
                </div>
                
        </div>
    <?php endforeach ?>
</div>

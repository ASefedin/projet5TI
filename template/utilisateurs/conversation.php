
    <form method="post" action="">
        <fieldset>
            <legend>Discusion</legend>


            <?php foreach ($users as $user) : ?>
                    <h2>Discuter avec <a href="/discusionWithUser?userId=<?=$user->userId ?>"><?=$user->nomUser?><?=$user->prenomUser?></a> </h2>
            <?php endforeach ?>
            
            <select name="discu[]" required multiple> <!--en crochet pour dire que c"est un tab-->
                            <?php foreach ($users as $user) : ?> <!--recup toute les données de la bdd-->
                                <option value="<?=$user->userId ?>"><?=$user->nomUser?><?=$user->prenomUser?></option> <!--afficher une coordonnée dans la base de donnée-->
                            <?php endforeach ?>
            </select>
            <div class="flex">
                <a href="/discusionWithGroupe?combattantId=<?= $user->userId ?>" class="btn btn-secondary">chat grouper</a><!--/updateCombattant = uri--> <!--?combattantId = $combattant->combattantId = recup l'id du combattant en qst. En soi voir le combattant en qst grace a l'id.-->
            </div>
        </fieldset>
    </form>
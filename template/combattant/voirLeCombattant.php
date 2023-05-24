<div class="flex space-between">
        <h1>Le combattant</h1>
        <?php if(isset($_SESSION['user'])) : ?>
        <div class="flex">
                <a href="/updateCombattant?combattantId=<?= $combattant->combattantId ?>" class="btn btn-secondary">modifier</a><!--/updateCombattant = uri--> <!--?combattantId = $combattant->combattantId = recup l'id du combattant en qst. En soi voir le combattant en qst grace a l'id.-->
        </div>
        <?php endif ?>
</div>
<div class="flex space-around">
        <div class="">  
                <ol>
                        <li><p>image</p><img id="combattantImage" src=<?= $combattant->combattantIllustration?> alt=""></li><!--récupere les infos de la bdd concernant les infos désiré-->
                        <li><p>Nom</p><?= $combattant->combattantNom ?></li>
                        <li><p>Prénom</p><?= $combattant->combattantPrenom ?></li>
                        <li><p>Age</p><?= $combattant->combattantAge ?></li>
                        <li><p>description</p><?= $combattant->combattantDescription?></li>
                </ol>
        </div>
        <div class="flex space-around">
                <table>
                        <tr>
                                <th>categorie de poid</th>
                        </tr>
                        <?php if (empty($categories)) : ?> <!--Si (empty — Détermine si une variable est vide) empty categories-->
                                <tr>
                                        <td>Il n'y a pas de catégorie pour ce combattant</td>
                                </tr>
                        <?php else : ?> 
                                <?php foreach ($categories as $categorie) : ?> <!--recup tout les categories pour en prendres qu'une-->
                                        <tr>
                                                <td><?= $categorie->categoriePoid ?></td> <!--afficher valeur de la bdd-->
                                        </tr>
                                <?php endforeach ?>
                        <?php endif ?>
                </table>
                <table>
                        <tr>
                                <th>competence du combattant</th>
                        </tr>
                        <?php if (empty($competences)) : ?>
                                <tr>
                                        <td>Il n'y a pas de competence pour ce combattant</td>
                                </tr>
                        <?php else : ?> 
                                <?php foreach ($competences as $competence) : ?>
                                        <tr>
                                                <td><?= $competence -> competenceNom ?></td>
                                        </tr>
                                <?php endforeach ?>
                        <?php endif ?>
                </table>
        </div>
</div>
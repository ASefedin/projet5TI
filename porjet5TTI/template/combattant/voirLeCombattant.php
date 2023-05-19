<h1>Le combattant</h1>
<div class="">  
        <ol>
                <li><p> image</p><img id="combattantImage" src=<?= $combattant->combattantIllustration?> alt=""></li>
                <li><p>Nom</p><?= $combattant->combattantNom ?></li>
                <li><p>Prénom</p><?= $combattant->combattantPrenom ?></li>
                <li><p>Age</p><?= $combattant->combattantAge ?></li>
                <li><p>description</p><?= $combattant->combattantDescription?></li>
        </ol>
</div>
<div class="flex space-evenly">
        <table>
                <tr>
                        <th>categorie de poid</th>
                </tr>
                <?php if (empty($categories)) : ?>
                        <tr>
                                <td>Il n'y a pas de catégorie pour ce combattant</td>
                        </tr>
                <?php else : ?> 
                        <?php foreach ($categories as $categorie) : ?>
                                <tr>
                                        <td><?= $categorie->categoriePoid ?></td>
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
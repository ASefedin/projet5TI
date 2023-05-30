<link rel="stylesheet" href="CSS/index.css">
<link rel="stylesheet" href="CSS/flex.css">
<link rel="stylesheet" href="CSS/from.css">
<link rel="stylesheet" href="CSS/button.css">
    <form method="post" action="">
        <fieldset>
            <legend>chat</legend>
            <p>votre message</p>

            <textarea name="discu" id="" cols="33" rows="5"><?php if(isset($messageErrorLogin["discu"])) : ?><p><?= $messageErrorLogin["discu"] ?></p> <?php endif ?> </textarea>

            <div class="flex space-evenly">
                <button name="btnEnvoi" value="envoyer">Ajouter</button> 
            </div>
            </select>
        </fieldset>
    </form>
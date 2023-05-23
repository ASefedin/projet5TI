<h1>Votre page profil</h1>
<div class="flex space-around">
    <div>
        <ol>
            <div>
                <li>Nom</li>
                <p><?= $_SESSION["user"]->nomUser ?></p>
            </div>
            <div>
                <li>Prénom</li>
                <p><?= $_SESSION["user"]->prenomUser ?></p>
            </div>
            <div>
                <li>Email</li>
                <p><?= $_SESSION["user"]->emailUser ?></p>
            </div>
            <div>
                <li>Photo de profil</li>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <img id="imageProfil" src="Images/profil.png" alt="Mon image de profil">
            </div>
        </ol>
    </div>
    <div >
        <div class="flex">
            <div class="marge">
                <h3 class="text-danger">modifier ton profil ?</h3>
                <a href="/modifyProfil" class="btn btn-secondary">Clique</a>
            </div>
            <div class="marge">
                <h3 class="text-danger">supprimer ton profil ?</h3>
                <a href="/deleteProfil" class="btn btn-secondary">Clique</a>
            </div>
        </div>
    </div>
    
    
</div>
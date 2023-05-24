<?php
require_once "modele/combattantModel.php";
require_once "modele/categorieModel.php";
require_once "modele/competenceModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "combattant.php"  || $uri === "/index.php") {
    $combattants = selectAllCombattant($pdo); //combattants pour recup tout les combattants
    require_once "template/combattant/combattant.php";// redirection
}

elseif (str_contains($uri,"/voirLeCombattant")) {
    $combattant = selectLeCombattant($pdo); //combattant pour recup un combattant afin de le voir lui seul
    $categories = selectCategorieCombattant($pdo);
    $competences = selectCompetenceCombattant($pdo);
    require_once "template/combattant/voirLeCombattant.php";
}

elseif (str_contains($uri,"/suppLeCombattant")) {
    $categories = selectCategorieCombattant($pdo);// recup
    $competences = selectCompetenceCombattant($pdo);
    $combattant = selectLeCombattant($pdo);
    deletecategorieCombattant($pdo); // supprimer
    deletecompetenceCombattant($pdo);
    delete1Combattant($pdo);
    header("location:/index.php"); // redirection
}

elseif ($uri === "/createCombattant" ) {
    if(isset($_POST["btnEnvoi"])){ // si le bouton est cliqué
        createCombattant($pdo); // creation 
        $combattantId = $pdo->lastinsertId(); // recuperer le derniere Id de la table 
        for ($i = 0; $i < count($_POST["categorie"]); $i++) {
            $combattantCategorieId = $_POST["categorie"][$i];
            createCategorie($pdo, $combattantId, $combattantCategorieId); 
        }
        for ($Y = 0; $Y < count($_POST["competence"]); $Y++) {
            $competenceId = $_POST["competence"][$Y];
            createCompetence($pdo, $combattantId, $competenceId);
        }
        header("location:/index.php");
    }
    $categories = selectAllCategories($pdo);
    $competences = selectAllCompetence($pdo);
    require_once "template/combattant/createCombattant.php";
}

elseif (str_contains($uri,'/updateCombattant')) {
    if (isset($_POST['btnEnvoi'])) {
        updateCombattant($pdo, $_GET["combattantId"]); // $_GET["combattantId"]) = recupere le combattantId deja existant
        deletecategorieCombattant($pdo); // supprimer pour recréer ensuite
        deletecompetenceCombattant($pdo);
        for ($i = 0; $i < count($_POST["categorie"]); $i++) {
            $combattantCategorieId = $_POST["categorie"][$i];
            createCategorie($pdo, $_GET["combattantId"], $combattantCategorieId);
        }
        for ($i = 0; $i < count($_POST["competence"]); $i++) {
            $combattantCompetenceId = $_POST["competence"][$i];
            createCompetence($pdo, $_GET["combattantId"], $combattantCompetenceId);
        }
        header("location:/index.php");
    }
    $categories = selectCategorieCombattant($pdo);
    $competences = selectCompetenceCombattant($pdo);
    $combattant = selectLeCombattant($pdo);
    $categories = selectAllCategories($pdo);
    $competences = selectAllCompetence($pdo);
    require_once "template/combattant/createCombattant.php";
}   

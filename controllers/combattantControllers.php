<?php
require_once "modele/combattantModel.php";
require_once "modele/categorieModel.php";
require_once "modele/competenceModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "combattant.php"  || $uri === "/index.php") {
    $combattants = selectAllCombattant($pdo);
    require_once "template/combattant/combattant.php";
}

elseif (str_contains($uri,"/voirLeCombattant")) {
    $combattant = selectLeCombattant($pdo);
    $categories = selectCategorieCombattant($pdo);
    $competences = selectCompetenceCombattant($pdo);
    require_once "template/combattant/voirLeCombattant.php";
}

elseif (str_contains($uri,"/suppLeCombattant")) {
    $categories = selectCategorieCombattant($pdo);
    $competences = selectCompetenceCombattant($pdo);
    $combattant = selectLeCombattant($pdo);
    deletecategorieCombattant($pdo);
    deletecompetenceCombattant($pdo);
    delete1Combattant($pdo);
    header("location:/index.php");
}

elseif ($uri === "/createCombattant" ) {
    if(isset($_POST["btnEnvoi"])){
        createCombattant($pdo);
        $combattantId = $pdo->lastinsertId();
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
        updateCombattant($pdo, $_GET["combattantId"]);
        deletecategorieCombattant($pdo);
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

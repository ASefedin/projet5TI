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
        header("location:/index.php");
        createCombattant($pdo);
        $combattantId = $pdo->lastinsertId();
        for ($i = 0; $i < count($_POST["categorie"]); $i++) {
            $combattantCategorieId = $_POST["categorie"][$i];
            createCategorie($pdo, $combattantId, $combattantCategorieId);
        }
        $categorieId = $pdo->lastinsertId();
        for ($Y = 0; $Y < count($_POST["competence"]); $Y++) {
            $categorieId = $_POST["competence"][$Y];
            createCompetence($pdo, $combattantId, $categorieId);
        }
    }
    $categories = selectAllCategories($pdo);
    $competences = selectAllCompetence($pdo);
    require_once "template/combattant/createCombattant.php";
}

elseif ($uri === "/updateCombattant") {
    if (isset($_POST['btnEnvoi'])) {
        var_dump("coucou");
        //updateCombattant($pdo);
        //deletecategorieCombattant($pdo);
        //deletecompetenceCombattant($pdo);
        //for ($i = 0; $i < count($_POST["categorie"]); $i++) {
            //$combattantCategorieId = $_POST["categorie"][$i];
            //ajouterOptionsEcole($pdo, $_GET["combattantId"], $combattantCategorieId);
        }
        //header("location:/index.php");
    //}
    //$categories = selectCategorieCombattant($pdo);
    //$competences = selectCompetenceCombattant($pdo);
    //$combattant = selectLeCombattant($pdo);
    //$categories = selectAllCategories($pdo);
    //$competences = selectAllCompetence($pdo);
    require_once "template/combattant/createCombattant.php";
}
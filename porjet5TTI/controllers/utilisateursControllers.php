<?php

require_once "modele/utilisateursModel.php";
require_once "modele/combattantModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri === "/inscription"){
    if(isset($_POST["btnEnvoi"])){
        $messageError=VerifEmptyData();
        if (!$messageError) {
            createUser($pdo);
            header('location:/connexion');
        }
        
    }
    require_once "template/utilisateurs/inscriptionOrEditProfil.php";
}elseif ($uri === "/connexion") {
    if(isset($_POST["btnEnvoi"])){
        connectUser($pdo);
        header('location:/index.php');
    }
    require_once "template/utilisateurs/connexion.php";
}elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/index.php');
}elseif ($uri === "/profil") {
    
    require_once "template/utilisateurs/profil.php";
}elseif ($uri === "/modifyProfil") {
    if(isset($_POST["btnEnvoi"])){
        updateUser($pdo);
        reloadSession($pdo);
        header("location:/profil");
    }
    require_once "template/utilisateurs/inscriptionOrEditProfil.php";
}elseif ($uri === "/deleteProfil") {
    deleteProfil($pdo);
    deleteAllCombattantUsers($pdo);
    session_destroy();
    header("location:/index.php");
    require_once "template/utilisateurs/inscriptionOrEditProfil.php";
}

function VerifEmptyData()
{
    foreach ($_POST as $key => $value) {
        if (empty(str_replace(' ','',$value))) {
            $messageError[$key] = "Votre " . $key . " est vide !";
        }
    }
    if (isset($messageError)) {
        return $messageError;
    }
    else {
        return false;        
    }
}
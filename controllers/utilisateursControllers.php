<?php

require_once "modele/utilisateursModel.php";
require_once "modele/combattantModel.php";
require_once "modele/conversationModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri === "/inscription"){
    if(isset($_POST["btnEnvoi"])){
        $messageError=VerifEmptyData(); //message d'erreur
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
    session_destroy(); // zmh detruire la session ne plus etre considere comme $_SESSION
    header('location:/index.php');
}elseif ($uri === "/profil") {
    require_once "template/utilisateurs/profil.php";
}elseif ($uri === "/modifyProfil") {
    if(isset($_POST["btnEnvoi"])){
        updateUser($pdo);
        reloadSession($pdo); //windows R
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
elseif ($uri === "/discusion") {
    $users = recupAllUserWithoutHim($pdo);
    require_once "template/utilisateurs/conversation.php";
}

elseif (str_contains($uri,"/discusionWithUser")) {
    selectDiscu($pdo);
    $conversation = selectAllConversation($pdo); 
    if(empty($conversation)){
        createConversationUser($pdo);
        header("location:/chat.php");
    }else {
        createConversation($pdo);
    }
    require_once "template/utilisateurs/chat.php";
}

elseif (str_contains($uri,"/discusionWithGroupe")) {
    $userId = $pdo->lastinsertId(); // recuperer le derniere Id de la table 
        for ($i = 0; $i < count($_POST["discU"]); $i++) {
            $utilisateurConversationId = $_POST["discuter"][$i];
            createConversationUser($pdo, $userId, $utilisateurConversationId); 
        }
        header("location:/chatGrouper.php");
        $conversation = selectAllConversation($pdo); 
        require_once "template/utilisateurs/chatGrouper.php";
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
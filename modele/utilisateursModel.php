<?php

function createUser($pdo)
{
    try {
        $query = "insert into user (nomUser, prenomUser, loginUser, Mot_de_passeUser, role, emailUser) values (:nomUser, :prenomUser, :loginUser, :Mot_de_passeUser, :role, :emailUser )";
        $createUser = $pdo->prepare($query);
        $createUser->execute([
         "nomUser" => $_POST["Nom"],
         "prenomUser" => $_POST["Prenom"],
         "loginUser" => $_POST["Login"],
         "Mot_de_passeUser" => $_POST["Mot_de_passe"],
         'role' => 'user',
         "emailUser" => $_POST["Email"],
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function connectUser($pdo){
    try {
        $query = "select * from user where loginUser=:loginUser and Mot_de_passeUser= :Mot_de_passeUser";
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'loginUser' => $_POST['Login'],
            'Mot_de_passeUser' => $_POST['Mot_de_passe']
        ]);
        $user=$connectUser -> fetch();
       
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function updateUser($pdo)
{
    try {
        $query = "UPDATE user SET nomUser = :nomUser, prenomUser = :prenomUser, Mot_de_passeUser = :Mot_de_passeUser, emailUser = :emailUser WHERE userId = :userId";
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'nomUser' => $_POST["Nom"],
            'prenomUser' => $_POST["Prenom"],
            'Mot_de_passeUser' => $_POST["Mot_de_passe"],
            'emailUser' => $_POST["Email"],
            'userId' => $_SESSION["user"]->userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function reloadSession($pdo)
{
    try {
        $query = "select * from user where userId = :userId";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'userId' => $_SESSION["user"]->userId
        ]);
        $user=$chercheUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteProfil($pdo)
{
    try {
        $query = "delete from user where userId = :userId";
        $deleteProfil = $pdo->prepare($query);
        $deleteProfil->execute([
            'userId' => $_SESSION["user"]->userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
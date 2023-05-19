<?php

function selectAllCombattant($pdo)
{
    try {
        $query = "select * from combattant";
        $selectAllCombattant = $pdo->prepare($query);
        $selectAllCombattant->execute();
        $combattants = $selectAllCombattant->fetchAll();
        return $combattants;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectAllCombattantUsers($pdo)
{
    try {
        $query = "delete * from user";
        $selectAllCombattantUsers = $pdo->prepare($query);
        $selectAllCombattantUsers->execute([
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectLeCombattant($pdo)
{
    
    try {
        
        $query = "select * from combattant where combattantId = :combattantId";
        
        $selectLeCombattant = $pdo->prepare($query);
        $selectLeCombattant->execute([
            'combattantId' => $_GET['combattantId']
        ]);
        $combattant = $selectLeCombattant->fetch();
        return $combattant;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteAllCombattantUsers($pdo)
{
    try {
        $query = "delete from user WHERE userId = :userId";
        $deleteAllCombattantUsers = $pdo->prepare($query);
        $deleteAllCombattantUsers->execute([
            'userId' => $_SESSION["user"]->userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectCategorieCombattant($pdo)
{
    try {
        $query = 'select * from categorie where categorieId in (select categorieId from combattant_categorie where combattantId = :combattantId);';
        $selectCategorie = $pdo->prepare($query);
        $selectCategorie->execute([
            'combattantId' => $_GET["combattantId"]
        ]);
        $categories = $selectCategorie->fetchAll();
        return $categories;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectCompetenceCombattant($pdo)
{
    try {
        $query = 'select * from competence where competenceId in (select competenceId from combattant_competence where combattantId = :combattantId);';
        $selectcompetence = $pdo->prepare($query);
        $selectcompetence->execute([
            'combattantId' => $_GET["combattantId"]
        ]);
        $competences = $selectcompetence->fetchAll();
        return $competences;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function createCombattant($pdo)
{
    try {
        $query = 'insert into combattant (combattantNom, combattantPrenom, combattantAge, combattantDescription, combattantIllustration, userId) values (:combattantNom, :combattantPrenom, :combattantAge, :combattantDescription, :combattantIllustration, :userId)';
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'combattantNom' => $_POST["nom"],
            'combattantPrenom' => $_POST["prenom"],
            'combattantAge' => $_POST["age"],
            'combattantDescription' => $_POST["description"],
            'combattantIllustration' => $_POST["illustration"],
            'userId' => $_SESSION["user"]-> userId,
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function modifyCombattant($dbh)
{
    try {
        $query = 'update combattant set combattantNom = :combattantNom, combattantPrenom = :combattantPrenom, combattantDescription = :combattantDescription, combattantIllustration = :combattantIllustration where userId = :userId';
        $modif = $pdo->prepare($query);
        $modif->execute([
            'combattantNom' => $_POST["nom"],
            'combattantPrenom' => $_POST["adresse"],
            'combattantDescription' => $_POST["ville"],
            'combattantIllustration' => $_POST["code_postal"],
            'userId' => $_GET["user"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function delete1Combattant($pdo)
{
    try {
        $query = 'delete from combattant where combattantId = :combattantId';
        $delete1 = $pdo->prepare($query);
        $delete1->execute([
            'combattantId' => $combattantId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
?>

<!--function deleteAllCombattantFomUser($pdo)
{
    try {
        $query = 'delete from combattant where utilisateurId = :utilisateurId';
        $deleteAll = $pdo->prepare($query);
        $deleteAll->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}-->
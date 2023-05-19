<?php

function selectAllCategories($pdo)
{
    try {
        $query = "select * from categorie";
        $selectAllCategories = $pdo->prepare($query);
        $selectAllCategories->execute();
        $categories = $selectAllCategories->fetchAll();
        return $categories;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function createCategorie($pdo, $combattantId, $categorieId)
{
    try {
        $query = "insert into combattant_categorie (combattantId, categorieId) values (:combattantId, :categorieId)";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'combattantId' => $combattantId,
            'categorieId' => $categorieId 
        ]);
        $categories = $ajouteUser->fetchAll();
        return $categories;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deletecategorieCombattant($pdo)
{
    try {
        $query = 'delete from combattant_categorie where combattantId = :combattantId';
        $delete1 = $pdo->prepare($query);
        $delete1->execute([
            'combattantId' => $combattantId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
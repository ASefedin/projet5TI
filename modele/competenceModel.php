<?php

function selectAllCompetence($pdo)
{
    try {
        $query = "select * from competence";
        $selectAllCompetence = $pdo->prepare($query);
        $selectAllCompetence->execute();
        $competences = $selectAllCompetence->fetchAll();
        return $competences;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function createCompetence($pdo, $combattantId, $competenceId)
{
    try {
        $query = "insert into combattant_competence (combattantId, competenceId) values (:combattantId, :competenceId)";
        $createCompetence = $pdo->prepare($query);
        $createCompetence->execute([
            'combattantId' => $combattantId,
            'competenceId' => $competenceId 
        ]);
        $competences = $createCompetence->fetchAll();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deletecompetenceCombattant($pdo)
{
    try {
        $query = 'delete from combattant_competence where combattantId = :combattantId';
        $delete2 = $pdo->prepare($query);
        $delete2->execute([
            'combattantId' => $_GET['combattantId']
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
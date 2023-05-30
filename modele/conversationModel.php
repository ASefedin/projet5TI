<?php

function selectAllConversation($pdo)
{
    try {
        $query = "select * from conversation";
        $selectAllConversation = $pdo->prepare($query);
        $selectAllConversation->execute();
        $conversation = $selectAllConversation->fetchAll(); 
        return $conversation;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function createConversation($pdo)
{
    try {
        $query = "insert into conversation (conversationId, conversationType) values (:conversationId, :conversationType = 'binaire')";
        $createConversation = $pdo->prepare($query);
        $createConversation->execute([
            'conversationId' => $_POST["conversationId"],
            'conversationType' => 'binaire'
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
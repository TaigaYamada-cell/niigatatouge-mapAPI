<?php
require_once("users.php");
function getUserPost(){
    $pdo = connect();
    try{
        $statement = $pdo->prepare('SELECT * FROM userpost');
        $statement->execute();
        
    } catch (PDOException $e){
        $e->getMessage();
    }
    return $statement;
}

function getCluePost(){
    $pdo = connect();
    try{
        $statement = $pdo->prepare('SELECT * FROM cluepost');
        $statement->execute();
    } catch (PDOException $e){
        $e->getMessage();
    }
    return $statement;
}


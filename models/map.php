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

function search($data){
    $pdo = connect();
    try{
        $statement = $pdo->prepare("SELECT * FROM cluepost WHERE title LIKE :title");
        $statement->bindValue(':title', escape($data), PDO::PARAM_STR);
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        return "検索に失敗しました";
    }
    return $row;
}
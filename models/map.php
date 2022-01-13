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
        $statement->bindValue(':title', '%'.escape($data).'%', PDO::PARAM_STR);
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        return "検索に失敗しました";
    }
    return $row;
}

function registerComment($comment){
        if(!empty($comment["text"])){
        $pdo = connect();
        try{
            $statement = $pdo->prepare("INSERT INTO comment(text, user_id, post_id, created_at) VALUES (:text, :user_id, :post_id, CURRENT_TIMESTAMP)");
            $statement->bindValue(":text", $comment["text"], PDO::PARAM_STR);
            $statement->bindValue(":user_id", $comment["user_id"], PDO::PARAM_STR);
            $statement->bindValue(":post_id", $comment["post_id"], PDO::PARAM_INT);
            $statement->execute();
            echo "コメント登録に成功しました。<br>前の画面に戻ってください。";
        } catch(PDOExcepion $e){
            $e->getMessage();
        }
    }elseif(empty($comment["user_id"])){
        echo "コメントにログインが必要です。<br>前の画面に戻ってください。";
    }else{
        echo "空欄はコメント登録できません。<br>前の画面に戻ってください。";
    }
}

function getComment($id){
    $pdo = connect();
    try{
        $statement = $pdo->prepare("SELECT* FROM comment WHERE post_id = :post_id");
        $statement->bindValue(":post_id", $id, PDO::PARAM_INT);
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }catch(PDOException $e){
        return "コメント取得に失敗しました";
    }
}
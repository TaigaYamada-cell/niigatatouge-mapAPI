<?php
function connect(){
    try{
        $pdo = new PDO('mysql:host=localhost; dbname=niigatatouge; charset=utf8mb4',
        'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

function escape($val){
    return htmlspecialchars($val, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function registerUser(array $data){
    //空欄チェック
    if(trim($data["mail"]) === '' || trim($data["name"]) === ''){
        echo "メールアドレスまたはユーザーIDは必須項目です。";
        return;
    }

    $pdo = connect();//DB接続

    $hashedPass = password_hash($data["pass"], PASSWORD_DEFAULT);//パスワードのハッシュ化

    

//DBに情報を登録    
    $statement = $pdo->prepare('INSERT INTO user(created, name, mail, password)
    VALUES (CURRENT_TIMESTAMP, :name, :mail, :password)');
    $statement->bindValue(':name',$data['name'], PDO::PARAM_STR);
    $statement->bindValue(':mail',$data['mail'], PDO::PARAM_STR);
    $statement->bindValue(':password',$hashedPass, PDO::PARAM_STR);
      
    // 実行
    $response = $statement->execute();
 
    // 実行に失敗した場合->エラー表示
    if ($response === false) {
        echo 'エラー';
        return;
    }
    
    return $response;
}
//TODO:バリデーションチェック

function findUser(array $data){
    //todo:バリデーションチェック
    session_start();
    $pdo = connect();
    try{
    $statement = $pdo->prepare('SELECT * FROM user WHERE mail = :mail');
    $statement->bindvalue(':mail', $data["mail"], PDO::PARAM_STR);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e){
        $e->getMessage();
    }
    
    if(password_verify($data["pass"], $row["password"])){
        $_SESSION["MAIL"] = $data["mail"];
        $_SESSION["name"] = $data["name"];
    } else{
        echo "メールアドレスまたはパスワードが違います";
        return;
    }
    
    return true;
}

function postToMap(array $data){
    $pdo = connect();
    try{
        $statement = $pdo->prepare('INSERT INTO userpost(created, user, name, title, lat, lng, text)
        VALUES (CURRENT_TIMESTAMP, :user, :name, :title, :lat, :lng, :text)');
        $statement->bindValue(':user', $data["user"], PDO::PARAM_STR);
        $statement->bindValue(':name', $data["name"], PDO::PARAM_STR);
        $statement->bindValue(':title', $data["title"], PDO::PARAM_STR);
        $statement->bindValue(':lat', $data["lat"], PDO::PARAM_STR);
        $statement->bindValue(':lng', $data["lng"], PDO::PARAM_STR);
        $statement->bindValue(':text', $data["text"], PDO::PARAM_STR);
        $statement->execute();
    } catch(PDOException $e){
        $e->getMessage();
        return;
    }
    return true;
}

?>
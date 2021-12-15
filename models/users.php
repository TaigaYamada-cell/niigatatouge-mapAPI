<?php
function registerUser($data){
//DB接続
    try{
        $pdo = new PDO('mysql:host=localhost; dbname=niigatatouge; charset=utf8mb4',
        'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        echo "接続に失敗しました";
    }
        
    
//パスワードのハッシュ化
    $hashedPass = password_hash($data["pass"], PASSWORD_DEFAULT);

    

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
    }
    
    return $response;
}
//TODO:バリデーションチェック
?>
<?php
require_once("../models/connect.php");

function hashPass(string $pass) {
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    return $hashedPass;
}

try {
$pass = hashPass($_POST['pass']);
$pdo = connect();
$statement = $pdo->prepare('INSERT INTO user(created, name, mail, password)
 VALUES (CURRENT_TIMESTAMP, :name, :mail, :password)');
$statement->bindValue(':name',$_POST['name'], PDO::PARAM_STR);
$statement->bindValue(':mail',$_POST['mail'], PDO::PARAM_STR);
$statement->bindValue(':password',$pass, PDO::PARAM_STR);
$statement->execute();
echo 'アカウント登録に成功しました。';
} catch(PDOException $e){
    echo "失敗しました。ID:".$id;
    $e->getMessage();
}
//TODO:登録したメールアドレス宛に完了メールを送信する

?>


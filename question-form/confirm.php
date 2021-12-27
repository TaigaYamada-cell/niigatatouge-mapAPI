<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>最終確認</title>
</head>
<body>
    <h1>下記の内容で登録しました。</h1>
        <p>■名前</p>
        <p><?=$_POST["name"]?></p>
        <p>■メールアドレス</p>
        <p><?=$_POST["email"]?></p>
        <p>■質問の内容</p>
        <p><?=$_POST["category"]?></p>
        <p>■詳しい内容</p>
        <p><?=$_POST["text"]?></p>
        
<?php
function connect(){
try {
    $pdo = new PDO('mysql:host=localhost; dbname=question-form; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
} catch (PDOException $e){
    echo '接続に失敗しました';
}
}

try{
$pdo = connect();
$statement = $pdo->prepare('INSERT INTO questions(created, name, mail, category, text)
VALUES(CURRENT_TIMESTAMP, :name, :mail, :category, :text)');
$statement->bindValue(':name', $_POST["name"], PDO::PARAM_STR);
$statement->bindValue(':mail', $_POST["email"], PDO::PARAM_STR);
$statement->bindValue(':category', $_POST["category"], PDO::PARAM_STR);
$statement->bindValue(':text', $_POST["text"], PDO::PARAM_STR);
$statement->execute();
$id = $pdo->lastInsertId();
echo '質問を登録しました。IDは'.$id.'です';
} catch (PDOException $e){
    echo '質問の登録に失敗しました';
    $e->getMessage();
}



?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
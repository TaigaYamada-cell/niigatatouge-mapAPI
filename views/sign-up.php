<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録-新潟峠</title>
</head>
<body>
    
    <h1>会員登録はこちらから！</h1>
    <form action="../controllers/sign-up.php" method="POST">
        <p>■ユーザーID</p>
        <input type="text" name="name">
        <p>■メールアドレス</p>
        <input type="mail" name="mail">
        <p>■パスワード</p>
        <input type="password" name="pass">
        <input type="submit" name="submit" value="登録する">
    </form>
    
</body>
</html>
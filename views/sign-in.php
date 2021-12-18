<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サインイン</title>
</head>
<body>
    <form action="../controllers/sign-in.php" method="POST">
        <p>■メールアドレス</p>
        <input type="text" name="mail">
        <p>■パスワード</p>
        <input type="password" name="pass">
        <p>■ユーザーID</p>
        <input type="text" name="name">
        <input type="submit" name="submit" value="ログインする">
    </form>
</body>
</html>
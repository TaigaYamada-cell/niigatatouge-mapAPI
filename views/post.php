<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マップ登録</title>
</head>
<body>
    <form action="post.php" method="POST">
    <p>■地点の名称</p>
    <input type="text" name="title">
    <p>■緯度</p>
    <input type="number" step="0.000000000000000001" name="lat">
    <p>■経度</p>
    <input type="number" step="0.000000000000000001" name="lng">
    <p>■コメント/説明</p>
    <textarea name="text" cols="30" rows="10"></textarea>
    <input type="submit" name="submit" value="登録する">
    </form>
</body>
</html>
<?php
require_once('memberConfig.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Twitterログイン完了！</h1>
    <?php
    //ユーザー情報を取得
    $objTwUserInfo = $objTwitterConection->get("account/verify_credentials");
    $_SESSION["name"] = $_SESSION["twAccessToken"]["screen_name"];
?>
    <p><strong><?php echo ($_SESSION["name"]); ?></strong>でログインしました</p>
    <a href="../controllers/map.php">ホームページへ移動</a>
</body>
</html>


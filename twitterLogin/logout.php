<?php
##############################################
### 初期設定

//セッションスタート
session_start();

//文字セット
header("Content-type: text/html; charset=utf-8");

//セッション変数を全て解除
$_SESSION = array();
$_COOKIE = array();

//クッキー削除
setcookie("PHPSESSID", '', time() - 1800, '/');

//セッションを破棄する
session_destroy();
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>タイトル</title>
<meta http-equiv="Content-Style-Type" content="text/css">
</head>

<h2>Twitter アカウント ログアウト</h2>

<?php
echo "ログアウトしました。"; 
echo "<a href='../controllers/sign-in.php'>ログインへ</a>";
?>

</body>
</html>
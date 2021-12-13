<?php
//メールアドレスとパスワードをチェック。整合がとれたら投稿ページへ移動
require_once("../models/connect.php");

try {
    $pdo = connect();

}
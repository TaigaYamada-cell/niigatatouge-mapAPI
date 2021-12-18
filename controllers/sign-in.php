<?php
//メールアドレスとパスワードをチェック。整合がとれたら投稿ページへ移動
require_once("../models/users.php");

if(isset($_POST["mail"]) && isset($_POST["pass"])){
    $data = [
        "mail" => $_POST["mail"],
        "pass" => $_POST["pass"]
    ];
    if(findUser($data)){
        header('Location: ../map.php');
        exit;
    }
}

require_once "../views/sign-in.php";

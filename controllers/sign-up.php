<?php
require_once("../models/users.php");
require_once("../twitterLogin/login.php");

if(isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["pass"])){
    $data = [
        "name" => $_POST["name"],
        "mail" => $_POST["mail"],
        "pass" => $_POST["pass"]
    ];
    if(registerUser($data)){
    header ('Location: sign-in.php');
    exit;
    }
}


require_once "../views/sign-up.php";
//TODO:登録したメールアドレス宛に完了メールを送信する

?>


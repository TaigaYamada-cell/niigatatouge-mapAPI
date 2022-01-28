<?php
require_once("../models/users.php");
session_start();
//ログインの確認
if(!isset($_SESSION["name"])){
    echo "投稿するにはログインが必要です。";
    echo "ログインは<a href='sign-in.php'>こちら</a>";
}
//送信された値を配列へ格納、postToMap関数を動作
if(isset($_POST["title"]) && isset($_POST["lat"]) && isset($_POST["lng"])){
    $data = [
        "title" => $_POST["title"],
        "lat" => $_POST["lat"],
        "lng" => $_POST["lng"],
        "text" => $_POST["text"],
        "name" => $_SESSION["name"],
        "user" => $_SESSION["MAIL"],
        "type" => $_POST["type"]
    ];
    print_r ($data);
    if(postToMap($data)){
        header('Location: map.php');
        exit;
    }
}

require_once "../views/post.php";
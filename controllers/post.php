<?php
require_once("../models/users.php");
session_start();
if(!isset($_SESSION["MAIL"])){
    echo "投稿するにはログインが必要です。";
    echo "ログインは<a href='sign-in.php'>こちら</a>";
}
print_r($_SESSION);
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
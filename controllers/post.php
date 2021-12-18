<?php
require_once("../models/users.php");
session_start();
if(!isset($_SESSION["MAIL"])){
    echo "投稿するにはログインが必要です。";
    echo "ログインは<a href='sign-in.php'>こちら</a>";
}

if(isset($_POST["title"]) && isset($_POST["lat"]) && isset($_POST["lng"])){
    $data = [
        "title" => $_POST["title"],
        "lat" => $_POST["lat"],
        "lng" => $_POST["lng"],
        "text" => $_POST["text"],
        "user" => $_SESSION["MAIL"]
    ];
    if(postToMap($data)){
        header('Location: ../map.php');
        exit;
    }
}

require_once "../views/post.php";
<?php
require_once "../models/map.php";
//コメント取得、変数に格納
//TODO:自動化
$comments1 = getComment(1);
$comments2 = getComment(2);
$comments3 = getComment(3);
$comments4 = getComment(4);
$comments5 = getComment(5);
$comments6 = getComment(6);


//コメント投稿
if(isset($_POST["text"]) && isset($_POST["post_id"])){
    session_start();
    if(!isset($_SESSION["name"])){
      echo "コメントするためにはログインが必要です。";
      return;
    }
    $comment = [
      "text" => $_POST["text"],
      "user_id" => $_SESSION["name"],
      "post_id" => $_POST["post_id"]
    ];
    
    $result = registerComment($comment);
    exit;
    }
    

require_once "../views/comment.php";

//マイクロフレーム：スリーむ、ルーメン
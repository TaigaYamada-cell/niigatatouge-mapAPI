<?php
require_once "../models/map.php";
require_once "../models/users.php";
//コメント取得、変数に格納
//TODO:自動化
$comments1 = getComment(1);
$comments2 = getComment(2);
$comments3 = getComment(3);
$comments4 = getComment(4);
$comments5 = getComment(5);
$comments6 = getComment(6);

//コメント先ルートの配列
$routes = ["弥彦山スカイライン", "八方台", "県道273号線", "沼越峠", "枝折峠", "岩舟北部広域農道"];
$nOfRoutes = count($routes);

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
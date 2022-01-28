<?php
require_once ('../models/map.php');

////////////////////////////////////////
if($statement = getUserPost()){
  $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

$rows_json = json_encode($rows);
}

if($statement = getCluePost()){
  $cRows = $statement->fetchAll(PDO::FETCH_ASSOC);
  $cRows_json = json_encode($cRows); 
}

//検索キーワードを取得、スポット検索の関数を動かす
$data = $_GET["search-title"];
$row = search($data);
$row_json = json_encode($row);

//コメント処理
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
header('Location: comment.php');
exit;
}


require_once("../views/map.php");
//todo:いいね機能とItta機能
  ?>


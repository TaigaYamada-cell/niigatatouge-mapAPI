<?php
require_once "../models/map.php";


if($statement = getUserPost()){
  $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

$rows_json = json_encode($rows);
}

if($statement = getCluePost()){
  $cRows = $statement->fetchAll(PDO::FETCH_ASSOC);
  $cRows_json = json_encode($cRows); 
}

$data = $_GET["search-title"];
$row = search($data);
$row_json = json_encode($row);

require_once("../views/map.php");
//todo:いいね機能とItta機能
  ?>


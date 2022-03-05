<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>マップ登録</title>
</head>

 
<!-- Google Maps API -->
<script>
var marker = null;
var lat = 37.406872232409405;
var lng = 138.72840041114438;
 
function init() {
  //初期化
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9.5, center: {lat: lat, lng: lng}
  });
 
  document.getElementById('lat').value = lat;
  document.getElementById('lng').value = lng;
 
  //初期マーカー
  marker = new google.maps.Marker({
    map: map, position: new google.maps.LatLng(lat, lng),
  });
 
  //クリックイベント
  map.addListener('click', function(e) {
    clickMap(e.latLng, map);
  });
}
 
function clickMap(geo, map) {
  lat = geo.lat();
  lng = geo.lng();
 
  //小数点以下6桁に丸める場合
  //lat = Math.floor(lat * 1000000) / 1000000);
  //lng = Math.floor(lng * 1000000) / 1000000);
 
  document.getElementById('lat').value = lat;
  document.getElementById('lng').value = lng;
 
  //中心にスクロール
  map.panTo(geo);
 
  //マーカーの更新
  marker.setMap(null);
  marker = null;
  marker = new google.maps.Marker({
    map: map, position: geo 
  });
  
}
</script>
<body onload="javascript:init();">
<?php require("header.html");?>
<div class="container">
    <form action="post.php" method="POST">
    <div class="form-group">
        <label for="FormControlInput1" class="form-label">地点の名称</label>
        <input type="text" name="title" class="form-control" id="FormControlInput1">
    </div>
    <div class="form-group">
        <label for="FormControlInput2" class="form-label">緯度</label>
        <input type="number" class="form-control" id="lat" name="lat" value="">
    </div>
    <div class="form-group">
        <label for="FormControlInput3" class="form-label">経度</label>
        <input type="number" class="form-control" id="lng" name="lng" value="">
    </div>
    <div id="map" style="height: 500px; margin: 20px;"></div>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfxvP5VnzlIsgUG-3ZM1YhU2liLKVau64&callback=initMap">
    </script>    
    <div class="form-group">
        <label for="FormControlInput4" class="form-label">コメント/説明</label>
        <textarea name="text" cols="30" rows="4" class="form-control" id="FormControlInput4"></textarea>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input type="radio" id="road" class="form-check-input" value="road" name="type" checked>
            <label class="form-check-label" for="road">Road</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="spot" type="radio" value="spot" name="type">
            <label for="spot">Spot</label>
        </div>
    </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" class="btn btn-success" name="submit" value="登録する">
        </div>
    
    </form>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
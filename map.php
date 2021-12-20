<?php
require_once "models/map.php";


if($statement = getUserPost()){
  $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

$rows_json = json_encode($rows);
}

if($statement = getCluePost()){
  $cRows = $statement->fetchAll(PDO::FETCH_ASSOC);
  $cRows_json = json_encode($cRows); 
}
  ?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"> 
<script>
    var map;

function initialize() {
    var latlng = new google.maps.LatLng(37.406872232409405, 138.72840041114438);
    var opts = {
      zoom: 7.4,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    let map = new google.maps.Map(document.getElementById("map"), opts);


  let marker= [];
  let userMarker = [];
  let content_html = [];
  let userContent = [];
  let infowindow = [];
  let userInfowindow = [];
  let userMapdata = [];
  let userCurrentinfowindow = null;
  let currentinfoWindow = null;
  let comp1 ="<div style='display: flex;'><div><img src='img/favourite.png' style='width:20px;'><img src='img/favourite.png' style='width:20px;'><img src='img/favourite.png' style='width:20px;'><img src='img/favourite.png' style='width:20px;'><img src='img/favourite.png' style='width:20px;'><div><img src=";

    //jsonデコード
    let param = JSON.parse('<?php echo $rows_json; ?>');  
    console.log(param);

    let cParam = JSON.parse('<?php echo $cRows_json; ?>');
    console.log(cParam);
    
    for(i=0; i<param.length;i++){
      userContent.push("<h3>" + param[i]["title"] + "</h3><p>" + param[i]["text"] + "</p>" + "<p>" + param[i]["name"] + "による投稿" + "</p>");
      let imgPath;
      if (param[i]["type"] === "road"){
        imgPath = "img/pin.png";
      } else {
        imgPath = "img/google-maps.png"
      }
    let userMarkerLatLng = new google.maps.LatLng({lat: Number(param[i]["lat"]), lng: Number(param[i]['lng'])});
    userMarker[i] = new google.maps.Marker({
      position: userMarkerLatLng,
      map: map,
      icon: {
        url: String(imgPath),
        scaledSize: new google.maps.Size(40, 40)
      }
    });
    userInfowindow[i] = new google.maps.InfoWindow({
      content: String(userContent[i])
    });
    userMarkerEvent(i);
    }

    function userMarkerEvent(i) {
    userMarker[i].addListener('click', function(){
      if(currentinfoWindow){
        currentinfoWindow.close();
      }
      userInfowindow[i].open(map, userMarker[i]);
      currentinfoWindow = userInfowindow[i];
      map.setZoom(14);


      })
    }

  for(i=0; i<cParam.length; i++){
    let markerLatLng = new google.maps.LatLng({lat: Number(cParam[i]['lat']), lng: Number(cParam[i]['lng'])});
    marker[i] = new google.maps.Marker({
      position: markerLatLng,
      map: map,
      icon: {
        url: "img/place.png",
        scaledSize: new google.maps.Size(40, 40)
      }
    });
    let markerContents = "<div><h3>" + cParam[i]["title"] + "</h3>"+ comp1 + cParam[i]["img"] + " style='width:100px'></div></div><p>"+ cParam[i]["content"]+"<br><a href="+cParam[i]["link"]+">ブログ記事</a></p></div>";
    infowindow[i] = new google.maps.InfoWindow({
      content: markerContents
    });
    
    markerEvent(i);
  }




  function markerEvent(i) {
    marker[i].addListener('click', function(){
      if(currentinfoWindow){
        currentinfoWindow.close();
      }
      infowindow[i].open(map, marker[i]);
      currentinfoWindow = infowindow[i];
      map.setZoom(14);


      })
    }


}

 
</script>




    <title>Google Maps API サンプル</title>
  </head>

  <body onload="initialize()">





  <p>Google Maps APIを使ったサンプルです。</p>
  <a href="controllers/post.php">投稿はこちらから！</a>

<div id="map" style="width:1000px; height:600px"></div>

    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfxvP5VnzlIsgUG-3ZM1YhU2liLKVau64&callback=initMap">
    </script>
    
 
</body>
</html>
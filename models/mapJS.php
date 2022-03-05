<?php
//コメントを変数に格納
$comments1 = getComment(1);
$comments2 = getComment(2);
$comments3 = getComment(3);
$comments4 = getComment(4);
$comments5 = getComment(5);
$comments6 = getComment(6);

//git pushできてないよ
?>
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
  let nameWindow = [];
  let uNameWindow = [];
  let userMapdata = [];
  let userCurrentinfowindow = null;
  let currentinfoWindow = null;
  let comp1 ="<div style='display: flex;'><div><img src='../img/favourite.png' style='width:20px;'><img src='../img/favourite.png' style='width:20px;'><img src='../img/favourite.png' style='width:20px;'><img src='../img/favourite.png' style='width:20px;'><img src='../img/favourite.png' style='width:20px;'><div><img src=";
  
    //jsonデコード
    let param = JSON.parse('<?php echo $rows_json; ?>');  

    let cParam = JSON.parse('<?php echo $cRows_json; ?>');

    let rowParam = JSON.parse('<?php echo $row_json; ?>');



    for(i=0; i<param.length;i++){
      userContent.push("<h3>" + param[i]["title"] + "</h3><p>" + param[i]["text"] + "</p>" + "<p>" + param[i]["name"] + "による投稿" + "</p>");
      let imgPath;
      if (param[i]["type"] === "road"){
        imgPath = "../img/pin(2).png";
      } else {
        imgPath = "../img/pin(1).png"
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

    let uNameContents = param[i]["title"];
    uNameWindow[i] = new google.maps.InfoWindow({
      content: uNameContents
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

    userMarker[i].addListener('mouseover', function(){
      if(currentinfoWindow){
        currentinfoWindow.close();
      }
      uNameWindow[i].open(map, userMarker[i]);
      currentinfoWindow = uNameWindow[i];
      })

      userInfowindow[i].addListener("closeclick", function(){
        map.setZoom(7.4);
      });

      
    }
    

      
  for(i=0; i<cParam.length; i++){
    let markerLatLng = new google.maps.LatLng({lat: Number(cParam[i]['lat']), lng: Number(cParam[i]['lng'])});
    marker[i] = new google.maps.Marker({
      position: markerLatLng,
      map: map,
      icon: {
        url: "../img/pin(2).png",
        scaledSize: new google.maps.Size(40, 40)
      }
    });
    let markerContents = "<div><div><h3>" + cParam[i]["title"] + "</h3>"+ comp1 + cParam[i]["img"] + " style='width:100px'></div></div><p>"+ cParam[i]["content"]+"<br><a href="+cParam[i]["link"]+">ブログ記事</a></div><div class='accordion' id='accordionExample'><div class='accordion-item'><h2 class='accordion-header' id='headingOne'><button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>コメント</button></h2><div id='collapseOne' class='accordion-collapse collapse' aria-labelledby='headingOne' data-bs-parent='#accordionExample'><div class='accordion-body'><div class='form-group'><form action='../controllers/map.php' method='post'><input type='hidden' name='post_id' value='" + cParam[i]["id"] + "'><label for='text'>コメント</label><input type='text' class='form-control' id='text' name='text'><input type='submit' name='submit_comment' class='form-control' value='送信する'></form></div></div></div></div>";

    infowindow[i] = new google.maps.InfoWindow({
      content: markerContents
    });

    let nameContents = cParam[i]["title"];
    nameWindow[i] = new google.maps.InfoWindow({
      content: nameContents
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

      marker[i].addListener('mouseover', function(){
        if(currentinfoWindow){
          currentinfoWindow.close();
        }
        nameWindow[i].open(map, marker[i]);
        currentinfoWindow = nameWindow[i];
      })

      infowindow[i].addListener("closeclick", function(){
        map.setZoom(7.4);
      });
      }


let checkNum = rowParam.length;
if(checkNum == 1){
  let animeOpt = {
          animation: google.maps.Animation.BOUNCE,
        };
  let e = rowParam[0]["id"] -1;
  marker[e].setOptions(animeOpt);


 }

}





 
</script>

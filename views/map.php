
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/map.css">
    <script src="css/map.js"></script>
    
<?php require("../models/mapJS.php"); ?>




  <title>新潟峠</title>
  </head>

  <body onload="initialize()">

<?php require("header.html");?>

<div id="map" style="height: 100vh;"></div>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfxvP5VnzlIsgUG-3ZM1YhU2liLKVau64&callback=initMap">
    </script>
    
 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>マップ登録</title>
</head>
<body>
<?php require("header.html");?>
<div class="container">
    <form action="post.php" method="POST">
    <div class="mb-3">
        <label for="FormControlInput1" class="form-label">地点の名称</label>
        <input type="text" name="title" class="form-control" id="FormControlInput1">
    </div>
    <div class="mb-3">
        <label for="FormControlInput2" class="form-label">緯度</label>
        <input type="number" class="form-control" id="FormControlInput2" step="0.000000000000000001" name="lat">
    </div>
    <div class="mb-3">
        <label for="FormControlInput3" class="form-label">経度</label>
        <input type="number" class="form-control" id="FormControlInput3" step="0.000000000000000001" name="lng">
    </div>
    <div class="mb-3">
        <label for="FormControlInput4" class="form-label">コメント/説明</label>
        <textarea name="text" cols="30" rows="10" class="form-control" id="FormControlInput4"></textarea>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input type="radio" class="form-check-input" value="road" name="type" checked>
            <label class="form-check-label" for="road">Road</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="spot" name="type">
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
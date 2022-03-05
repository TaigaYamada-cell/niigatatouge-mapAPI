<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php require("header.html");?>
    <header>
        <div class="container">
            <h1>投稿別コメント</h1>
        </div>
        <hr>
    </header>
    <section class="container">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        弥彦山スカイライン
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <?php 
            for($i=0; $i<=count($comments1)-1; $i++){
              echo "<span class='author'><strong>".$comments1[$i]["user_id"]."</strong>のコメント</span><p class='comment'>".$comments1[$i]["text"]."</p><p class='date'>".$comments1[$i]["created_at"]."</p>";
            }
        ?>
        <form action="comment.php" method="post" class="form-group">
          <input type="hidden" name="post_id" value="1">
          <label for="text">コメント</label>
          <input type="text" name="text" id="text" class="form-control">
          <input type="submit" value="登録" class="btn btn-primary">
        </form>
        
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        八方台
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <?php 
              for($i=0; $i<=count($comments2)-1; $i++){
                echo "<span class='author'><strong>".$comments2[$i]["user_id"]."</strong>のコメント</span><p class='comment'>".$comments2[$i]["text"]."</p><p class='date'>".$comments2[$i]["created_at"]."</p>";
              }
        ?>
        <form action="comment.php" method="post" class="form-group">
          <input type="hidden" name="post_id" value="2">
          <label for="text">コメント</label>
          <input type="text" name="text" id="text" class="form-control">
          <input type="submit" value="登録" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        県道273号線
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <?php 
      //テンプレートエンジンでXSSを防ぐ必要あり。マイクロフレームワークの集合体がフルスタックふれーうワーク
            for($i=0; $i<=count($comments3)-1; $i++){
              echo "<span class='author'><strong>".$comments3[$i]["user_id"]."</strong>のコメント</span><p class='comment'>".$comments3[$i]["text"]."</p><p class='date'>".$comments3[$i]["created_at"]."</p>";
            }
        ?>
        <form action="comment.php" method="post" class="form-group">
          <input type="hidden" name="post_id" value="3">
          <label for="text">コメント</label>
          <input type="text" name="text" id="text" class="form-control">
          <input type="submit" value="登録" class="btn btn-primary">
        </form>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        沼越峠
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <?php 
            for($i=0; $i<=count($comments4)-1; $i++){
              echo "<span class='author'><strong>".$comments4[$i]["user_id"]."</strong>のコメント</span><p class='comment'>".$comments4[$i]["text"]."</p><p class='date'>".$comments4[$i]["created_at"]."</p>";
            }
        ?>
        <form action="comment.php" method="post" class="form-group">
          <input type="hidden" name="post_id" value="4">
          <label for="text">コメント</label>
          <input type="text" name="text" id="text" class="form-control">
          <input type="submit" value="登録" class="btn btn-primary">
        </form>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFifth">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
        枝折峠
      </button>
    </h2>
    <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <?php 
            for($i=0; $i<=count($comments5)-1; $i++){
              echo "<span class='author'><strong>".$comments5[$i]["user_id"]."</strong>のコメント</span><p class='comment'>".$comments5[$i]["text"]."</p><p class='date'>".$comments5[$i]["created_at"]."</p>";
            }
        ?>
        <form action="comment.php" method="post" class="form-group">
          <input type="hidden" name="post_id" value="5">
          <label for="text">コメント</label>
          <input type="text" name="text" id="text" class="form-control">
          <input type="submit" value="登録" class="btn btn-primary">
        </form>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSixth">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
        岩舟北部広域農道
      </button>
    </h2>
    <div id="collapseSixth" class="accordion-collapse collapse" aria-labelledby="headingSixth" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="container comments">
      <?php 
            for($i=0; $i<=count($comments6)-1; $i++){
                echo "<span class='author'><strong>".$comments6[$i]["user_id"]."</strong>のコメント</span><p class='comment'>".$comments6[$i]["text"]."</p><p class='date'>".$comments6[$i]["created_at"]."</p>";
            }
        ?>
        </div>
        <form action="comment.php" method="post" class="form-group comment-area">
          <input type="hidden" name="post_id" value="6">
          <label for="text">コメント</label>
          <input type="text" name="text" id="text" class="form-control">
          <input type="submit" value="登録" class="btn btn-primary">
        </form>
    </div>
    </div>
  </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
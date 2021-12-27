<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>質問フォーム</title>
</head>
<body>
<?php require("../views/header.html");?>
<div class="container" style="text-align: center;">
    <form action="confirm.php" method="POST">
        <div class="mb-3">
            <label class="form-label">名前</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">メールアドレス</label>
            <input type="mail" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">質問の内容</label>
            <?php $questions = array("記事の内容について","投稿者への質問","調査してほしい道について","その他");?>
            <select name="category" class="form-control">
            <?php 
            foreach($questions as $question){
            echo "<option value='{$question}'>{$question}</option>";
            }
            unset($question);
            ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">詳しい内容</label>
            <textarea name="text" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" value="確認画面へ" class="btn" style="background-color: #35a8aa; color: white;">
        </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
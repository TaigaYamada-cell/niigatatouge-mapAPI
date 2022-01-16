<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>サインイン</title>
</head>
<body>
<div class="shadow-sm p-3 mb-5 bg-body rounded" style="color: #35a8aa">ログイン</div>
<div class="container">
    <div style="width: 100%; text-align: center;">
        <a href="../controllers/map.php"><img src="../img/logo.jpg" alt="logo" class="img-fluid rounded-circle w-25"></a> 
    </div>
    <form action="../controllers/sign-in.php" method="POST">
    <div class="form-group center-label" style="text-align: center;">
            <label for="id" class="form-label">ユーザーID <span class="required">必須</span></label>
            <input type="text" name="name" id="id" class="form-control">
        </div>
        <div class="mb-3" style="text-align: center;">
            <label for="mail" class="form-label">メールアドレス <span class="required">必須</span></label>
            <input type="text" class="form-control" name="mail" id="mail">
        </div>
        <div class="mb-3" style="text-align: center;">
            <label for="pass" class="form-label">パスワード <span class="required">必須</span></label>
            <input type="password" name="pass" id="pass" class="form-control">
        </div>
        
        <div class="mb-3" style="text-align: center;">
        <input type="submit" name="submit" class="btn" style="background-color: #35a8aa; color: white;" value="ログインする">
        </div>
    </form>
    <p class="fw-light" style="text-align: center;">または</p>
    <div style="text-align: center;">
        <a href="../controllers/sign-up.php" class="fw-bold" style="color: #35a8aa">アカウントを作成する</a>
    </div>
    <p class="fw-light" style="text-align: center;">または</p>
    <div style="text-align: center;">
        <a href="<?php echo $sTwitterRequestUrl; ?>" class="fw-bold" style="color: #35a8aa">Twitterでログインする</a>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
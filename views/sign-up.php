<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>会員登録-新潟峠</title>
</head>
<body>
<div class="shadow-sm p-3 mb-5 bg-body rounded" style="color: #35a8aa">会員登録</div>   
<div class="container mt-2">
    <div style="width: 100%; text-align: center;">
        <a href="../controllers/map.php"><img src="../img/logo.jpg" alt="logo" class="img-fluid rounded-circle w-25"></a> 
    </div>
    <div style="text-align: center;">
        <form action="../controllers/sign-up.php" method="POST">
            <div class="mt-3">
                <label class="form-label">ユーザーID <span class="required">必須</span></label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mt-3">
                <label class="form-label">メールアドレス <span class="required">必須</span></label>
                <input type="mail" name="mail" class="form-control">
            </div>
            <div class="mt-3">
                <label class="form-label">パスワード <span class="required">必須</span></label>
                <input type="password" name="pass" class="form-control">
            </div>
            <div class="mt-3">
                <input type="submit" name="submit" value="登録する" class="btn" style="background-color: #35a8aa; color: white;">
            </div>
        </form>
        <p class="fw-light mt-3" style="text-align: center;">または</p>
        <a href="../controllers/sign-in.php" class="fw-bold" style="color: #35a8aa">ログインする</a>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</body>
</html>
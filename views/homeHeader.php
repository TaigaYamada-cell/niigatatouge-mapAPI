<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://niigatatouge.com" style="color: #35a8aa">新潟峠</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../controllers/map.php">ホーム</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controllers/post.php">投稿する</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controllers/comment.php">コメント</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">ログイン/登録</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../controllers/sign-in.php">ログイン</a></li>
                <li><a class="dropdown-item" href="../twitterLogin/logout.php">ログアウト</a></li>
                <li><a class="dropdown-item" href="../controllers/sign-up.php">アカウント作成</a></li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="../question-form/post.php">お問い合わせ</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" name="search-title" placeholder="例,弥彦山" aria-label="Search">
          
          <button class="btn btn-outline-success" type="submit" name="search" id="search" onclick="showHide()">search</button>
          <?php if(isset($_GET["search"])){
            echo "<button class='btn btn-primary' type='submit' name='clear' id='clear'>clear</button>";
            }; ?>          
        </form>
      </div>
    </div>
  </nav>
    

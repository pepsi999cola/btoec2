<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>ECsite</title>
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              スタンダードモデル
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="purchase.php">ミドルタワーPC</a>
              <a class="dropdown-item" href="purchase.php">省スペースPC</a>
              <a class="dropdown-item" href="purchase.php">ゲーミングPC</a>
            </div>
          
        </ul>
      </div>
    </nav>
    <a href="index.php">HOME</a>
    <div style="text-align: right;"><a href="administrator_login.php">管理者ページ</a></div>
    <!-- <div style="text-align: right;"><a href="management_screen.php">管理者ページ</a></div> -->
    <br />
    <!-- <a href="index.php"><img src="img\TopBanner_2020SummerCP_btn.png"></a> -->

    <div class="row">
      <div class="col-md-8">
        <h1>大雨の影響による配達状況について　</h1>
        <p>一部地域において、お荷物の配達に遅れが生じております。 該当地域のお客様にはご迷惑をおかけしますが解除になるまで今しばらくお待ちください。 該当地域は下記URLのリンク先にてお確かめください。</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <h1>夏季休業のお知らせ　</h1>
        <p>誠に勝手ながら、弊社では8月13日（木)～8月16日（日）まで夏季休業とさせていただきます。
          休業期間中はWEBサイトよりご注文やお問い合わせをいただくことは可能でございますが、 弊社からのご返信は8月17日（月）から順次対応をさせていただく形となります。
          また、納期につきましても土日祝日・夏季休業を除く、製品ページに記載している日程以内に出荷とさせていただきます。
          ご迷惑をお掛けいたしますが、何卒ご了承の程いただけますようお願い申し上げます。</p>
      </div>
    </div>
    <div class="card-deck">
      <div class="card">
        <div class="card-body">

          <h5 class="card-title">ミドルタワーPC</h5>
          <a href="purchase.php"><img src="img\index_photo-02.png" alt="次へ"></a>
          <p class="card-text">幅広く自在にカスタマイズ</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">省スペースPC</h5>
          <a href="purchase.php"><img src="img\index_photo-03.png" alt="次へ"></a>
          <p class="card-text">机上に設置してもスペースを有効に使える省スペース型</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">ゲーミングPC</h5>
          <a href="purchase.php"><img src="img\index_photo-04.png" alt="次へ"></a>
          <p class="card-text">高性能なら静音</p>
        </div>
      </div>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
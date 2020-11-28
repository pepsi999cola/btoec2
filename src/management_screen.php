<?php

// セッションをスタートする
session_start();
session_regenerate_id();

// ログインしていないときは、login.phpへリダイレクト
if (empty($_SESSION['user'])) {
    header('Location: ./administrator_login.php');
    exit;
}


?>
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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="management_screen.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adding_product.php">商品を追加</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deleting_product.php">商品を削除更新</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deleting_categry.php">カテゴリー・PCモデルを削除更新</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="pc_option.php">モデルのパーツ選択</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deleting_pc_option.php">モデルのパーツ削除</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orderlist.php">注文リスト</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer_information.php">顧客の情報</a>
                    </li>
                </ul>
            </div>
        </nav>

        </nav>
        <a href="adding_product.php">商品を追加する</a><br />
        <a href="deleting_product.php">商品を削除更新する</a><br />
        <a href="deleting_categry.php">カテゴリー・PCモデルを削除更新</a><br />
        <!-- <a href="pc_option.php">モデルのパーツ選択</a><br />
        <a href="deleting_pc_option.php">モデルのパーツ削除</a><br /> -->
        <a href="orderlist.php">注文リストを確認する</a><br />
        <a href="customer_information.php">顧客の情報を確認する</a><br />
        <a href="password.php">新規ユーザーを追加する</a><br />
        <a href="logout.php">ログアウト</a><br />
    </div>
</body>

</html>
<!-- 商品追加 -->

<!-- 商品削除 -->

<!-- ユーザー情報 -->

<!-- 注文情報 -->
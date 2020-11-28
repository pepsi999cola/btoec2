<?php
require_once('./class/util/SaftyUtil.php');
require_once('./class/config/Config.php');

session_start();
session_regenerate_id();

// ログインしていないときは、login.phpへリダイレクト
if (empty($_SESSION['user'])) {
    header('Location: ./administrator_login.php');
    exit;
}

// ワンタイムトークン
$token = SaftyUtil::generateToken();
try {
} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error/error.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pass</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

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
                    <li class="nav-item">
                        <a class="nav-link" href="orderlist.php">注文リスト</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer_information.php">顧客の情報</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1><span class="text-info">新規ユーザーを追加する</span></h1>
        <form action="password_action.php" method="post" name="form">
            <input type="hidden" name="token" value="<?= $token ?>">
            <div class="form-group">
                <label for="name">userID</label>
                <input type="text" class="form-control" name="password">

            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" name="password2">

            </div>
            <div>
                <input type="button" class="btn btn-primary" value="登録" id="btn" name="btn">
            </div>
        </form>
        <script>
            var btn = document.getElementById('btn');

            btn.addEventListener('click', function() {

                input_message = "パスワードを新規追加しますか？";

                if (window.confirm(input_message)) {
                    document.form.submit();
                }
            })
        </script>
    </div>
</body>

</html>
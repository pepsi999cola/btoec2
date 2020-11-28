<?php
require_once('./class/util/SaftyUtil.php');
require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/Quiz.php');

session_start();
session_regenerate_id();

// ログインしていないときは、login.phpへリダイレクト
if (empty($_SESSION['user'])) {
    header('Location: ./administrator_login.php');
    exit;
}



try {


    $db = new Quiz();
    $list = $db->selectproduct();
    // ワンタイムトークン
    $token = SaftyUtil::generateToken();

    $update = $_POST['preparation_customer_update'];

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
                    <li class="nav-item">
                        <a class="nav-link" href="orderlist.php">注文リスト</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer_information.php">顧客の情報</a>
                    </li>
                </ul>
            </div>
        </nav>

        <h1><span class="text-info">PCモデル名を変更する</span></h1>
        <form action="customer_update.php" method="post">
            <input type="hidden" name="token" value="<?= $token ?>">
            <input type="hidden" name="update" value="<?= $update ?>">
            <div class="form-group">
                <label for="product">性:</label>
                <input type="text" id="first_name" class="form-control" name="first_name" value="<?= $_POST["preparation_customer_first_name"] ?>">
            </div>
            <div class="form-group">
                <label for="product">名:</label>
                <input type="text" id="last_name" class="form-control" name="last_name" value="<?= $_POST["preparation_customer_last_name"] ?>">
            </div>
            <div class="form-group">
                <label for="product">性（カナ）:</label>
                <input type="text" id="first_name_kana" class="form-control" name="first_name_kana" value="<?= $_POST["preparation_customer_first_name_kana"] ?>">
            </div>
            <div class="form-group">
                <label for="product">名（カナ）:</label>
                <input type="text" id="last_name_kana" class="form-control" name="last_name_kana" value="<?= $_POST["preparation_customer_last_name_kana"] ?>">
            </div>
            <div class="form-group">
                <label for="product">メールアドレス:</label>
                <input type="text" id="email" class="form-control" name="email" value="<?= $_POST["preparation_customer_email"] ?>">
            </div>
            <div class="form-group">
                <label for="product">電話番号:</label>
                <input type="text" id="phone_number" class="form-control" name="phone_number" value="<?= $_POST["preparation_customer_phone_number"] ?>">
            </div>
            <div class="form-group">
                <label for="product">郵便番号:</label>
                <input type="text" id="postal_code" class="form-control" name="postal_code" value="<?= $_POST["preparation_customer_postal_code"] ?>">
            </div>
            <div class="form-group">
                <label for="product">住所:</label>
                <input type="text" id="address" class="form-control" name="address" value="<?= $_POST["preparation_customer_address"] ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="更新する" id="btn">
        </form>
        <script>
            var btn = document.getElementById('btn');

            btn.addEventListener('click', function() {


                var product = document.getElementById("first_name").value;
                var product = document.getElementById("last_name").value;
                var product = document.getElementById("first_name_kana").value;
                var product = document.getElementById("last_name_kana").value;
                var product = document.getElementById("email").value;
                var product = document.getElementById("phone_number").value;
                var product = document.getElementById("postal_code").value;
                var product = document.getElementById("address").value;
                input_message = "お客様情報が変更されました";
                alert(input_message);
            })
        </script>
        <br />


    </div>
</body>

</html>
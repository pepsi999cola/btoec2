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
    $list = $db->selectCategry();
    $list2 = $db->selectproduct();
    // ワンタイムトークン
    $token = SaftyUtil::generateToken();

    $update = $_POST['preparation_update'];
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


        <h1><span class="text-info">商品を変更する</span></h1>
        <form action="update.php" method="post" name="form">
            <input type="hidden" name="token" value="<?= $token ?>">
            <input type="hidden" name="update" value="<?= $update ?>">
            <div class="form-group">
                <label for="product">パーツ名:</label>
                <input type="text" id="product" class="form-control" name="product" placeholder="<?= $_POST["preparation_update_options"] ?>">
                <select id="select1a" class="form-control" name="cate">
                    <?php foreach ($list as $x) : ?>
                        <option value="<?= $x['id']; ?>"<?php if($_POST["preparation_update_categry"] == $x['categry']){echo "selected";}?>><?= $x['categry']; ?></option>
                    <?php endforeach; ?>
                </select>
                <select id="select1a" class="form-control" name="product_id">
                    <?php foreach ($list2 as $x) : ?>
                        <option value="<?= $x['id']; ?>"<?php if($_POST["preparation_update_item_name"] == $x['item_name']){echo "selected";}?>><?= $x['item_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="price">価格:</label>
                <input type="text" id="price" class="form-control" name="price" placeholder="<?= $_POST["preparation_update_price"] ?>">
            </div>
            <input type="button" class="btn btn-primary" value="更新する" id="btn">
        </form>
        <script>
            var btn = document.getElementById('btn');

            btn.addEventListener('click', function() {

                // if (window.confirm("よろしいですか？")) {
                var product = document.getElementById("product").value;
                var price = document.getElementById("price").value;
                input_message = " パーツを「" + product + "」に\n  価格を「" + price + "円」に \n変更しますか？";
                //alert(input_message);
                // }
                if (window.confirm(input_message)) {
                   // return false;
                    document.form.submit();
                }
            })
        </script>
        <br />


    </div>
</body>

</html>
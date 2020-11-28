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
                    <li class="nav-item">
                        <a class="nav-link" href="orderlist.php">注文リスト</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer_information.php">顧客の情報</a>
                    </li>
                </ul>
            </div>
        </nav>


        <h1><span class="text-info">商品を追加する</span></h1>
        <form action="execute_product.php" method="post" name ="form">
            <input type="hidden" name="token" value="<?= $token ?>">
            <div class="form-group">
                <label for="text1">パーツ名:</label>
                <input type="text" id="text1" class="form-control" name="text1">
                <select id="option2" class="form-control" name="cate">
                    <?php foreach ($list as $x) : ?>
                        <option value="<?= $x['id']; ?>"><?= $x['categry']; ?></option>

                    <?php endforeach; ?>
                </select>
                <select id="pcmodel2" class="form-control" name="product">
                    <?php foreach ($list2 as $x) : ?>
                        <option value="<?= $x['id']; ?>"><?= $x['item_name']; ?></option>

                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="passwd1">価格:</label>
                <input type="text" id="passwd1" class="form-control" name="price">
            </div>
            <input type="button" class="btn btn-primary" value="追加する" id="btn">
        </form>
        <script>
            var btn = document.getElementById('btn');

            btn.addEventListener('click', function() {
                var text1 = document.getElementById("text1").value;
                var passwd1 = document.getElementById("passwd1").value;
                var option = "<?= $list[0]['categry']; ?>";
                var pcmodel = "<?= $list2[0]['item_name']; ?>";
                input_message = "オプション「" + text1 + "」を\n  「" + option + "」\n 「" + pcmodel + "」に\n「" + passwd1 + "円」で \n追加しますか？";
                //alert(input_message);
                if (window.confirm(input_message)) {
                    document.form.submit();
                }
            })
        </script>
        <br />


        <h1><span class="text-info">カテゴリーを追加する</span></h1>
        <form action="execute_category.php" method="post">
            <input type="hidden" name="token" value="<?= $token ?>">
            <div class="form-group">
                <label for="text1">追加するカテゴリー:</label>
                <input type="text" id="categry_categry" class="form-control" name="categry">
            </div>
            <input type="submit" class="btn btn-primary" value="追加する" id="categry">
        </form>
        <script>
            var btn = document.getElementById('categry');

            btn.addEventListener('click', function() {


                var categry_categry = document.getElementById("categry_categry").value;
                input_message = "カテゴリーに「" + categry_categry + "」 を追加しますか？";
                if (window.confirm(input_message)) {
                    document.form.submit();
                }
            })
        </script>
        <br />

        <h1><span class="text-info">PCモデルを追加する</span></h1>
        <form action="execute_pcmodel.php" method="post">
            <input type="hidden" name="token" value="<?= $token ?>">
            <div class="form-group">
                <label for="text1">追加するPCモデル:</label>
                <input type="text" id="pcmodelA" class="form-control" name="pcmodel">
            </div>
            <input type="submit" class="btn btn-primary" value="追加する" id="pcmodel">
        </form>
        <script>
            var btn = document.getElementById('pcmodel');

            btn.addEventListener('click', function() {


                var pcmodel = document.getElementById("pcmodelA").value;
                input_message = "PCモデルに「" + pcmodel + "」 を追加しますか？";
                if (window.confirm(input_message)) {
                    document.form.submit();
                }
            })
        </script>
    </div>
</body>

</html>
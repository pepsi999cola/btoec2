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
// ワンタイムトークン
$token = SaftyUtil::generateToken();
try {

    $db = new Quiz();
    $list = $db->customerselectAll();
    

} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    // $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
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
        <h1><span class="text-info">顧客の情報一覧</span></h1>
        <table class="table">
            <thead class="thead-light table-bordered">
                <tr>
                    <th width="">注文番号</th>
                    <th width="">名前</th>
                    <th width="">名前(カナ)</th>
                    <th width="">メールアドレス</th>
                    <th width="">電話番号</th>
                    <th width="">郵便番号</th>
                    <th width="">住所</th>
                    <th width="">登録日</th>
                    <th>削除</th>
                </tr>

                <?php foreach ($list as $x) : ?>
                    <tr>
                        <td><?php echo $x['id'] ?></td>
                        <td><?php echo $x['first_name'].$x['last_name'] ?></td>
                        <td><?php echo $x['first_name_kana'].$x['last_name_kana'] ?></td>
                        <td><?php echo $x['email'] ?></td>
                        <td><?php echo $x['phone_number'] ?></td>
                        <td><?php echo $x['postal_code'] ?></td>
                        <td><?php echo $x['address'] ?></td>
                        <td><?php echo $x['registration_date'] ?></td>
                        <td>
                            <form action="./delete_customer.php" method="post">
                            <input type="hidden" name="token" value="<?= $token ?>">
                            <input type="hidden" name="id" value="<?= $x['id'] ?>">
                                <input type="submit" name="delete" value="削除" class="delete_btn">
                            </form>
                            <form action="./preparation_customer_update.php" method="post">
                            <input type="hidden" name="token" value="<?= $token ?>">
                            <input type="hidden" name="preparation_customer_first_name" value="<?= $x['first_name'] ?>">
                            <input type="hidden" name="preparation_customer_last_name" value="<?= $x['last_name'] ?>">
                            <input type="hidden" name="preparation_customer_first_name_kana" value="<?= $x['first_name_kana'] ?>">
                            <input type="hidden" name="preparation_customer_last_name_kana" value="<?= $x['last_name_kana'] ?>">
                            <input type="hidden" name="preparation_customer_email" value="<?= $x['email'] ?>">
                            <input type="hidden" name="preparation_customer_phone_number" value="<?= $x['phone_number'] ?>">
                            <input type="hidden" name="preparation_customer_postal_code" value="<?= $x['postal_code'] ?>">
                            <input type="hidden" name="preparation_customer_address" value="<?= $x['address'] ?>">
                            <input type="hidden" name="preparation_customer_update" value="<?= $x['id'] ?>">
                                <input type="submit" name="update" value="更新">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </thead>
        </table>
    </div>
    <script>
        var btn = document.getElementsByClassName('delete_btn');

        for (var i = 0; i < btn.length; i++) {
            btn[i].addEventListener('click', function(event) {
                if (window.confirm("削除してもよろしいですか？")) {
                    this.parentElement.submit();
                }
            });
        }
    </script>

</body>

</html>
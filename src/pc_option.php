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
    $list2 = $db->optionselectAll();

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
        <h1><span class="text-info">PCモデルを選択する</span></h1>
        <form action="option_registration.php" method="post">
            <input type="hidden" name="token" value="<?= $token ?>">
            <div class="form-group">
                <label for="text1">PCモデル:</label>
                <select id="select1a" class="form-control" name="cate">
                    <?php foreach ($list as $x) : ?>
                        <option value="<?= $x['id']; ?>"><?= $x['item_name']; ?></option>

                    <?php endforeach; ?>
                </select>
            </div>

            <h1><span class="text-info">PCモデルの選択可能パーツを選択する</span></h1>
            <table class="table">
                <thead class="thead-light table-bordered">
                    <tr>
                        <th width="">オプション</th>
                        <th width="">カテゴリー</th>
                        <th width="">金額</th>
                    </tr>

                    <?php foreach ($list2 as $x) : ?>
                        <tr>
                            <td><input type="checkbox" name="<?php echo $x['id'] ?>" value="<?php echo $x['id'] ?>" id=""><?php echo $x['options'] ?></td>
                            <td><?php echo $x['categry'] ?></td>
                            <td><?php echo number_format($x['price']) . "円" ?></td>

                        </tr>
                    <?php endforeach; ?>
                </thead>
            </table>
            <input type="submit" value="登録する" class="btn btn-primary">
        </form>
    </div>


</body>

</html>
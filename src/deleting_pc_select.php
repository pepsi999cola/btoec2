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
    $list = $db->pcOptionselect();

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
            
            <h1><span class="text-info">パーツを削除・更新する</span></h1>
            <table class="table">
                <thead class="thead-light table-bordered">
                    <tr>
                        <th width="">パーツ名</th>
                        <th width="150">カテゴリー</th>
                        <th width="120">金額</th>
                        <th width="120">登録日</th>
                        <th>削除</th>
                    </tr>

                    <?php foreach ($list as $x) : ?>
                        <?php if($x['pc_id'] == $_POST['cate']): ?>
                        <tr>
                            <td><?php echo $x['options'] ?></td>
                            <td><?php echo $x['categry'] ?></td>
                            <td><?php echo number_format($x['price']) . "円" ?></td>
                            <td><?php echo $x['registration_date'] ?></td>
                            <td>
                                <form action="./delete_pc_option.php" method="post">
                                <input type="hidden" name="token" value="<?= $token ?>">
                                    <input type="hidden" name="pc_id" value="<?= $x['pc_id'] ?>">
                                    <input type="hidden" name="option_id" value="<?= $x['option_id'] ?>">
                                    <input type="submit" name="delete" value="削除">
                                </form>
                            </td>
                        </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </thead>
            </table>

        </form>
    </div>


</body>

</html>
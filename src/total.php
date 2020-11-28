<?php
require_once('./class/util/SaftyUtil.php');
require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/Quiz.php');

session_start();
session_regenerate_id();
try {

    $db = new Quiz();
    $cpu = $db->selectOption($_POST['cpu']);
    $cpucooler = $db->selectOption($_POST['cpucooler']);
    $board = $db->selectOption($_POST['board']);
    $memory = $db->selectOption($_POST['memory']);
    $ssd = $db->selectOption($_POST['ssd']);
    $gpu = $db->selectOption($_POST['gpu']);

    //オプション名を代入している
    $_SESSION['cpu'] = $cpu['options'];
    $_SESSION['cpucooler'] = $cpucooler['options'];
    $_SESSION['board'] = $board['options'];
    $_SESSION['memory'] = $memory['options'];
    $_SESSION['ssd'] = $ssd['options'];
    $_SESSION['gpu'] = $gpu['options'];

    //オプションの価格を代入している
    $_SESSION['cpu_price'] = $cpu['price'];
    $_SESSION['cpucooler_price'] = $cpucooler['price'];
    $_SESSION['board_price'] = $board['price'];
    $_SESSION['memory_price'] = $memory['price'];
    $_SESSION['ssd_price'] = $ssd['price'];
    $_SESSION['gpu_price'] = $gpu['price'];

    $tax = $db->selectTax();
    // ワンタイムトークン
    $token = SaftyUtil::generateToken();
} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error/error.php');
    exit;
}


// PCモデルの判定
if(isset($_POST['middlepc'])){
    $pcmodel = 1;
}
if(isset($_POST['middlepc'])){
    $pcmodel = 3;
}
if(isset($_POST['gamepc'])){
    $pcmodel = 4;
}



// 合計金額と消費税の計算
$total = $cpu['price']+ $cpucooler['price']+ $board['price']+ $memory['price']+ $ssd['price']+ $gpu['price'];
$taxprice = $total * $tax[0]['tax'] / 100;
$totalprice = $total + $taxprice;

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
                            <a class="dropdown-item" href="#">ミニタワーPC</a>
                            <a class="dropdown-item" href="#">省スペースPC</a>
                        </div>
                    
                    </li>
                </ul>
            </div>
        </nav>
        <a href="index.php">HOME</a><br />
        
        <form action="informationEntry.php" method="post">
        <input type="hidden" name="pcmodel" value="<?= $pcmodel ?>">
        <input type="hidden" name="token" value="<?= $token ?>">
        <input type="hidden" name="total" value="<?= $total ?>">
        <input type="hidden" name="tax" value="<?= $tax[0]['tax'] ?>">
        <input type="hidden" name="totalprice" value="<?= $totalprice ?>">
        <table class="table table-striped">
            <tr>
                <td>CPU</td>
                <td><?= $cpu['options'] ?></td>
                <td><?= number_format($cpu['price']) . '円' ?></td>
            </tr>
            <tr>
                <td>CPUクーラー</td>
                <td><?= $cpucooler['options'] ?></td>
                <td><?= number_format($cpucooler['price']) . '円' ?></td>
            </tr>
            <tr>
                <td>マザーボード</td>
                <td><?= $board['options'] ?></td>
                <td><?= number_format($board['price']) . '円' ?></td>
            </tr>
            <tr>
                <td>メモリ</td>
                <td><?= $memory['options'] ?></td>
                <td><?= number_format($memory['price']) . '円' ?></td>
            </tr>
            <tr>
                <td>SSD</td>
                <td><?= $ssd['options'] ?></td>
                <td><?= number_format($ssd['price']) . '円' ?></td>
            </tr>
            <tr>
                <td>グラフィックボード</td>
                <td><?= $gpu['options'] ?></td>
                <td><?= number_format($gpu['price']) . '円' ?></td>
            </tr>
            <tr>
                <td>合計金額(税抜き)</td>
                <td></td>
                <td><?= $total . "円" ?></td>
            </tr>
            <tr>
                <td>消費税</td>
                <td><?= $tax[0]['tax']."%" ?></td>
                <td><?= number_format($taxprice) . '円' ?></td>
            </tr>
            <tr>
                <td>合計金額(税込み)</td>
                <td></td>
                <td><?= $totalprice . "円" ?></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-danger btn-lg" value="ご注文・お客様情報入力へ">
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
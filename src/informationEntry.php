<?php
require_once('./class/util/SaftyUtil.php');
require_once('./class/config/Config.php');

session_start();
session_regenerate_id();

// ワンタイムトークン
$token = SaftyUtil::generateToken();


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
                            <a class="dropdown-item" href="purchase.php">省スペースPC</a>
                            <a class="dropdown-item" href="purchase.php">ゲーミングPC</a>
                        </div>
                    
                    </li>
                </ul>
            </div>
        </nav>
        <a href="index.php">HOME</a><br />

        <form action="order_completed.php" method="post">
            <input type="hidden" name="token" value="<?= $token ?>">
            <input type="hidden" name="pcmodel" value="<?= $_POST['pcmodel'] ?>">
            <input type="hidden" name="total" value="<?= $_POST['total'] ?>">
            <input type="hidden" name="tax" value="<?= $_POST['tax'] ?>">
            <input type="hidden" name="totalprice" value="<?= $_POST['totalprice'] ?>">
            <table class="table table-bordered table-danger">
                <tr>
                    <th>お客様情報入力</th>
            </table>
            お客様情報の入力・お支払い方法の選択・配送方法を選択していただき、確認画面へお進みください。<br /><br />

            <div class="form-group">
                <label for="text1">メールアドレス</label>
                <input type="email" id="text1" class="form-control" name="mail">
                氏名（全角）
                <for class="form-inline">
                    性
                    <input type="text" id="text1" class="form-control" name="sei">
                    名
                    <input type="text" id="text1" class="form-control" name="na">
                </for>
                氏名（全角カタカナ）
                <for class="form-inline">
                    性
                    <input type="text" id="text1" class="form-control" name="seikana">
                    名
                    <input type="text" id="text1" class="form-control" name="nakana">
                </for>


            </div>

            <div class="form-group">
                <label for="text1">郵便番号</label>
                <input type="text" id="text1" class="form-control" name="postal_code">
            </div>
            <div class="form-group">
                <label for="passwd1">住所</label>
                <input type="text" id="address" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label for="textarea1">電話番号</label>
                <input type="text" id="phone_number" class="form-control" name="phone_number">
            </div>
            <!-- <a class="btn btn-danger btn-lg" href="order_completed.php" 　role="button">ご注文完了</a> -->
            <input type="submit" class="btn btn-danger btn-lg" value="ご注文完了">
        </form>
    </div>

</body>
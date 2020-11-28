<?php
require_once('./class/util/SaftyUtil.php');
require_once('./class/config/Config.php');

session_start();
session_regenerate_id();

try {

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
    <a href="index.php">HOME</a><br />
<h1>ユーザーIDとパスワードを入力し管理者画面にログインする</h1>
        <form action="administrator_login_action.php" method="post">
        <input type="hidden" name="token" value="<?= $token ?>">
            <div class="form-group row">
                <label for="text3a" class="col-sm-2 col-form-label">userID</label>
                <div class="col-sm-10">
                    <input type="text" id="text3a" class="form-control" name="pass">
                </div>
            </div>
            <div class="form-group row">
                <label for="text3b" class="col-sm-2 col-form-label">password2</label>
                <div class="col-sm-10">
                    <input type="password" id="text3b" class="form-control" name="pass2">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ログインする</button>
        </form>
    </div>
<?php

// 必要なファイルを読み込む
require_once('./class/util/SaftyUtil.php');
require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/Quiz.php');

// セッションをスタートする
session_start();
session_regenerate_id();

// ログインしていないときは、login.phpへリダイレクト
if (empty($_SESSION['user'])) {
    header('Location: ./administrator_login.php');
    exit;
}


// 日本標準時の現在日付を取得
$dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$date = $dt->format('Y-m-d');

//ワンタイムトークンのチェック
if (!SaftyUtil::isValidToken($_POST['token'])) {
    // エラーメッセージをセッションに保存して、リダイレクトする
    // $_SESSION['msg']['err'] = Config::MSG_INVALID_PROCESS;
    header('Location: ./error/error.php');
    exit;
}

//サニタイズ
$post = SaftyUtil::sanitaize($_POST);

unset($post['token']);

try {
    $pcmodel = new Quiz();

    foreach ($post as $key => $x) {
        if ($key != 'cate') {
            $pcmodel->pcOptioninsert($post['cate'], $x, $date);
        }
    }
    header('Location: pc_option.php');
    exit;
} catch (Exception $e) {
    //エラーメッセージをセッションに保存してエラーページにリダイレクト
    // $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error/error.php');
    exit;
 }

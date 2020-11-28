<?php
// セッションを開始する
session_start();
session_regenerate_id();

require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/util/SaftyUtil.php');
require_once('./class/db/Quiz.php');

// 日本標準時の現在日付を取得
$dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$date = $dt->format('Y-m-d');

$post = SaftyUtil::sanitaize($_POST);

try {


    $db = new Quiz();
    $db->categryupdate($post['update'], $post['product'], $date);
    // 処理が完了したらトップページ（index.php）へリダイレクト
    header('Location: deleting_categry.php');
    exit;
} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    // $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error/error.php');
    exit;
}
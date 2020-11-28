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
    $db->customerupdate($post['update'], $post['email'], $post['first_name'], $post['last_name'], $post['first_name_kana'], 
    $post['last_name_kana'], $post['postal_code'], $post['address'], $post['phone_number'], $date);
    // 処理が完了したらトップページ（index.php）へリダイレクト
    header('Location: customer_information.php');
    exit;
} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    // $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error/error.php');
    exit;
}
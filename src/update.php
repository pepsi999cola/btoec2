<?php
// セッションを開始する
session_start();
session_regenerate_id();

require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/util/SaftyUtil.php');
require_once('./class/db/Quiz.php');

// ログインしていないときは、login.phpへリダイレクト
if (empty($_SESSION['user'])) {
    header('Location: ./administrator_login.php');
    exit;
}


// 日本標準時の現在日付を取得
$dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$date = $dt->format('Y-m-d');

$post = SaftyUtil::sanitaize($_POST);

try {


    $db = new Quiz();
    $db->productupdate($post['update'], $post['product'], $post['cate'], $post['product_id'], $post['price'], $date);
    // 処理が完了したらトップページ（index.php）へリダイレクト
    header('Location: deleting_product.php');
    exit;
} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error/error.php');
    exit;
}

<?php
// セッションを開始する
session_start();
session_regenerate_id();

require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/util/SaftyUtil.php');
require_once('./class/db/Quiz.php');



$post = SaftyUtil::sanitaize($_POST);

try {
    $dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
    $date = $dt->format('Y-m-d h:i:s');

    $db = new Quiz();
    $db->userinsert($post['mail'],$post['sei'],$post['na'],$post['seikana'],$post['nakana'],$post['postal_code'],
    $post['address'],$post['phone_number'],$date);
    $userid = $db->lastInsertId();

    $db->selectOptioninsert($_SESSION['cpu'],$_SESSION['cpucooler'],$_SESSION['board'],$_SESSION['memory'],$_SESSION['ssd'],$_SESSION['gpu'],
    $_SESSION['cpu_price'],$_SESSION['cpucooler_price'],$_SESSION['board_price'],$_SESSION['memory_price'],$_SESSION['ssd_price'],
    $_SESSION['gpu_price'],$date);
    $select_optionid = $db->lastInsertId();

    $db->orderInformationinsert($userid, $_POST['pcmodel'],$select_optionid, $_POST['total'], $_POST['tax'], $_POST['totalprice'], $date);

    // 処理が完了したらトップページ（index.php）へリダイレクト
    header('Location: completed.php');
    exit;

} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error/error.php');
    exit;
}
?>
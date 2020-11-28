<?php
// 必要なファイルを読み込む
require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/Users.php');
require_once('./class/util/SaftyUtil.php');

session_start();
session_regenerate_id();

// ワンタイムトークンのチェック
if (!SaftyUtil::isValidToken($_POST['token'])) {
    // エラーメッセージをセッションに保存して、リダイレクトする
    $_SESSION['msg']['err'] = Config::MSG_INVALID_PROCESS;
    header('Location: ./index.php');
}

// サニタイズ
$post = SaftyUtil::sanitaize($_POST);

try{
$list = new Users();

$list->addUser($post['password'],$post['password2']);


header('Location: ./password.php');
exit;
}catch(Exception $e){
// エラーメッセージをセッションに保存してエラーページにリダイレクト
$_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
header('Location: ./error/error.php');
exit;
}
?>
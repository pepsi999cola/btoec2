<?php
//設定クラス
class Config{
    //データベース関連

    /** @var string 接続データベース名 */
    const DB_NAME = 'ecsite';

    /** @var string データーベースホスト名 */
    const DB_HOST = 'localhost';

    /** @var string データベース接続ユーザー名 */
    const DB_USER ='root';

    /** @var string データベース接続パスワード */
    const DB_PASS = '';


    /** ワンタイムトークン */

    /** @var int openssl_random_pseudo_bytes()で使用する文字列の長さ */
    const RANDOM_PSEUDO_STRING_LENGTH = 32;


    /** メッセージ関連 */
    
    /** @var string ワンタイムトークンが一致しないとき */
    const MSG_INVALID_PROCESS = '不正な処理が行われました。';

    /** @var string 例外がスローされた時のエラーメッセージ */
    const MSG_EXCEPTION = '申し訳ございません。エラーが発生しました。';

    /** @var string ユーザーが重複しているときのメッセージ */
    const MSG_USER_DUPLICATE = 'すでに同じメールアドレスが登録されています。';

    /** @var string ログイン失敗 */
    const MSG_USER_LOGIN_FAILURE = 'メールアドレス、または、パスワードに誤りがあります。';

    /** @var string アップロード失敗 */
    const MSG_UPLOAD_FAILURE = 'アップロードに失敗しました。';

    /** @var string ログイン失敗回数３以上 */
    const MSG_USER_LOGIN_TRY_TIMES_OVER ='ログインできません';
}


?>
<?php

/**
 * ユーザーテーブルクラス
 */
class Users extends Base
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // 親クラスのコンストラクタの呼び出し
        parent::__construct();
    }

    /**
     * 新規ユーザー追加
     *
     * @param string $user
     * @param string $password
     * @param string $name
     * @return bool
     */
    public function addUser(string $pass, string $pass2): bool
    {
        // 同じメールアドレスのユーザーがいないか調べる
        // if (!empty($this->findUserByUser($user))) {
        //     // 同じメールアドレスのユーザーが存在したらfalseを返却
        //     return false;
        // }

        // パスワードをハッシュ化する
        
        $pass2 = password_hash($pass2, PASSWORD_DEFAULT);

        // レコードをインサートする
        $sql = 'insert into password (pass, pass2)';
        $sql .= ' values ';
        $sql .= '(:pass, :pass2)';

        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
        $stmt->bindValue(':pass2', $pass2, PDO::PARAM_STR);
        //$stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();

        // 処理が終了したらtrueを返却
        return true;
    }

    /**
     * メールアドレスとパスワードが一致するユーザーを取得する
     *
     * @param string $user
     * @param string $passord
     * @return array ユーザーの連想配列（一致しないユーザーがなかったときは、空の配列
     */
    public function getUser(string $pass, string $pass2): array
    {
        $rec = $this->findUserByUser($pass);
        // 空の配列が返却されたとき
        if (empty($rec)) {
            return [];
        }

        // パスワードの照合
        if (password_verify($pass2, $rec['pass2'])) {
            // 照合できたら、ユーザーの連想配列を返却
            return $rec;
        }
        // 照合できなかったときは、空の配列を返却
        return [];
    }

    /**
     * 同一のメールアドレスのユーザーを探す
     *
     * @param string $user
     * @return array ユーザーの連想配列
     */
    private function findUserByUser(string $pass): array
    {
        $sql = 'select * from password where pass=:pass';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);

        // falseが返却されたときは、空の配列を返却
        if (empty($rec)) {
            return [];
        }
        return $rec;
    }

    public function getUserInformation(){
        $sql = 'select * from users ';
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        $rec = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rec;
    }
}
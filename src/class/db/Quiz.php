<?php

/**
 * todo_itemテーブルクラス
 */
class Quiz extends Base
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
     * レコードを全件取得する（期限日の古いものから並び替える）
     *
     * @return array
     */
    public function selectAll()
    {
        $sql = 'select *  from quiz where is_deleted=0 order by registration_date';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function optionselectAll()
    // {
    //     $sql = 'select options.id, options.options, options.price, options.registration_date, categry.categry from options join categry
    //     on options.categry_id = categry.id ';

    //     // SQL文を実行する準備
    //     $stmt = $this->dbh->prepare($sql);

    //     // SQLを実行する
    //     $stmt->execute();

    //     // 取得したレコードを連想配列として返却する
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function optionselectAll()
    {
        $sql = 'select options.id, options.options, options.price, options.registration_date,
        categry.categry,options.categry_id,
        product.item_name
        from options 
        join categry on options.categry_id = categry.id
        join product on options.product_id = product.id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function optionselectmidle()
    // {
    //     $sql = 'select pc_option.option_id,
    //     options.options, options.price, options.categry_id, options.id
    //     from pc_option join options on pc_option.option_id = options.id
    //     where pc_id=1';

    //     // SQL文を実行する準備
    //     $stmt = $this->dbh->prepare($sql);

    //     // SQLを実行する
    //     $stmt->execute();

    //     // 取得したレコードを連想配列として返却する
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function optionselectmidle()
    {
        $sql = 'select *  from options where product_id=1';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function optionselectshou()
    {
        $sql = 'select *  from options where product_id=3';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function optionselectgame()
    {
        $sql = 'select *  from options where product_id=4';
        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function orderInformationAll()
    {
        $sql = 'select order_information.id, order_information.total_price, order_information.registration_date,
        users.email, users.first_name, users.last_name, users.phone_number, users.address,
        product.item_name, 
        select_option.cpu, select_option.cpucooler, select_option.board, select_option.memory, select_option.ssd, select_option.gpu
        from order_information join users on order_information.user_id = users.id
        join product on order_information.item_id = product.id
        join select_option on order_information.option_id = select_option.id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function categryselectAll()
    {
        $sql = 'select * from categry';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function productselectAll()
    {
        $sql = 'select * from product';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function customerselectAll()
    {
        $sql = 'select * from users';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function selectUser($user)
    {
        $sql = "select * from users WHERE user LIKE '%" . $user . "%'";

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function selectCategry()
    {
        $sql = 'select *  from categry';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        //$stmt->bindValue(':id', $id, PDO::PARAM_INT);
        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectproduct()
    {
        $sql = 'select * from product';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        //$stmt->bindValue(':id', $id, PDO::PARAM_INT);
        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectTax()
    {
        $sql = 'select * from tax';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        //$stmt->bindValue(':id', $id, PDO::PARAM_INT);
        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function optionselect()
    {
        $sql = 'select * from options';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        //$stmt->bindValue(':id', $id, PDO::PARAM_INT);
        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pcOptionselect()
    {
        $sql = 'select pc_option.pc_id, pc_option.option_id,pc_option.registration_date, product.item_name,
        options.options, options.categry_id, options.price,categry.categry from pc_option 
        join product on pc_option.pc_id = product.id 
        join options on pc_option.option_id = options.id 
        join categry on options.categry_id = categry.id
        ';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        //$stmt->bindValue(':id', $id, PDO::PARAM_INT);
        // SQLを実行する
        $stmt->execute();

        // 取得したレコードを連想配列として返却する
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * 新規レコードをインサートする
     *
     * @param string $expirationDate
     * @param string $todoItem
     * @param integer $isCompleted
     * @return void
     */
    // public function insert(int $user_id, string $quiz_name, string $answer , string $registration_date)
    // {
    //     $sql = 'insert into quiz (';
    //     $sql .= 'user_id,';
    //     $sql .= 'quiz_name,';
    //     $sql .= 'answer,';
    //     $sql .= 'registration_date';

    //     $sql .= ') values (';
    //     $sql .= ':user_id,';
    //     $sql .= ':quiz_name,';
    //     $sql .= ':answer,';
    //     $sql .= ':registration_date';

    //     $sql .= ')';

    //     // SQL文を実行する準備
    //     $stmt = $this->dbh->prepare($sql);

    //     // SQL文の該当箇所に、変数の値を割り当て（バインド）する
    //     $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    //     $stmt->bindValue(':quiz_name', $quiz_name, PDO::PARAM_STR);
    //     $stmt->bindValue(':answer', $answer, PDO::PARAM_STR);
    //     $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);


    //     // SQLを実行する
    //     $stmt->execute();
    // }

    public function categryinsert(string $categry_name, string $registration_date)
    {
        $sql = 'insert into categry (';
        $sql .= 'categry,';
        $sql .= 'registration_date';

        $sql .= ') values (';
        $sql .= ':categry,';
        $sql .= ':registration_date';

        $sql .= ')';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':categry', $categry_name, PDO::PARAM_STR);
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);


        // SQLを実行する
        $stmt->execute();
    }

    public function productinsert(string $options, $categry_id,  $product_id, $price)
    {
        $sql = 'insert into options (';
        $sql .= 'options,';
        $sql .= 'categry_id,';
        $sql .= 'product_id,';
        $sql .= 'price';

        $sql .= ') values (';
        $sql .= ':options,';
        $sql .= ':categry_id,';
        $sql .= ':product_id,';
        $sql .= ':price';

        $sql .= ')';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':options', $options, PDO::PARAM_STR);
        $stmt->bindValue(':categry_id', $categry_id, PDO::PARAM_INT);
        $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->bindValue(':price', $price, PDO::PARAM_INT);


        // SQLを実行する
        $stmt->execute();
    }

    public function pcmodelinsert($item_name, $registration_date)
    {
        $sql = 'insert into product (';
        $sql .= 'item_name,';
        $sql .= 'registration_date';

        $sql .= ') values (';
        $sql .= ':item_name,';
        $sql .= ':registration_date';

        $sql .= ')';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':item_name', $item_name, PDO::PARAM_STR);
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);


        // SQLを実行する
        $stmt->execute();
    }

    public function pcOptioninsert($pc_id, $option_id, $registration_date)
    {
        $sql = 'insert IGNORE into pc_option (';
        $sql .= 'pc_id,';
        $sql .= 'option_id,';
        $sql .= 'registration_date';

        $sql .= ') values (';
        $sql .= ':pc_id,';
        $sql .= ':option_id,';
        $sql .= ':registration_date';

        $sql .= ')';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':pc_id', $pc_id, PDO::PARAM_INT);
        $stmt->bindValue(':option_id', $option_id, PDO::PARAM_INT);
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);


        // SQLを実行する
        $stmt->execute();
    }

    // public function taxinsert($tax, $start_date, $registration_date)
    // {
    //     $sql = 'insert into product (';
    //     $sql .= 'tax,';
    //     $sql .= 'start_date,';
    //     $sql .= 'registration_date';

    //     $sql .= ') values (';
    //     $sql .= ':tax,';
    //     $sql .= ':start_date,';
    //     $sql .= ':registration_date';

    //     $sql .= ')';

    //     // SQL文を実行する準備
    //     $stmt = $this->dbh->prepare($sql);

    //     // SQL文の該当箇所に、変数の値を割り当て（バインド）する
    //     $stmt->bindValue(':tax', $tax, PDO::PARAM_INT);
    //     $stmt->bindValue(':start_date', $start_date, PDO::PARAM_STR);
    //     $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);


    //     // SQLを実行する
    //     $stmt->execute();
    // }

    public function userinsert($email, $first_name, $last_name, $first_name_kana, $last_name_kana, $postal_code, $address, $phone_number, $registration_date)
    {
        $sql = 'insert into users (';
        $sql .= 'email,';
        $sql .= 'first_name,';
        $sql .= 'last_name,';
        $sql .= 'first_name_kana,';
        $sql .= 'last_name_kana,';
        $sql .= 'postal_code,';
        $sql .= 'address,';
        $sql .= 'phone_number,';
        $sql .= 'registration_date';

        $sql .= ') values (';
        $sql .= ':email,';
        $sql .= ':first_name,';
        $sql .= ':last_name,';
        $sql .= ':first_name_kana,';
        $sql .= ':last_name_kana,';
        $sql .= ':postal_code,';
        $sql .= ':address,';
        $sql .= ':phone_number,';
        $sql .= ':registration_date';

        $sql .= ')';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindValue(':first_name_kana', $first_name_kana, PDO::PARAM_STR);
        $stmt->bindValue(':last_name_kana', $last_name_kana, PDO::PARAM_STR);
        $stmt->bindValue(':postal_code', $postal_code, PDO::PARAM_STR);
        $stmt->bindValue(':address', $address, PDO::PARAM_STR);
        $stmt->bindValue(':phone_number', $phone_number, PDO::PARAM_STR);
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);


        // SQLを実行する
        $stmt->execute();
    }

    public function selectOptioninsert(
        $cpu,
        $cpucooler,
        $board,
        $memory,
        $ssd,
        $gpu,
        $cpu_price,
        $cpucooler_price,
        $board_price,
        $memory_price,
        $ssd_price,
        $gpu_price,
        $registration_date
    ) {
        $sql = 'insert into select_option (';
        $sql .= 'cpu,';
        $sql .= 'cpucooler,';
        $sql .= 'board,';
        $sql .= 'memory,';
        $sql .= 'ssd,';
        $sql .= 'gpu,';
        $sql .= 'cpu_price,';
        $sql .= 'cpucooler_price,';
        $sql .= 'board_price,';
        $sql .= 'memory_price,';
        $sql .= 'ssd_price,';
        $sql .= 'gpu_price,';
        $sql .= 'registration_date';

        $sql .= ') values (';
        $sql .= ':cpu,';
        $sql .= ':cpucooler,';
        $sql .= ':board,';
        $sql .= ':memory,';
        $sql .= ':ssd,';
        $sql .= ':gpu,';
        $sql .= ':cpu_price,';
        $sql .= ':cpucooler_price,';
        $sql .= ':board_price,';
        $sql .= ':memory_price,';
        $sql .= ':ssd_price,';
        $sql .= ':gpu_price,';
        $sql .= ':registration_date';

        $sql .= ')';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':cpu', $cpu, PDO::PARAM_STR);
        $stmt->bindValue(':cpucooler', $cpucooler, PDO::PARAM_STR);
        $stmt->bindValue(':board', $board, PDO::PARAM_STR);
        $stmt->bindValue(':memory', $memory, PDO::PARAM_STR);
        $stmt->bindValue(':ssd', $ssd, PDO::PARAM_STR);
        $stmt->bindValue(':gpu', $gpu, PDO::PARAM_STR);
        $stmt->bindValue(':cpu_price', $cpu_price, PDO::PARAM_INT);
        $stmt->bindValue(':cpucooler_price', $cpucooler_price, PDO::PARAM_INT);
        $stmt->bindValue(':board_price', $board_price, PDO::PARAM_INT);
        $stmt->bindValue(':memory_price', $memory_price, PDO::PARAM_INT);
        $stmt->bindValue(':ssd_price', $ssd_price, PDO::PARAM_INT);
        $stmt->bindValue(':gpu_price', $gpu_price, PDO::PARAM_INT);
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);


        // SQLを実行する
        $stmt->execute();
    }

    public function orderInformationinsert($user_id, $item_id, $option_id, $pc_price, $tax_id, $total_price, $registration_date)
    {
        $sql = 'insert into order_information (';
        $sql .= 'user_id,';
        $sql .= 'item_id,';
        $sql .= 'option_id,';
        $sql .= 'pc_price,';
        $sql .= 'tax_id,';
        $sql .= 'total_price,';
        $sql .= 'registration_date';

        $sql .= ') values (';
        $sql .= ':user_id,';
        $sql .= ':item_id,';
        $sql .= ':option_id,';
        $sql .= ':pc_price,';
        $sql .= ':tax_id,';
        $sql .= ':total_price,';
        $sql .= ':registration_date';

        $sql .= ')';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindValue(':item_id', $item_id, PDO::PARAM_INT);
        $stmt->bindValue(':option_id', $option_id, PDO::PARAM_INT);
        $stmt->bindValue(':pc_price', $pc_price, PDO::PARAM_INT);
        $stmt->bindValue(':tax_id', $tax_id, PDO::PARAM_INT);
        $stmt->bindValue(':total_price', $total_price, PDO::PARAM_INT);
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);


        // SQLを実行する
        $stmt->execute();
    }


    public function search($search)
    {
        $sql = "select quiz.id, quiz.quiz_name, quiz.answer, quiz.registration_date, quiz.is_deleted,  users.user
        from quiz join users on quiz.user_id = users.id  
        WHERE quiz.is_deleted=0 AND answer LIKE '%" . $search . "%' OR quiz_name LIKE '%" . $search . "%' OR user LIKE '%" . $search . "%'";
        $stmt = $this->dbh->prepare($sql);
        // $stmt->bindValue(':search', $search, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete(int $id)
    {
        $sql = 'delete from options where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    public function productdelete(int $id)
    {
        $sql = 'delete from product where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    public function categrydelete(int $id)
    {
        $sql = 'delete from categry where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    public function orderlistdelete(int $id)
    {
        $sql = 'delete from order_information where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    public function customerdelete(int $id)
    {
        $sql = 'delete from users where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    public function pcOptiondelete(int $pc_id, int $option_id)
    {
        $sql = 'delete from pc_option where pc_id=:pc_id AND option_id=:option_id ';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':pc_id', $pc_id, PDO::PARAM_INT);
        $stmt->bindValue(':option_id', $option_id, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    public function delete2(int $id)
    {
        $sql = 'update quiz set is_deleted=1 where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        //$stmt->bindValue(':is_delete', $is_delete, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();
    }

    public function selectquiz(int $id)
    {
        $sql = 'select * from quiz  where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        //$stmt->bindValue(':is_delete', $is_delete, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function selectOption(int $id)
    {
        $sql = 'select * from options  where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        // SQL文の該当箇所に、変数の値を割り当て（バインド）する
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        //$stmt->bindValue(':is_delete', $is_delete, PDO::PARAM_INT);

        // SQLを実行する
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function productupdate($id, string $options, int $categry_id, int $product_id, $price, $registration_date)
    {
        // レコードをアップデートするSQL文
        $sql = 'update options set id=:id, categry_id=:categry_id, product_id=:product_id, registration_date=:registration_date ';
        if ($options !== '') {
            $sql .= ', options=:options ';
        }
        if ($price !== '') {
            $sql .= ', price=:price ';
        }
        $sql .= 'where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($options !== '') {
            $stmt->bindValue(':options', $options, PDO::PARAM_STR);
        }
        $stmt->bindValue(':categry_id', $categry_id, PDO::PARAM_INT);
        $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
        if ($price !== '') {
            $stmt->bindValue(':price', $price, PDO::PARAM_INT);
        }
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);

        // SQLを実行する
        $stmt->execute();
    }

    public function categryupdate($id, string $categry, $registration_date)
    {
        // レコードをアップデートするSQL文
        $sql = 'update categry set id=:id,';
        if ($categry !== '') {
            $sql .= 'categry=:categry,';
        }
        $sql .=  'registration_date=:registration_date ';
        $sql .= 'where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($categry !== '') {
            $stmt->bindValue(':categry', $categry, PDO::PARAM_STR);
        }
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);

        // SQLを実行する
        $stmt->execute();
    }

    public function pcmodelupdate($id, string $item_name, $registration_date)
    {
        // レコードをアップデートするSQL文
        $sql = 'update product set id=:id, ';
        if ($item_name !== '') {
            $sql .= 'item_name=:item_name,';
        }
        $sql .= 'registration_date=:registration_date ';
        $sql .= 'where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($item_name !== '') {
            $stmt->bindValue(':item_name', $item_name, PDO::PARAM_STR);
        }
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);

        // SQLを実行する
        $stmt->execute();
    }

    public function customerupdate(
        $id,
        string $email,
        string $first_name,
        string $last_name,
        string $first_name_kana,
        string $last_name_kana,
        string $postal_code,
        string $address,
        string $phone_number,
        $registration_date
    ) {
        // レコードをアップデートするSQL文
        $sql = 'update users set id=:id,';
        if ($email !== '') {
            $sql .= 'email=:email,';
        }
        if ($first_name !== '') {
        $sql .= 'first_name=:first_name,';
        }
        if ($last_name !== '') {
        $sql .= 'last_name=:last_name,';
        }
        if ($first_name_kana !== '') {
        $sql .= 'first_name_kana=:first_name_kana,';
        }
        if ($last_name_kana !== '') {
        $sql .= 'last_name_kana=:last_name_kana,';
        }
        if ($postal_code !== '') {
        $sql .= 'postal_code=:postal_code,';
        }
        if ($address !== '') {
        $sql .= 'address=:address, ';
        }
        if ($phone_number !== '') {
        $sql .= 'phone_number=:phone_number, ';
        }
        $sql .= 'registration_date=:registration_date ';
        $sql .= 'where id=:id';

        // SQL文を実行する準備
        $stmt = $this->dbh->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($email !== '') {
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        }
        if ($first_name !== '') {
        $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
        }
        if ($last_name !== '') {
        $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
        }
        if ($first_name_kana !== '') {
        $stmt->bindValue(':first_name_kana', $first_name_kana, PDO::PARAM_STR);
        }
        if ($last_name_kana !== '') {
        $stmt->bindValue(':last_name_kana', $last_name_kana, PDO::PARAM_STR);
        }
        if ($postal_code !== '') {
        $stmt->bindValue(':postal_code', $postal_code, PDO::PARAM_STR);
        }
        if ($address !== '') {
        $stmt->bindValue(':address', $address, PDO::PARAM_STR);
        }
        if ($phone_number !== '') {
        $stmt->bindValue(':phone_number', $phone_number, PDO::PARAM_STR);
        }
        $stmt->bindValue(':registration_date', $registration_date, PDO::PARAM_STR);

        // SQLを実行する
        $stmt->execute();
    }
}

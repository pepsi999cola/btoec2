<?php
require_once('./class/util/SaftyUtil.php');
require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/Quiz.php');


try {
    $db = new Quiz();
    $list = $db->optionselectmidle();
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            スタンダードモデル
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="purchase.php">ミドルタワーPC</a>
                            <a class="dropdown-item" href="purchase.php">省スペースPC</a>
                            <a class="dropdown-item" href="purchase.php">ゲーミングPC</a>
                        </div>
                    
                    </li>
                </ul>
            </div>
        </nav>
        <a href="index.php">HOME</a><br />
        <table class="table table-dark">
            <tr>
                <th>カスタマイズ</th>
                <th>①パーツ選択</th>
                <th>②お客様情報入力</th>
                <th>③内容のご確認</th>
                <th>④完了</th>
            </tr>
        </table>
        <table class="table table-bordered table-danger">
            <tr>
                <th>カスタマイズ・お見積り</th>
        </table>
        <table class="table table-primary">
            <tr>
                <th>パーツ選択</th>
            </tr>
        </table>

        <form action="total.php" method="post">
            <input type="hidden" name="token" value="<?= $token ?>">
            <input type="hidden" name="middlepc" value="1">
            <div class="row">
                <div class="col-md-2">
                    <img src="img\illust-02_btn.jpg"><br />
                    CPU
                </div>
                <div class="col-md">
                    <table class="table table-striped ">
                        <?php foreach ($list as $x) : ?>
                            <?php if ($x['categry_id'] == 1) : ?>
                                <tr>
                                    <td><input type="radio" name="cpu" value="<?= $x['id'] ?>" <?php if ($x['price'] == 101540) {
                                                                                                        echo 'checked="checked"';
                                                                                                    } ?>><?= $x['options'] ?></td>
                                    <td width="150"><?= number_format($x['price']) ?>円</td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>
                    </table>

                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-2">
                    <img src="img\illust-03_btn.jpg"><br />
                    CPUクーラー
                </div>
                <div class="col-md">
                    <table class="table table-striped ">
                        <?php foreach ($list as $x) : ?>
                            <?php if ($x['categry_id'] == '2') : ?>
                                <tr>
                                    <td><input type="radio" name="cpucooler" value="<?= $x['id'] ?>" <?php if ($x['price'] == 0) {
                                                                                                            echo 'checked="checked"';
                                                                                                        } ?>><?= $x['options'] ?></td>
                                    <td width="150"><?php if ($x['price'] == 0) {
                                            echo '標準';
                                        } else {
                                            if (0 < $x['price']) {
                                                echo "+";
                                            }
                                            echo number_format($x['price']) . "円";
                                        } ?></td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>

                    </table>
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-2">
                    <img src="img\illust-04_btn.jpg"><br />
                    マザーボード
                </div>
                <div class="col-md">
                    <table class="table table-striped ">

                        <?php foreach ($list as $x) : ?>
                            <?php if ($x['categry_id'] == '3') : ?>
                                <tr>
                                    <td><input type="radio" name="board" value="<?= $x['id'] ?>" <?php if ($x['price'] == 0) {
                                                                                                        echo 'checked="checked"';
                                                                                                    } ?>><?= $x['options'] ?></td>
                                    <td width="150"><?php if ($x['price'] == 0) {
                                            echo '標準';
                                        } else {
                                            if (0 < $x['price']) {
                                                echo "+";
                                            }
                                            echo number_format($x['price']) . "円";
                                        } ?></td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>

                    </table>
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-2">
                    <img src="img\illust-05_btn.jpg"><br />
                    メモリ
                </div>
                <div class="col-md">
                    <table class="table table-striped ">
                        <?php foreach ($list as $x) : ?>
                            <?php if ($x['categry_id'] == '4') : ?>
                                <tr>
                                    <td><input type="radio" name="memory" value="<?= $x['id'] ?>" <?php if ($x['price'] == 0) {
                                                                                                            echo 'checked="checked"';
                                                                                                        } ?>><?= $x['options'] ?></td>
                                    <td width="150"><?php if ($x['price'] == 0) {
                                            echo '標準';
                                        } else {
                                            if (0 < $x['price']) {
                                                echo "+";
                                            }
                                            echo number_format($x['price']) . "円";
                                        } ?></td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-2">
                    <img src="img\illust-07_btn.jpg"><br />
                    SSD
                </div>
                <div class="col-md">
                    <table class="table table-striped ">
                        <?php foreach ($list as $x) : ?>
                            <?php if ($x['categry_id'] == '5') : ?>
                                <tr>
                                    <td><input type="radio" name="ssd" value="<?= $x['id'] ?>" <?php if ($x['price'] == 0) {
                                                                                                        echo 'checked="checked"';
                                                                                                    } ?>><?= $x['options'] ?></td>
                                    <td width="150"><?php if ($x['price'] == 0) {
                                            echo '標準';
                                        } else {
                                            if (0 < $x['price']) {
                                                echo "+";
                                            }
                                            echo number_format($x['price']) . "円";
                                        } ?></td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-2">
                    <img src="img\illust-11_btn.jpg"><br />
                    グラフィックボード
                </div>
                <div class="col-md">
                    <table class="table table-striped ">
                    <?php foreach ($list as $x) : ?>
                            <?php if ($x['categry_id'] == '6') : ?>
                                <tr>
                                    <td><input type="radio" name="gpu" value="<?= $x['id'] ?>" <?php if ($x['price'] == 0) {
                                                                                                        echo 'checked="checked"';
                                                                                                    } ?>><?= $x['options'] ?></td>
                                    <td width="150"><?php if ($x['price'] == 0) {
                                            echo '標準';
                                        } else {
                                            if (0 < $x['price']) {
                                                echo "+";
                                            }
                                            echo number_format($x['price']) . "円";
                                        } ?></td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
            <br />
            <button class="btn btn-danger btn-lg" type="submit" 　>上記の内容で、お見積り・ご注文へ進む</button>
        </form>


    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
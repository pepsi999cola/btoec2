<?php
// セッションを開始する
session_start();
session_regenerate_id();

// 必要なファイルを読み込む
require_once('../class/config/Config.php');
require_once('../class/db/Base.php');
require_once('../class/db/Quiz.php');
require_once('../class/util/SaftyUtil.php');




?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>共同TODOリスト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        #expiration_date {
            width: 12rem;
        }

        #todo_item {
            width: 25rem;
        }

        .complete {
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10"> エラー</div>
                            
                            <div class="col-2"><a href="../index.php" class="btn btn-outline-primary btn-sm">HOMEへ</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                    <p class="text-danger">申し訳ございません。エラーが発生しました。</p>
                    <div align="center"><a href="../index.php" class="btn btn-outline-primary btn-sm">HOMEへ</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>
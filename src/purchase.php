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
        <h1>スタンダードモデルPC</h1><br />

        <img src="img\middle_tower_title-01.jpg">

        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <dl>
                        <dt class="name"><strong>【Intel Z490チップセット搭載】<br />
                                第10世代 Core iシリーズ搭載ミドルタワーモデル</strong></dt>
                    </dl>
                    <br />
                    <br />
                    <h5 class="card-title">ミドルタワーPC</h5>
                    <a href="customize.php"><img src="img\index_photo-02.png" alt="次へ"></a>
                    <p class="card-text">幅広く自在にカスタマイズ</p>
                    <br />
                    <button onclick="location.href= 'customize.php'" class="btn btn-danger">カスタマイズ</button>

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <dl>
                        <dt class="name"><strong>【Intel Z390チップセット搭載】<br />
                                第9世代 Core iシリーズ搭載ミドルタワーモデル</strong><br />
                            <span class="note">オプションにてH370チップセットも選択可能</span></dt>
                    </dl>
                    <h5 class="card-title">省スペースPC</h5>
                    <a href="customize_shou.php"><img src="img\index_photo-03.png" alt="次へ"></a>
                    <p class="card-text">高性能なら静音</p>
                    <br />
                    <button onclick="location.href= 'customize_shou.php'" class="btn btn-danger">カスタマイズ</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <dl>
                        <dt class="name"><strong>【Intel Z390チップセット搭載】<br />
                                第9世代 Core iシリーズ搭載ミドルタワーモデル</strong><br />
                            <span class="note">オプションにてH370チップセットも選択可能</span></dt>
                    </dl>
                    <h5 class="card-title">ゲーミングPC</h5>
                    <a href="customize_game.php"><img src="img\index_photo-04.png" alt="次へ"></a>
                    <p class="card-text">机上に設置してもスペースを有効に使える省スペース型</p>
                    <button onclick="location.href= 'customize_game.php'" class="btn btn-danger">カスタマイズ</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
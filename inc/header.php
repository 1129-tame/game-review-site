<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ゲーム口コミサイト＿ホーム</title>
        <meta name="viewport" contact="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    <header>
        <h1>ホーム</h1>
    </header>
<body>
    <div>
        <ul id='nav'>
<?php 
    $link = <<<EOD
    <li><a href="index.php">ホーム</a></li>
    <li><a href="detail.php">スイッチ</a></li>
    <li><a href="detail.php">PS4</a></li>
    <li><a href="detail.php">PS5</a></li>
    <li><a href="guest_login.php">ゲストログイン</a></li>
    <li><a href="login.php">ログイン</a></li>
    <li><a href="signup.php">会員登録</a></li>
EOD;
echo $link;
            ?>
        </ul>
    </div>
</body>
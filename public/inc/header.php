<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ゲーム口コミサイト＿ホーム</title>
        <meta name="viewport" contact="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <header>
         <h2 class="game_logo"><a href="index2.php">ゲーマーズ</a></h2>
<?php
 require_once __DIR__ . "/../../app/functions.php";
    if (!isset($_SESSION)) {
        session_start();
    }
    if (!empty($_SESSION['login'])) {
     echo "<span>　　ようこそ、" . str2html($_SESSION['user_name']) . "さん</span>";
    }       
?>
    <div class="f-container">
         <div>
            <ul class='nav'>
                <li><a href="index2.php">Switch</a></li>
                <li><a href="index2.php">PS4</a></li>
                <li><a href="index2.php">PS5</a></li> 
            </ul>
        </div>
        <div class="f-item">
            <ul class='nav'>
                <li><a href="index2.php">ホーム</a></li>
                <li><a href="mypage.php">マイページ</a></li>
                <li><a href="guest_login.php">ゲストログイン</a></li>
                <li><a href="login.php">ログイン</a></li>
                <li><a href="signup.php">会員登録</a></li>

            </ul>
        </div>
    </div>
   
</header>
<main>
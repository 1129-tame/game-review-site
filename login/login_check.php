<?php
if (!isset($_SESSION)) {
    session_start();
}
if (empty($_SESSION['login'])) {
    echo "この機能を利用するには<a href='login.php'>ログイン</a>が必要です。";
    include __DIR__ . "/../public/inc/footer.php"; 
    exit;
}
echo "<!--ログイン中-->";
 
<?php
if (!isset($_SESSION)) {
    session_start();
}
if ((empty($_POST['token'])) && (empty($_GET['token']))) {
    echo "エラーが発生しました。";
    exit;
}
if ((!(hash_equals($_SESSION['token'], $_POST['token']))) && (!(hash_equals($_SESSION['token'], $_GET['token'])))) {
    echo "エラーが発生しました。（２）";
    exit;
}
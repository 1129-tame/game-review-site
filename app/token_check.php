<?php
if (!isset($_SESSION)) {
    session_start();
}
if (empty($_GET['token'])) {
    echo "エラーが発生しました。";
    exit;
}
if (!(hash_equals($_SESSION['token'], $_GET['token']))) {
    echo "エラーが発生しました。（２）";
    exit;
}
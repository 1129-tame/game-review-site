<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_GET['token'])) {
    $gets = $_GET['token'];
} elseif (isset($_POST['token'])) {
    $gets = $_POST['token'];
}
if (empty($gets)) {
    echo "エラーが発生しました。";
    exit;
}
if (!(hash_equals($_SESSION['token'], $gets))) {
    echo "エラーが発生しました。（２）";
    exit;
}
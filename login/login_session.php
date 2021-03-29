<?php
session_start();
require_once __DIR__ . '/../app/functions.php';

if (!empty($_SESSION['login'])) {
    echo "ログイン済みです<br>";
    echo "<a href=index.php>リストに戻る</a>";
    exit;
}
if ((empty($_POST['user_name'])) || (empty($_POST['user_password']))) {
    echo "ユーザ名、パスワード名を入力してください。";
    exit;
}

try {
    //ユーザ名の照合
    $dbh = db_open();
    $sql = "SELECT user_password FROM users WHERE user_name = :user_name";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":user_name", $_POST['user_name'], PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo "ログインに失敗しました。";
        exit;
    }
    // ユーザ情報の照合
    if (password_verify($_POST['user_password'], $result['user_password'])) {
        session_regenerate_id(true);
        $_SESSION['login'] = true;
        header("Location: ../public/index.php");
    } else {
        echo 'ログインに失敗しました。（２）';
    }
    
} catch (PDOException $e) {
    echo "エラー！：" . str2html($e->getMessage());
    exit;
}
<?php
require_once __DIR__ . '/../app/functions.php';

if (!empty($_SESSION['login'])) {
    header("Location: ../public/login.php?signup=end");
}
if ((empty($_POST['user_name'])) || (empty($_POST['user_password']))) {
    echo "ユーザ名、パスワード名を入力してください。";
    exit;
}

try {
    //ユーザ名の照合
    $dbh = db_open();
    $sql = "SELECT user_id , user_password  FROM users WHERE user_name = :user_name";
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
        session_start();
        session_regenerate_id(true);
        $_SESSION['login'] = true;
        $_SESSION['user_name'] = $_POST['user_name'];
        $_SESSION['user_id'] = $result['user_id'];
        header("Location: ../public/index2.php?login=good");
    } else {
        echo 'ログインに失敗しました。（２）';
    }
    
} catch (PDOException $e) {
    echo "エラー！：" . str2html($e->getMessage());
    exit;
}
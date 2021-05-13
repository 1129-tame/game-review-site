<?php
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/token_check.php";
//ゲーム情報をDBに追加
//バリデーション
if (empty($_POST['product_name']) || empty($_POST['product_hard']) || empty($_POST['product_description']) || empty($_POST['product_kind'])) {
    header( "Location: ../public/index2.php?product=null" );
    exit;
}

try {
$dbh = db_open();
$sql = 'INSERT INTO products (product_id, product_name, product_hard, product_description, product_kind) VALUES (NULL, :product_name, :product_hard, :product_description, :product_kind)';
$statement = $dbh->prepare($sql);

$statement->bindParam(":product_name", $_POST['product_name'], PDO::PARAM_STR);
$statement->bindParam(":product_hard", $_POST['product_hard'], PDO::PARAM_STR);
$statement->bindParam(":product_description", $_POST['product_description'], PDO::PARAM_STR);
$statement->bindParam(":product_kind", $_POST['product_kind'], PDO::PARAM_STR);

$statement->execute();

header( "Location: ../public/index2.php?product=notnull" );
exit ;

   
} catch (PDOException $e) {
//    echo "エラー！:" .str2html($e->getMessage()) . "<br>";
   echo "エラー！: <br>";  // 本番での書き方
   exit;
}
?>
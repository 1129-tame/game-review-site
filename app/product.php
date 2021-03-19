<?php include __DIR__ . '/../public/inc/header.php'; ?>
<?php
require_once __DIR__ . "/functions.php";
try {
 $dbh = db_open();
 $sql = 'SELECT * FROM reviews';
 $statement = $dbh->query($sql);
 var_dump($statement);
echo '<br>';
 while ($row = $statement->fetch()) {
    echo "id：" .str2html($row[0]) . "<br>";
    echo "ゲーム名：" .str2html($row[1]) . "<br><br>";
   
 } var_dump($row);
    $product = $_POST;
    var_dump($product);
} catch (PDOException $e) {
    echo "エラー！:" .str2html($e->getMessage()) . "<br>";
    //echo "エラー！: <br>"; 本番での書き方
    exit;
}
?>

<?php include __DIR__ . "/../public/inc/footer.php"; ?>
<?php include __DIR__ . '/../public/inc/header.php'; ?>
<?php
require_once __DIR__ . "/functions.php";
try {
 $user = "phpuser";
 $password = "uRZ89Tfw32H2PG9r";
 $opt = [
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_EMULATE_PREPARES => false,
     PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
 ]; //DSN データソース名
 $dbh = new PDO('mysql:host=localhost:3308;dbname=kuchikomi;charset=utf8', $user, $password, $opt);
 var_dump($dbh);
 $sql = 'SELECT * FROM products';
 $statement = $dbh->query($sql);
 var_dump($statement);
echo '<br>';
 while ($row = $statement->fetch()) {
    echo "id：" .str2html($row[0]) . "<br>";
    echo "ゲーム名：" .str2html($row[1]) . "<br><br>";

var_dump($row);
 }
} catch (PDOException $e) {
    echo "エラー！:" .str2html($e->getMessage()) . "<br>";
    //echo "エラー！: <br>"; 本番での書き方
    exit;
}
?>

<?php include __DIR__ . "/../public/inc/footer.php"; ?>
<?php
require_once __DIR__ . "/functions.php";
try {
 $dbh = db_open();
 $sql = 'INSERT INTO reviews (review_id, review_comment,review_date, review_product_id, review_user_id) VALUES (NULL, :review_comment,:review_date, :review_product_id,:review_user_id)';
 $statement = $dbh->prepare($sql);
 var_dump($statement);
echo '<br>';
$timestamp = time() ;
$timestamp = date("Y-m-d H:i:s", $timestamp);
$a = (int) 1;
$statement->bindParam(":review_comment",$_GET["review_comment"],PDO::PARAM_STR);
$statement->bindParam(":review_date",$timestamp,PDO::PARAM_STR);
$statement->bindParam(":review_product_id",$a,PDO::PARAM_INT);
$statement->bindParam(":review_user_id",$a,PDO::PARAM_INT);

$statement->execute();


header( "Location: ../public/detail.php" ) ;
exit ;

    
} catch (PDOException $e) {
    echo "エラー！:" .str2html($e->getMessage()) . "<br>";
    //echo "エラー！: <br>"; 本番での書き方
    exit;
}
?>

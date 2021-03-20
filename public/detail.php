<?php include __DIR__ . "/inc/header.php"; ?>
<?php
require_once __DIR__ . "/../app/functions.php";
try {
 $dbh = db_open();
 $sql = 'SELECT review_comment, review_date FROM reviews LEFT JOIN
 users ON reviews.review_user_id = users.user_id';
 $statement = $dbh->query($sql);
 
} catch (PDOException $e) {
    echo "エラー！:" .str2html($e->getMessage()) . "<br>";
    //echo "エラー！: <br>"; 本番での書き方
    exit;
}
?>

 <h2>口コミ詳細</h2>
 <h3>ゼルダの伝説ブレスオブザワイルド</h3>
 <div>
    <p>ハード：Nintendo Switch</p>
    <p>ジャンル：アクション・アドベンチャー</p>
 </div>
 <div>
    <h3>感想・レビュー</h3>
    
 </div>
<?PHP  while ($row = $statement->fetch()) {
    echo "<div>";
    echo "<p>はるの感想・レビュー:" . str2html($row["review_date"]) . "</p>";
    echo "<p>" . str2html($row["review_comment"]) . "</p>";
    echo "</div>";
 } ?>
 <div>
    <h3>口コミを投稿する</h3>
    <form action="../app/product.php" method="POST">
        <label> 名前：<br><input type="text" name="name"></label><br>
        <label for="content">感想・レビュー:</label>
        <textarea name="review_comment" id="content" cols="30" rows="10"></textarea>
        <input type="submit" value="投稿する">
    </form>
 </div>







 <?php include __DIR__ . "/inc/footer.php"; ?>
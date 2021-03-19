<?php include __DIR__ . "/inc/header.php"; ?>
<?php
require_once __DIR__ . "/../app/functions.php";
try {
 $dbh = db_open();
 $sql = 'SELECT * FROM reviews';
 $statement = $dbh->query($sql);
 
 while ($row = $statement->fetch()) {
     str2html($row["review_comment"]);
   
 } 

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
    <h4>はるの感想・レビュー</h4>
        <p>とても面白いです。</p>
    <h4>トラざえもんの感想・レビュー</h4>
        <p>映像が綺麗、本物かと思って画面を触ってしまった。</p>
 </div>
 <div>
    <h3>口コミを投稿する</h3>
    <form action="../app/product.php" method="POST">
        <p>名前：<input type="text" name="name"></p>
        <textarea name="review" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="投稿する">
    </form>
 </div>







 <?php include __DIR__ . "/inc/footer.php"; ?>
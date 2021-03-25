<?php include __DIR__ . "/inc/header.php"; ?>
<?php require_once __DIR__ . "/../app/functions.php";?>


<?php
$id = $_GET['id'];

 //指定したidのプロダクトを抽出/商品関係
$dbh = db_open();
$sql2 = 'SELECT * FROM products WHERE product_id = :product_id';
$stmt = $dbh->prepare($sql2);
$stmt->bindParam(":product_id",$_GET['id'],PDO::PARAM_INT);
$stmt->execute();
$product_id = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($product_id);
?>

 <h2>口コミ詳細</h2>
 <h3><?php echo str2html($product_id['product_name']); ?></h3> 
 <div>
    <p>ハード：<?php echo str2html($product_id['product_hard']);?></p>
    <p>ジャンル：<?php echo str2html($product_id['product_kind']);?></p>
 </div>
 <div>
    <h3>感想・レビュー</h3>
    
 </div>

 <?php
    //　指定したレビューの抽出
 $sql = 'SELECT review_comment, review_date FROM reviews WHERE review_product_id = :review_product_id';
 $statement = $dbh->prepare($sql);
 $statement->bindParam(":review_product_id",$_GET['id'],PDO::PARAM_INT);
 $statement->execute();
 while ($product_review = $statement->fetch(PDO::FETCH_ASSOC)) { 
    echo "<div>";
    echo "<p>はるの感想・レビュー:" . str2html($product_review['review_date']) . "</p>";
    echo "<p>" . str2html($product_review["review_comment"]) . "</p>";
    echo "</div>";
 } //end of while   ?> 
 <div>
    <h3>口コミを投稿する</h3>
    <form action="../app/product.php" method="GET">
        <label> 名前：<br><input type="text" name="name"></label><br>
        <label for="content">感想・レビュー:</label>
        <textarea name="review_comment" id="content" cols="30" rows="10"></textarea>
        <input type="hidden" name="product_id" value="<?php echo "$id";?>">
        <?php  ?>
        <input type="submit" value="投稿する">
        
    </form>
 </div>







 <?php include __DIR__ . "/inc/footer.php"; ?>
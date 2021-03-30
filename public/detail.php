<?php include __DIR__ . "/inc/header.php"; ?>
<?php require_once __DIR__ . "/../app/functions.php";?>
<?php require_once __DIR__ . "/../app/token.php";?>
<?php
 //指定したidのプロダクトを抽出/商品関係
$dbh = db_open();
$sql2 = 'SELECT * FROM products WHERE product_id = :product_id';
$stmt = $dbh->prepare($sql2);
$stmt->bindParam(":product_id",$_GET['id'],PDO::PARAM_INT);
$stmt->execute();
$product_id = $stmt->fetch(PDO::FETCH_ASSOC);
?>

 <h2>口コミ詳細</h2>
 <h3><?php echo str2html($product_id['product_name']); ?></h3> 
 <div>
    <p>ハード：<?php echo str2html($product_id['product_hard']);?></p>
    <p>ジャンル：<?php echo str2html($product_id['product_kind']);?></p>
    <p>詳細：<?php echo str2html($product_id['product_description']);?></p>
 </div>
 <div>
    <h3>感想・レビュー</h3>
 </div>

 <?php
   //　指定したレビューの抽出
   include __DIR__ . '/../app/select_review.php';
?>
 <div>
    <h3>口コミを投稿する</h3>
    <?php require_once __DIR__ . '/../login/login_check.php' ?>
    <form action="../app/input_review.php" method="GET">
        <label for="content">感想・レビュー:</label>
<?php 
   if (empty($_GET['comment'])) {
   } elseif ($_GET['comment'] == "null") {
      echo "<b>感想を入力してください</b>";
   }
   $id = $_GET['id'];
   $user_id = $_SESSION['user_id'];
?>

        <textarea name="review_comment" id="content" cols="30" rows="10"></textarea>
        <input type="hidden" name="product_id" value="<?= "$id";?>">
        <input type="hidden" name="user_id" value="<?= "$user_id" ?>">
        <input type="hidden" name="token" value="<?= "$token" ?>">
        <input type="submit" value="投稿する">
        
    </form>
 </div>







 <?php include __DIR__ . "/inc/footer.php"; ?>
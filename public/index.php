<?php include __DIR__ . "/inc/header.php"; ?>
<?php require_once __DIR__ . "/../app/functions.php"; ?>
    <h2>ホーム</h2>
<?php
$dbh = db_open();
$products_data = fetch_products($dbh);
foreach ($products_data as $product_data ) {
?>

<div class="col-xs-12">
    
	<h2><?php echo str2html($product_data['product_name']); ?></h2>
	<p><?php echo str2html($product_data['product_description']); ?></p>
	<a href="detail.php?id=<?php echo str2html($product_data['product_id']) ?>">&raquo; 口コミを見る</a>
	<br><br>
</div>

<?php  } // End of foreach ?>

	<h2>新規ゲーム追加</h2>
	<form action="../app/input_product.php" method="POST">
	<label for="title">タイトル：</label>
	<input type="text" id="title" name="product_name"><br>
	<label for="hard">ハード：</label>
	<select name="hard" id="hard">
	<option value="product_hard">Nintendo Switch</option>
	<option value="product_hard">PS4</option>
	<option value="product_hard">PS5</option>
	</select><br>
	<label for="description">説明：</label>
	<textarea name="product_description" id="description" cols="30" rows="10"></textarea>
	<input type="submit" value="新規追加">
	</form>
<?php include __DIR__ . "/inc/footer.php"; ?>
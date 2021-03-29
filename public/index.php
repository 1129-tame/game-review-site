<?php include __DIR__ . "/inc/header.php"; ?>
<?php require_once __DIR__ . "/../app/functions.php"; ?>
<?php
	if (empty($_GET['product'])) {
	} elseif ($_GET['product'] == 'notnull') {
		echo "<b>新規ゲーム情報追加成功しました。</b>";
	}
?>
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
<?php require_once __DIR__ . '/../login/login_check.php' ?>
	<form action="../app/input_product.php" method="POST">
	<label for="title">タイトル：</label>
	<input type="text" id="title" name="product_name"><br>
	<label for="hard">ハード：</label>
	<select name="product_hard" id="hard">
	<option value="Nintendo Switch">Nintendo Switch</option>
	<option value="PS4">PS4</option>
	<option value="PS5">PS5</option>
	</select><br>
	<label for="kind">ジャンル：</label>
	<input type="text" id="kind" name="product_kind"><br>
	<label for="description">説明：</label>
	<textarea name="product_description" id="description" cols="30" rows="10"></textarea>
	<input type="submit" value="新規追加">
	</form>

<?php 
	if (empty($_GET['product'])) {
	} elseif ($_GET['product'] == 'null') {
		echo "<b>正しい情報を入力してください。</b>";
	}
?>
<?php include __DIR__ . "/inc/footer.php"; ?>
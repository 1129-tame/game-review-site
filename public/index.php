<?php include __DIR__ . "/inc/header.php"; ?>
<?php require_once __DIR__ . "/../app/functions.php"; ?>
<?php
$dbh = db_open();
$products_data = fetch_products($dbn);
foreach ($products_data as $product_data ) {
?>

<div class="col-xs-12">
	<h2><?php echo $product_data['product_name']; ?></h2>
	<p><?php echo $product_data['product_description']; ?></p>
	<a href="detail.php?id=<?php echo $product_data['product_id'] ?>">&raquo; 口コミを見る</a>
	<br><br>
</div>

<?php  } // End of foreach ?>

<div>
    <h2>タイムライン</h2>
</div>
<div>
    <h4>はるの感想・レビュー</h4>
    <h4>ゼルダの伝説　ブレスオブザワイルド（Switch）</h4>
    <p>とても面白いです。</p>
    <p><a href="detail.php">口コミ詳細</a></p>
</div>
<div>
    <h4>はるの感想・レビュー</h4>
    <h4>スーパーマリオオデッセイ（Switch）</h4>
    <p>すごい楽しいすごい楽しい</p>
    <p><a href="detail.php">口コミ詳細</a></p>
</div>
<div>
    <h4>arufaの感想・レビュー</h4>
    <h4>ゴーストオブツシマ（PS4）</h4>
    <p>かっこいい。</p>
    <p><a href="detail.php">口コミ詳細</a></p>
</div>
<?php include __DIR__ . "/inc/footer.php"; ?>
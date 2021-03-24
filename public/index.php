<?php include __DIR__ . "/inc/header.php"; ?>
<?php require_once __DIR__ . "/../app/functions.php"; ?>
    <h2>ホーム</h2>
<?php
$dbh = db_open();
$products_data = fetch_products($dbh);
foreach ($products_data as $product_data ) {
?>

<div class="col-xs-12">
    
	<h2><?php echo $product_data['product_name']; ?></h2>
	<p><?php echo $product_data['product_description']; ?></p>
	<a href="detail.php?id=<?php echo $product_data['product_id'] ?>">&raquo; 口コミを見る</a>
	<br><br>
</div>

<?php  } // End of foreach ?>

<
<?php include __DIR__ . "/inc/footer.php"; ?>
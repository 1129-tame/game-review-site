<?php include __DIR__ . "/inc/header.php"; ?>
<?php 
if (empty($_GET['pass'])) {
} elseif ($_GET['pass'] = 'false') {
	echo "<b>パスワードが正しくありません</b>";
}
?>

<div class="container">
	<div class="row">
		 <div class="col-xs-6 col-xs-offset-3">
		 	<h2>会員登録</h2>
			<form action="../app/input_users.php" method="post">
				<div class="form-group">
					<label for="user_name">名前</label>
					<input type="text" class="form-control" id="user_name" name="user_name">
				</div>
				<div class="form-group">
					<label for="user_password">パスワード</label>
					<input type="password" class="form-control" id="user_password" name="user_password">
				</div>
				<div class="form-group">
					<label for="user_pass_check">パスワードの確認</label>
					<input type="password" class="form-control" id="user_pass_check" name="user_pass_check">
				</div>
				<button type="submit" class="btn btn-default">登録する</button>
			</form>
		 </div>
	</div>
</div>


<?php include __DIR__ . "/inc/footer.php"; ?>
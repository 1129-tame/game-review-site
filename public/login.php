<?php include __DIR__ . "/inc/header.php"; ?>
<?php
if (empty($_GET['signup'])) {
} elseif ($_GET['signup'] = 'notnull') {
	echo "<p>会員登録できました。ログインしてください。</p>";
}
?>

<div class="container">
	<div class="row">
		 <div class="col-xs-6 col-xs-offset-3">
		 	<h2 class="loginname">ログイン</h2>
			<form action="" method="post">
				<div class="form-group">
					<label for="user_email">Email</label>
					<input type="email" class="form-control" id="user_email" name="user_email">
				</div>
				<div class="form-group">
					<label for="user_password">パスワード</label>
					<input type="password" class="form-control" id="user_password" name="user_password">
				</div>
				<button type="submit" class="btn btn-default">ログイン</button>
			</form>
		 </div>
	</div>
</div>




<?php include __DIR__ . "/inc/footer.php"; ?>
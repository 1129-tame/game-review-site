<?php include __DIR__ . "/inc/header.php"; ?>
<?php
if (empty($_GET['signup'])) {
} elseif ($_GET['signup'] == 'notnull') {
	echo "<p>会員登録できました。ログインしてください。</p>";
} elseif ($_GET['signup'] == 'out') {
	echo "<p>ログアウトできました。</p>";
} elseif ($_GET['signup' == 'end']) {
	echo "<p>すでにログイン済みです。</p>";
}
?>

<div>
	<div>
		 <div>
		 	<h2>ログイン</h2>
			<form action="../login/login_session.php" method="post">
				<div>
					<label for="user_name">ユーザー名</label>
					<input type="text" class="form-control" id="user_name" name="user_name">
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

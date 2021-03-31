<?php include __DIR__ . "/inc/header.php"; ?>
<div class="container">
	<div class="row">
		 <div class="col-xs-6 col-xs-offset-3">
		 	<h2 class="loginname">ゲストログイン</h2>
			<form action="../login/login_session.php" method="post">
				<div class="form-group">
					<label for="user_name">ユーザー名</label>
					<input type="text" class="form-control" id="user_name" name="user_name" value='ゲストログイン'>
				</div>
				<div class="form-group">
					<label for="user_password">パスワード</label>
					<input type="password" class="form-control" id="user_password" name="user_password" value="abcdefg">
				</div>
				<button type="submit" class="btn btn-default">ログイン</button>
			</form>
		 </div>
	</div>
</div>
<?php include __DIR__ . "/inc/footer.php"; ?>
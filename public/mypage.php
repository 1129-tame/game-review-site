<?php include __DIR__ . "/inc/header.php"; ?>
<?php require_once __DIR__ . "/../app/functions.php"; ?>

<h2>マイページ</h2>
<h3>ユーザー情報</h3>
<p>ユーザー名：<?= $_SESSION['user_name'] ?></p>
<h3><a href="../login/logout.php">ログアウト</a></h3>



<?php include __DIR__ . "/inc/footer.php"; ?>
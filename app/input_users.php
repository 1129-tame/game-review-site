<?php
require_once __DIR__ . '/functions.php'; 
require_once __DIR__ . "/token_check.php";
?>
<?php
if (isset($_POST['user_name']) === true) {
    $user_name = $_GET['user_name'];
}
if (isset($_POST['user_password']) === true) {
    $user_password = $_GET['user_password'];
} 
if (isset($_POST['user_pass_check']) === true) {
    $user_pass_check = $_GET['user_pass_check'];
}
if ($user_password !== $user_pass_check) {
    header( "Location: ../public/signup.php?pass=false" );
    exit;
}

try {
    $hash = password_hash($user_password, PASSWORD_DEFAULT);
    $dbh = db_open();
    $sql = 'INSERT INTO users (user_id, user_name,user_password) VALUES (NULL, :user_name, :user_password)';
    $statement = $dbh->prepare($sql);
    
    $statement->bindParam(":user_name",$_GET['user_name'],PDO::PARAM_STR);
    $statement->bindParam(":user_password",$hash,PDO::PARAM_STR);
    $statement->execute();
    
    header( "Location: ../public/login.php?signup=notnull" );
    exit ;
    
       
    } catch (PDOException $e) {
       echo "エラー！:" .str2html($e->getMessage()) . "<br>";
       //echo "エラー！: <br>"; 本番での書き方
       exit;
    }
<?php
require_once __DIR__ . "/functions.php";
//　指定したレビューの抽出
$sql = 'SELECT review_comment, review_date , review_user_id , user_name FROM reviews INNER JOIN users ON reviews.review_user_id = users.user_id WHERE review_product_id = :review_product_id';
$statement = $dbh->prepare($sql);
$statement->bindParam(":review_product_id",$_GET['id'],PDO::PARAM_INT);
$statement->execute();

while ($product_review = $statement->fetch(PDO::FETCH_ASSOC)) { 
    $review_date = $product_review['review_date'];
    $user_name = $product_review['user_name'];
    $review_comment = $product_review['review_comment'];
        echo "<div>";
        echo "<p>" . str2html($user_name) . "さんの感想・レビュー:" . str2html($review_date) . "</p>";
        echo "<p>" . str2html($review_comment) . "</p>";
        echo "</div>";
} //end of while   
 
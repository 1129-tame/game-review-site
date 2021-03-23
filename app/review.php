<?php

function fetch_reviews($product_id, $mysqli) {

	// reviewsとusersのDBを選択する
	$query ="SELECT
					reviews.review_comment,
					reviews.review_date,
					reviews.review_product_id,
					reviews.review_user_id,

					users.user_id,
					users.user_name
				FROM
					reviews
				LEFT JOIN
					users
				ON
					reviews.review_user_id = users.user_id
				WHERE
					reviews.review_product_id = $product_id";

	$result = $mysqli->query($query);

	if( !$result ) {
		// エラーが発生した場合
		exit;
	} else {
		if($result == 0 ){
			// 口コミが存在しない場合
			return false;
		}else {
			// エラーがない場合
			// 連想配列にデータを格納する
			$reviews_data = array();
			while ($row = $result->fetch()) {
				$reviews_data[] = $row;
			}

			return $reviews_data;
		}
	}

}
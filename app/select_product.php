<?php
function fetch_products($dbh) {

	// productsのDBを選択する
	 $query = "SELECT *	FROM products";

	$result = $dbh->query($query);

	if( !$result ) {
		// エラーが発生した場合
		exit;
	} else {
		// カテゴリーが存在しない場合
		if($result== 0 ){
			exit;
		}else {
			// エラーがない場合
			// 連想配列にデータを格納する
			$product_data = array();
			while ($row = $result->fetch()) {
				$product_data[] = $row;
			}

			return $product_data;
		}
	}

}

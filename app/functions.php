<?php
function str2html(string $string) :string {
    return htmlspecialchars($string , ENT_QUOTES , 'UTF-8');
}
//関数作成、XSS対策、特殊文字の無害化
function db_open() :PDO {  //型宣言でPDO型を指定
    $user = "phpuser";
    $password = "uRZ89Tfw32H2PG9r";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ]; //DSN データソース名
    $dbh = new PDO('mysql:host=localhost:3308;dbname=kuchikomi;charset=utf8', $user, $password, $opt);
    return $dbh; //返り値を返す
}

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
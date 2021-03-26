<?php
//ゲーム情報をDBに追加
//バリデーション
if (empty($_POST['product_name'])) {
    header( "Location: ../public/index.php?product=null" );
    exit;
}
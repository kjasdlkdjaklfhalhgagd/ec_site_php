<?php
//ログイン確認
require('./../admin_auth.php');

#商品情報を受け取る
$awk = array('item_number',
			 'item_name',
			 'item_price',
			 'item_description');
$error_flg = false;
foreach($awk as $val) {
	//データを取得
	$$val = (string)$_POST[$val];
	
	//未入力かどうか先に確認
	if('' === $$val){
		$error_flg = true;
	}
}
//var_dump($item_name);


//validateする
// XXX 未入力のチェックをしているから、それ以外は特にやらない

// エラーなら返す
if (true === $error_flg) {
	// XXX
	echo 'エラーがあるよ？';
	exit;
}

// XXX ここまで来たら、登録できる情報がそろってる

//db接続
require_once('./../db.php');

#商品登録(insert)
// -準備さえた文を作成
$sql =' INSERT INTO items
(item_number,item_name,item_price,item_description)
VALUES (:item_number,:item_name,:item_price,:item_description);
';

$pre = $dbh->prepare($sql);
//値をバインド

$pre->bindValue(':item_number', $item_number);
$pre->bindValue(':item_name', $item_name);
$pre->bindValue(':item_price', $item_price);
$pre->bindValue(':item_description', $item_description);

/*
foreach($awk as $val) {
	$pre->bindValue(":$val", $$val);
}
*/

// - SQL実行
$r = $pre->execute();
//var_dump($r);
##エラーメッセージを表示
//var_dump($pre->errorInfo());


require './../smarty_set.php';


//デザイナーがいなければOK 居たらやめた方がいい
$smarty->assign('title', '商品登録画面');
$smarty->assign('h1_name', '商品登録画面');
$smarty->assign('materiaru', '商品を登録したよ
	');
	
$smarty->display('sample.tpl');

?>

<a href="admin_top.php">マイページに戻る</a>
<?php

//ログインしているかチェック
require('./../admin_auth.php');

//商品numberを取得
$item_number = (int)@$_GET['item_number'];
//var_dump($item_number);

//validate
if ($item_number <= 0){
	header('Location: ./admin_item_list.php');
}

require_once('./../db.php');




// SQLを発行
// - 準備された文の作成
$sql = 'SELECT * FROM items WHERE item_number = :item_number;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

// - 値のバインド
$pre->bindValue(':item_number', $item_number, PDO::PARAM_INT);

// - SQLの実行
$r = $pre->execute();
//var_dump($r);

//情報をゲット
$item_lists = $pre->fetchAll();
//var_dump($items_lists);
//存在しない商品Noなら、突き返す
if (true === empty($item)) {
	header('Location: ./admin_item_list.php');
	return;
}


?>
<html>
<table border="1">
<tr>
	<td>商品No:
	<td><?php echo h($item['item_number']); ?>
<tr>
	<td>商品名:
	<td><?php echo h($item['item_name']); ?>
<tr>
	<td>値段:
	<td><?php echo h($item['item_price']); ?>
<tr>
	<td>商品詳細:
	<td><pre><?php echo h($item['item_description']); ?></pre>
</table>
</html>

<?php
require_once('./../footer.php');
?>
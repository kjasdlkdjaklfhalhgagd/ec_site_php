<?php

//アイテム変更のためのページ

//ログイン確認
require('./../admin_auth.php');

//前のページ(admin_item_list.php)から変更するデータの番号を取得
$item_number = (int)@$_GET['item_number'];
//var_dump($item_no);

//0以下の場合の処理
if ($item_number <= 0) {
	header('Location: ./admin_item_list.php');
	return ;
}

//DBに接続してSELECTのSQLを発行
//DB
require_once('./../db.php');


//sql作成(select)
$sql = 'SELECT * FROM items WHERE item_number = :item_number;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

//
$pre->bindValue(':item_number', $item_number, PDO::PARAM_INT);

//
$r =$pre->execute();
//var_dump($r);

//情報を取得
$items = $pre->fetch();

?>

<!-- データ変更のためのform -->
<form action="admin_item_change_fin.php" method="post">
商品No::<input type="text" name="item_number" value="<?php echo h($items['item_number']); ?>"><br>
商品名::<input type="text" name="item_name" value="<?php echo h($items['item_name']); ?>"><br>
値段::<input type="text" name="item_price" value="<?php echo h($items['item_price']); ?>"><br>
商品詳細::<input type="text" name="item_description" value="<?php echo h($items['item_description']); ?>"><br><br>
<input type="submit" value="変更">
</form>



</body>
</html>

<?php
require_once('./../footer.php');
?>
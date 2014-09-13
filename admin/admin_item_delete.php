<?php

//ログインしているかチェック
require('./../admin_auth.php');

//データを受け取る
$item_number = (int)@$_GET['item_number'];
//var_dump($item_number);

//validate
if ($item_number <= 0) {
	header('Location: ./admin_item_list.php');
	return ;
}

//DBに接続してDELETEのSQLを発行
//DB
require_once('./../db.php');


//データ削除
$sql = 'DELETE FROM items WHERE item_number = :item_number;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

//bind
$pre->bindValue(':item_number', $item_number, PDO::PARAM_INT);

//
$r =$pre->execute();
//var_dump($r);

?>
<html>
<body>
削除したよ<br>
<?php 
require_once('./../footer.php');
?>
</body>
</html>
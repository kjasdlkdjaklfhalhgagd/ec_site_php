<?php

//することは管理者ユーザの削除

//ログインしているかチェック
require('./../admin_auth.php');

//削除できるユーザーを制限
//XXX

$admin_number = h($_GET['user_num']);
//vd(admin_number);

//validate
if ($admin_number === '') {
	header('Location: ./admin_user_summary.php');
	return ;
}

//DBに接続してDELETEのSQLを発行
//DB
require_once('./../db.php');


//データ削除
$sql = 'DELETE FROM admin_users WHERE admin_number = :admin_number;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

//bind
$pre->bindValue(':admin_number', $admin_number);

//
$r =$pre->execute();
//var_dump($r);

?>
<html>
<body>
削除したよ<br>
<a href="admin_user_summary.php">リストに戻る</a></body>
</html>
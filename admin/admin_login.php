<?php

//ログイン確認

//セッション開始
ob_start();
session_start();

$id = $_POST['id'];
$raw_pass = $_POST['pass'];

//validateする
if( ('' === $id) ||('' === $raw_pass) ) {
	// XXX <-あとで修正するときにコメントアウト＋XXXで表示
	echo "IDまたはpassがないよ<br>";
	echo '<a href="admin_index.php">ログイン画面に戻る</a>';
	exit;
}

//パスワードをハッシュ化する
$p_string = password_hash($id .$raw_pass, PASSWORD_DEFAULT);


//var_dump($id);
//var_dump($p_string);


//DBの情報と突き合わせ
//やりたいことは「SELECT * FROM admin_users WHRER id = $id」

//DBに接続
require_once('./../db.php');

//var_dump($dbh);

//「準備された文」を用意
$sql = 'SELECT * FROM admin_users WHERE login_id = :id ;';
$pre = $dbh->prepare($sql);
//var_dump($pre);
//値をバインド
$pre->bindValue(':id', $id);
//SQLを実行
$r = $pre->execute();
//var_dump($r);
//情報の取得(OK指定なので1行前提で)
$row = $pre->fetch();
//var_dump($row);

//idとpasswordが正しければログイン
/*
入力されたID	:$id
入力されたpass	:$pass
DBの中のID		:$row['login_id']
DBの中のpass	:$row['login_pass']
*/
if( ($id !== $row['login_id'])
	||(false === password_verify($id . $raw_pass, $row['login_pass'])) ) {
	// XXX
	echo "IDまたはパスワードが一致していません？";
	exit;
}
//echo '成功したよ';

//「ログインした」って(情報をセッションにぶち込む
$_SESSION['admin_login_id'] = $id;
session_regenerate_id(true); //セキュリティ対策

//ログイン後Top Pageに移動
header('Location: admin_top.php');


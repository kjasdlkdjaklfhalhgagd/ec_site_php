<?php

//管理者ユーザー作成の処理

//セッションを開始する
ob_start();
session_start();

$name = $_POST['name'];
$id = $_POST['id'];
$raw_pass = $_POST['pass'];

//validate
if( ('' === $name) ||('' === $id) ||('' === $raw_pass) ) {
	// XXX <-あとで修正するときにコメントアウト＋XXXで表示
	echo "NAMEまたはIDまたはpassがないよ<br>";
	echo '<a href="admin_create.php">ユーザー登録画面に戻る</a>';
	exit;
}

//パスワードをハッシュ化する
$p_string = password_hash($id .$raw_pass, PASSWORD_DEFAULT);


//var_dump($id);
//var_dump($p_string);


//DBに接続
require_once('./../db.php');

//var_dump($dbh);

//「準備された文」を用意
$sql =' INSERT INTO admin_users
(login_id,login_pass,admin_user_name)
VALUES (:login_id,:login_pass,:admin_user_name);';

$pre = $dbh->prepare($sql);
//var_dump($pre);
//値をバインド
$pre->bindValue(':admin_user_name', $name);
$pre->bindValue(':login_id', $id);
$pre->bindValue(':login_pass', $p_string);
//SQLを実行
$r = $pre->execute();
//var_dump($r);

//ユーザーがパスワードとidを忘れてしまうのは困るので確認のために表示
echo "<br>あなたのidは". $id ."<br>passは". $raw_pass ."です。";
$raw_pass = "";

?>

<p>ユーザー登録しました</p><br>
<a href="./admin_index.php">ログインをお願いします</a>

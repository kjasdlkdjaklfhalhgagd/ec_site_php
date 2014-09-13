<?php

//管理者ユーザの一覧を表示するページを作成

//ログインチェック
require_once('./../admin_auth.php');

//管理者ユーザーの一覧を表示

/*
テストなので
管理者は少ないが多かった場合は大変なので5人ずつ表示する
*/
$page_num = abs((int)@$_GET['p']);
//ここはNoticeエラー非表示
error_reporting(E_ALL & ~E_NOTICE);
$list_num = abs((int)@$_POST['list_num']);
if($list_num == ''){
	$list_num = 5;
}
//vd($list_num);

//DB接続
require_once('./../db.php');

//SQL発行
// - 準備された分の作成
$sql = 'SELECT * FROM admin_users ORDER BY 	login_id LIMIT :start, :listnum;';
$pre = $dbh->prepare($sql);
//vd($pre);

// - 値をバインド
$pre->bindValue(':start' , $page_num * $list_num, PDO::PARAM_INT);
$pre->bindValue(':listnum' , $list_num, PDO::PARAM_INT);

// - SQLを実行
$r = $pre->execute();
// 情報をゲット
$user_lists = $pre->fetchAll();
//var_dump($user_lists);

//全体の件数を把握
//-準備された文の作成
$sql = 'SELECT count(login_id) FROM admin_users;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

// - 値をバインド
//XXX値なし

//- SQLを実行
$r = $pre->execute();
//var_dump($r);

//情報をゲット
$total_user_num = $pre->fetch();
$total_user_num = $total_user_num[0];
//vd($total_user_num);



//pageの前後のリンク制御
if(0 !== $page_num){
	$back_link = true;//表示
}else{
	$back_link = false;//表示しない
}

$max_page_num = ceil($total_user_num / $list_num - 1);
if ($page_num < $max_page_num){
  $next_link = true;  //「次へ」を表示する
}else {
  $next_link = false; //「次へ」を表示しない
}

?>

<html>
<body>
<p>表示件数の変更</p>
<form action="./admin_user_summary.php" method="post">
	<input name="list_num">
	<input type="submit" value="change">
</form>

<h1>商品一覧</h1>
<table border="1">
<tr>
  <th>ユーザー
<?php
  foreach($user_lists as $item) {
    
    //user名がadmin_user_name
    $admin_user_name = h($item['admin_user_name']);
    $user_num = h($item['admin_number']);
    //
    echo '<tr>';
    echo "  <td>{$admin_user_name}\n";
    echo "  <td><a href='./admin_user_delete.php?user_num={$user_num}
    　　　　　　　　　　　.onClick='return confirm(\"本当に削除しますか?\");'>削除</a>\n";
  }
?>
</table>
<?php
  if (true === $back_link){
    ?>
<a href="./admin_user_summary.php?p=<?php echo $page_num - 1; ?>">[前へ]</a>
<?php  
}if (true === $next_link){
  echo ' | ';
  ?>
<a href="./admin_user_summary.php?p=<?php echo $page_num + 1; ?>">[次へ]</a>
<?php } ?>
<!-- // HTML部分に「次へ」「前へ」を付ける -->

<?php
require_once('./../footer.php');
?>
</body>
</html>

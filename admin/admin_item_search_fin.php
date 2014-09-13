<?php
require('./../admin_auth.php');

#商品情報を受け取る
$item_name = $_POST['item_name'];

if($item_name === ''){
	echo '検索する値がないよ';
	require_once('./footer.php');
	exit;
}
//var_dump($item_name);

//validateする
//ここまで来たら、検索する情報がそろってる
//db接続
require_once('./../db.php');

#商品登録(insert)
// -準備さえた文を作成
$sql = 'SELECT * FROM items WHERE item_name LIKE :item_name;';
$pre = $dbh->prepare($sql);
//値をバインド
//PDOでワイルドカードを使う場合はbindする時にワイルドカードを結合させる
$pre->bindValue(':item_name', "%" . $item_name . "%");

// - SQL実行
$r = $pre->execute();
//var_dump($r);
##エラーメッセージを表示
//var_dump($pre->errorInfo());

//情報を取得
$items_lists = $pre->fetchAll();
//var_dump($items_lists);


//smarty
require './../smarty_set.php';


//デザイナーがいなければOK 居たらやめた方がいい
$smarty->assign('title', '商品検索結果画面');
$smarty->assign('h1_name', '商品検索結果画面');
$smarty->assign('materiaru', '商品を検索したよ
	');
	
$smarty->display('sample.tpl');
?>

<table border="1">
<tr>
  <th>商品番号
  <th>商品名
  <th>商品説明
<?php
  foreach($items_lists as $item) {
    //
    $item_name = h($item['item_name']);
    $item_price = h($item['item_price']);
    $item_description = h($item['item_description']);
    //
    echo '<tr>';
    echo "  <td>{$item_name}";
    echo "  <td>{$item_price}\n";
    echo "  <td>{$item_description}\n";
  }
?>
</tr>
</table>
<?php
require_once('./../footer.php');
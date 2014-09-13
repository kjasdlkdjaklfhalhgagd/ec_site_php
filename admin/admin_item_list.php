<?php
// ログインしてるかチェック
require('./../admin_auth.php'); 

// 表示するPage数を取得する
$page_num = abs((int)@$_GET['p']);
//var_dump($page_num);
// 「1Pageあたりの表示件数」を指定
$list_num = 3; // テスト用に、一旦、３件

// やりたいのは「SELECT * FROM items WRHER item_number;」
// DBに接続
require_once('./../db.php');
// SQLを発行
// - 準備された文の作成
$sql = 'SELECT * FROM items ORDER BY item_number LIMIT :start, :listnum;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

// - 値をバインド
$pre->bindValue(':start' , $page_num * $list_num, PDO::PARAM_INT);
$pre->bindValue(':listnum' , $list_num          , PDO::PARAM_INT);

// - SQLを実行
$r = $pre->execute();
//var_dump($r);
// 情報をゲット
$items_lists = $pre->fetchAll();
//var_dump($items_lists);


//全体の件数を把握
//-準備された文の作成
$sql = 'SELECT count(item_number) FROM items;';
$pre = $dbh->prepare($sql);
//var_dump($pre);

// - 値をバインド
//XXX値なし

//- SQLを実行
$r = $pre->execute();
//var_dump($r);

//情報をゲット
$total_item_num = $pre->fetch();
$total_item_num = $total_item_num[0];
//var_dump($total_item_num);

//pageの前後のリンク制御
if (0 !== $page_num){
  $back_link = true;  //「前へ」を表示する
}else {
  $back_link = false; //「前へ」を表示しない
}



$max_page_num = ceil($total_item_num / $list_num - 1);
if ($page_num < $max_page_num){
  $next_link = true;  //「次へ」を表示する
}else {
  $next_link = false; //「次へ」を表示しない
}

/*
if (count($item_lists) === $list_num + 1){
  $next_link = true;  //「次へ」を表示する
}else {
  $next_link = false; //「次へ」を表示しない
}
*/


?>
<html>
<body>
<h1>商品一覧</h1>
<table border="1">
<tr>
  <th>商品番号
  <th>商品名
<?php
  foreach($items_lists as $item) {
    //
    $item_number = h($item['item_number']);
    $item_name_e = h($item['item_name']);
    $image_pass = h($item['image_pass']);
    //
    echo '<tr>';
    echo "  <td>{$item_number}\n";
    echo "  <td>{$item_name_e}\n";
    echo "  <td><a href='./admin_item_datail.php?item_number={$item_number}'>詳細</a>\n";
    echo "  <td><a href='./admin_item_change.php?item_number={$item_number}'>変更</a>\n";
    echo "  <td><a href='./admin_item_delete.php?item_number={$item_number}
    　　　　　　　　　　　onClick='return confirm(\"本当に削除しますか?\");'>削除</a>\n";
    echo "  <td><img src='{$image_pass}'' alt='' width='30' height='30' border='0' />\n";
  }
?>
</table>
<?php
  if (true === $back_link){
    ?>
<a href="./admin_item_list.php?p=<?php echo $page_num - 1; ?>">[前へ]</a>
<?php  
}if (true === $next_link){
  echo ' | ';
  ?>
<a href="./admin_item_list.php?p=<?php echo $page_num + 1; ?>">[次へ]</a>
<?php } ?>
<!-- // HTML部分に「次へ」「前へ」を付ける -->
<?php
require_once('./../footer.php');
?>
</body>
</html>

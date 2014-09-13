<?php

// XXX あとで、名前をadmin_footerに変更する
echo'<br><a href="admin_top.php">トップに戻る</a><br>';
//ファイルチェック
if(basename($_SERVER['PHP_SELF']) != "admin_item_list.php"){
	echo '<br><a href="admin_item_list.php">リストに戻る</a><br>';
	}

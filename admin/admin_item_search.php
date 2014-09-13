<?php

//admin_item_search.php
require('./../admin_auth.php'); // ログインしてるかチェック

require './../smarty_set.php';

//デザイナーがいなければOK　居たらやめた方がいい
$smarty->assign('title', '管理者用検索ページ');
$smarty->assign('h1_name', '検索ページ');
$smarty->assign('materiaru', '
	<form action="admin_item_search_fin.php" method="post">
	商品の名前         ::<input type="text" name="item_name"><br>
	<input type="submit" value="検索">
	</form>
	');


$smarty->display('sample.tpl');

require_once('./../footer.php');


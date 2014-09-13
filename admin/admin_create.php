<?php

//管理者ユーザー作成の情報のためのページ

require './../smarty_set.php';


//デザイナーがいなければOK　居たらやめた方がいい
$smarty->assign('title', 'ユーザー登録');
$smarty->assign('h1_name', 'ユーザー登録画面');
$smarty->assign('materiaru', '
	admin_create_fin.php
	');
$smarty->assign('botton',
	'登録');


$smarty->display('sample.tpl');


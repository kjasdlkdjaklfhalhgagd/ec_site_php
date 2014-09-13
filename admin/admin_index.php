<?php

//管理者ユーザーのログイン画面

ob_start();
session_start();

require_once './../smarty_set.php';


//デザイナーがいなければOK　居たらやめた方がいい
$smarty->assign('title', '管理ログイン');
$smarty->assign('h1_name', '管理ログイン画面');
$smarty->assign('materiaru', '
	./admin_login.php
	');
$smarty->assign('botton',
	'login');

$smarty->display('sample3.tpl');


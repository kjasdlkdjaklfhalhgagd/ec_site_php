<?php
//top.php管理画面のphp

##ログインチェック
require_once('./../admin_auth.php');

require_once './../smarty_set.php';

$smarty->assign('title', '管理ログイン');
$smarty->assign('h1_name', '管理画面　ログイン後Top Page');
$smarty->assign('materiaru', '
	');

$smarty->display('./admin_top.tpl');
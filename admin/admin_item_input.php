<?php

//ログインしているのか
require('./../admin_auth.php');

//smartyの呼び出し
require './../smarty_set.php';


//デザイナーがいなければOK　居たらやめた方がいい
$smarty->assign('title', '商品登録画面');
$smarty->assign('h1_name', '商品登録画面');
$smarty->assign('materiaru', '
	./admin_item_input_fin.php
	');


$smarty->display('sample2.tpl');
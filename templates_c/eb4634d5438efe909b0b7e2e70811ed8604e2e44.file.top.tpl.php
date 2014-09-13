<?php /* Smarty version Smarty-3.1.18, created on 2014-09-09 17:23:09
         compiled from "G:\xampp\htdocs\ecsite_test.\templates\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19614540eb8ed5a04f2-44424210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb4634d5438efe909b0b7e2e70811ed8604e2e44' => 
    array (
      0 => 'G:\\xampp\\htdocs\\ecsite_test.\\templates\\top.tpl',
      1 => 1410250982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19614540eb8ed5a04f2-44424210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'h1_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_540eb8ed86b318_89098030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540eb8ed86b318_89098030')) {function content_540eb8ed86b318_89098030($_smarty_tpl) {?><html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<!-- ユーザー新規作成用フォーム -->
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['h1_name']->value;?>
</h1>
	<a href="./admin_user_summary.php">管理者ユーザの一覧</a><br>
	<a href="./admin_item_input.php">商品登録</a><br>
	<a href="./admin_item_search.php">商品検索</a><br>
	<a href="./admin_item_list.php">商品一覧</a><br>
	<a href="./admin_logout.php">ログアウト</a><br>

</body>
</html><?php }} ?>

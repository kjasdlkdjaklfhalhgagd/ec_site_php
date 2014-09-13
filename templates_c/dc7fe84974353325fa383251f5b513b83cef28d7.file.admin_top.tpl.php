<?php /* Smarty version Smarty-3.1.18, created on 2014-09-09 18:28:42
         compiled from "G:\xampp\htdocs\ecsite_test.\templates\admin_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26980540ec84af123d7-21555804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc7fe84974353325fa383251f5b513b83cef28d7' => 
    array (
      0 => 'G:\\xampp\\htdocs\\ecsite_test.\\templates\\admin_top.tpl',
      1 => 1410252028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26980540ec84af123d7-21555804',
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
  'unifunc' => 'content_540ec84b1d78c5_89521590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540ec84b1d78c5_89521590')) {function content_540ec84b1d78c5_89521590($_smarty_tpl) {?><html>
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

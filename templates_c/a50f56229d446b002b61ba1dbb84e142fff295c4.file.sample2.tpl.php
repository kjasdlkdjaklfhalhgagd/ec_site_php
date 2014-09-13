<?php /* Smarty version Smarty-3.1.18, created on 2014-09-09 18:28:50
         compiled from "G:\xampp\htdocs\ecsite_test.\templates\sample2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1997540ec852023969-26229579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a50f56229d446b002b61ba1dbb84e142fff295c4' => 
    array (
      0 => 'G:\\xampp\\htdocs\\ecsite_test.\\templates\\sample2.tpl',
      1 => 1410248790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997540ec852023969-26229579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'h1_name' => 0,
    'materiaru' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_540ec85229c707_12315481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540ec85229c707_12315481')) {function content_540ec85229c707_12315481($_smarty_tpl) {?><html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<!-- 商品検索用フォーム -->
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['h1_name']->value;?>
</h1>
<form action="<?php echo $_smarty_tpl->tpl_vars['materiaru']->value;?>
" method="post">
	商品番号:<input name="item_number"><br>
	商品名:<input name="item_name"><br>
	商品金額:<input name="item_price"><br>
	商品詳細情報:<input name="item_description"><br><br>
	<input type="submit" value="登録">
	</form>
</body>
</html><?php }} ?>

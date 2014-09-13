<?php /* Smarty version Smarty-3.1.18, created on 2014-09-09 17:13:17
         compiled from "G:\xampp\htdocs\ecsite_test.\templates\sample.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8366540eb3f9079c60-02927507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd333e679de2f47540b50a6bbb7f9569a0a5bb87a' => 
    array (
      0 => 'G:\\xampp\\htdocs\\ecsite_test.\\templates\\sample.tpl',
      1 => 1410250346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8366540eb3f9079c60-02927507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_540eb3f9d89b71_82441848',
  'variables' => 
  array (
    'title' => 0,
    'h1_name' => 0,
    'materiaru' => 0,
    'botton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540eb3f9d89b71_82441848')) {function content_540eb3f9d89b71_82441848($_smarty_tpl) {?><html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<!-- ユーザー新規作成用フォーム -->
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['h1_name']->value;?>
</h1>
	<form action="<?php echo $_smarty_tpl->tpl_vars['materiaru']->value;?>
" method="post">
	name:<input name="name"><br>
	id:<input name="id"><br>
	password:<input type="password" name="pass"><br><br>
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['botton']->value;?>
">
	</form>

</body>
</html><?php }} ?>

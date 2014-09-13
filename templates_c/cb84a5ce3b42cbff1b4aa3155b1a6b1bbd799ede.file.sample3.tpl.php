<?php /* Smarty version Smarty-3.1.18, created on 2014-09-09 17:13:28
         compiled from "G:\xampp\htdocs\ecsite_test.\templates\sample3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6586540eb6a82b15c6-70856854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb84a5ce3b42cbff1b4aa3155b1a6b1bbd799ede' => 
    array (
      0 => 'G:\\xampp\\htdocs\\ecsite_test.\\templates\\sample3.tpl',
      1 => 1410250386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6586540eb6a82b15c6-70856854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'h1_name' => 0,
    'materiaru' => 0,
    'botton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_540eb6a841caa3_84797721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540eb6a841caa3_84797721')) {function content_540eb6a841caa3_84797721($_smarty_tpl) {?><html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<!-- ユーザーlogin用フォーム -->
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['h1_name']->value;?>
</h1>
	<form action="<?php echo $_smarty_tpl->tpl_vars['materiaru']->value;?>
" method="post">
	id:<input name="id"><br>
	password:<input type="password" name="pass"><br><br>
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['botton']->value;?>
">
	</form>

</body>
</html><?php }} ?>

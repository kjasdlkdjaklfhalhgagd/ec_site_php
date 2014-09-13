<?php

//ログインしているのかの確認

ob_start();
session_start();

//ログインしてる？
if ('' === strval(@$_SESSION['admin_login_id'])) {
 header('Location: admin_login.php');
 return;
}

//とりあえず、1つなので
//XSS対策
function h($s){
	return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function vd($vd){
	var_dump($vd);
}
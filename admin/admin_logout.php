<?php
//SESSION変数の['login_id']を空にする

//セッション開始
require('./../admin_auth.php');
$_SESSION['login_id'] = '';
header('Location: ./../index.html');
<?php

//XAMPPのmysql用

//DBに接続
$db_name = 'shop_ec';
$user = 'root';
$pass = '';
$host = 'localhost';
$dsn = "mysql:dbname={$db_name};host={$host};";

//PDOで接続
try{
	//dbに接続
	$dbh = new PDO($dsn, $user, $pass);
}catch (PDOException $e){
    echo "エラーだよ?<br>";
	echo $e->getMessage();
    return ;
}
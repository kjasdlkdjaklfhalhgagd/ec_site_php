<?php

$db_name = 'shop_ec';
$user = 'root';
$pass = '';
$host = 'localhost';
$dsn = "mysql:dbname={$db_name};host={$host};";


try{
	//dbに接続
	$dbh = new PDO($dsn, $user, $pass);
}catch (PDOException $e){
    echo "エラーだよ?<br>";
	echo $e->getMessage();
    return ;
}

var_dump($dbh);


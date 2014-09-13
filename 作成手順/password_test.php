<?php

$id = 'id';
$raw_pass = 'hoge';

//validateするPHP5.4以上
$t = microtime(true);
$p_string = password_hash($id .$raw_pass, PASSWORD_DEFAULT);

//逃げ道
for($i = 0; $i < 1500; $i++){
	$p_string = hash('sha512', $id . $p_string);
}
var_dump(microtime(true) - $t);

	
var_dump($p_string);


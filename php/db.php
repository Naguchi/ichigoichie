<?php

$db_type = 'mysql';
$user = 'naguchi';
$password = 'ickikazuki';
$server = 'localhost';
$db_name = 'ichigo';
$dsn = $db_type.'://'.$user.':'.$password.'@'.$server.'/'.$db_name;


$mysql = MDB2::connect( $dsn );

if (PEAR::isError($mysql)){
	die("<p>{$mysql->getMessage()}</p>");
}


?>

<?php

$user = 'root';
$password = 'root';
$db = 'ichigo';
$host = 'localhost';
$port = 3306;

$link = mysqli_connect(
	$host,
	$user,
	$password,
	$db
);

if(!$link) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	die( "Debugging error: " . mysqli_connect_error() );
} else {
//	echo "Success: Mysql Connection OK." . PHP_EOL;
}
mysqli_set_charset($link, "UTF8");

/*
$db_type = 'mysql';
$user = 'naguchi';
$password = 'ickikazuki';
$server = 'localhost';
$db_name = 'ichigo';
$dsn = $db_type.'://'.$user.':'.$password.'@'.$server.'/'.$db_name;
*/


//$mysql = MDB2::connect( $dsn );

//if (PEAR::isError($mysql)){
//	die("<p>{$mysql->getMessage()}</p>");
//}

	
#$row = mysqli_fetch_array($result);

?>

<?php
include( "./../function.php" );
include( "./../db.php" );

$friend = $_POST;

if (isset($friend["id"])) {
	$friend_id = $friend["id"];
	unset($friend["id"]);
	if (!empty($friend)) {
		$result = update_friend($friend_id, $friend);
		echo $result;
		return $result;
	}
}
return false;
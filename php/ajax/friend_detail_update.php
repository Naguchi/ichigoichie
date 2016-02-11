<?php
include( "./../function.php" );
include( "./../db.php" );

$friend = $_POST;

if (isset($friend["id"])) {
	$friend_id = $friend["id"];
	unset($friend["id"]);
	if (!empty($friend)) {
		$result = update_friend($friend["user_id"], $friend_id, $friend);
		return $result;
	}
}
return false;
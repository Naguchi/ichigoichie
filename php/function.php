<?php

function get_non_meeting_alert_list() {
	global $link;
	$sql = "
SELECT `name`, `last_meeting`, `alert_day`
FROM `ichie`
WHERE (`display_flag` = 1) AND (`alert_day` != 0) AND (DATE_ADD(`last_meeting`, INTERVAL `alert_day` DAY) <= NOW())
	";
	$result = mysqli_query($link, $sql);

	$non_meeting_alert_list = array();
	while($row = mysqli_fetch_assoc($result)) {
		array_push($non_meeting_alert_list, $row);
	}

	return $non_meeting_alert_list;
}

function get_friend_list() {
	global $link;
	$sql = "
SELECT * FROM `ichie` WHERE `display_flag` != 0 ORDER BY `last_meeting` DESC
	";
	$result = mysqli_query($link, $sql);

	$friend_list = array();
	while($row = mysqli_fetch_assoc($result)) {
		array_push($friend_list, $row);
	}

	return $friend_list;
}
?>


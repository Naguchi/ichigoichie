<?php
function isPhone() {
	if ( (preg_match('/Android/', USER_AGENT))  || (preg_match('/iPhone/', USER_AGENT)) ) {
		return true;
	} else {
		return false;
	}
}

function get_non_meeting_alert_list() {
	global $link;
	$sql = "
SELECT `id`, `name`, `last_meeting`, `alert_day`
FROM `ichie`
WHERE (`display_flag` = 1)
  AND (`alert_day` != 0)
  AND (DATE_ADD(`last_meeting`, INTERVAL `alert_day` DAY) <= NOW())
	";
	$result = mysqli_query($link, $sql);

	$non_meeting_alert_list = array();
	while($row = mysqli_fetch_assoc($result)) {
		array_push($non_meeting_alert_list, $row);
	}

	return $non_meeting_alert_list;
}

function get_non_meeting_alert_count() {
	global $link;
	$sql = "
SELECT `id`
FROM `ichie`
WHERE (`display_flag` = 1) 
  AND (`alert_day` != 0) 
  AND (DATE_ADD(`last_meeting`, INTERVAL `alert_day` DAY) <= NOW())
	";
	$result = mysqli_query($link, $sql);
	$non_meeting_alert_count = mysqli_num_rows($result);

	return $non_meeting_alert_count;
}

function get_friend_list($display_flag = false) {
	global $link;
	$sql = "
SELECT *, (DATEDIFF(NOW(), `last_meeting`) / `alert_day`) AS 'priority'
FROM `ichie`";
if (!$display_flag) {
	$sql .= "
 WHERE `display_flag` != 0
";
}
	$sql .= "
 ORDER BY `priority` DESC, name ASC
	";
	$result = mysqli_query($link, $sql);

	$friend_list = array();
	while($row = mysqli_fetch_assoc($result)) {
		array_push($friend_list, $row);
	}

   return $friend_list;
}

function day_diff($date1, $date2) {

	// 日付をUNIXタイムスタンプに変換
	$timestamp1 = strtotime($date1);
	$timestamp2 = strtotime($date2);

	// 何秒離れているかを計算
	$seconddiff = abs($timestamp2 - $timestamp1);

	// 日数に変換
	$daydiff = $seconddiff / (60 * 60 * 24);
	$daydiff = floor($daydiff);

	return $daydiff;
}

function add_friend($name, $last_meeting, $alert_day) {
	global $link;
	$sql = " INSERT INTO `ichie` (`name`, `last_meeting`, `alert_day`) VALUES ('".$name."', '".$last_meeting."', $alert_day) ";
	$sql = str_replace(array('\r\n','\n','\r'), '', $sql);
	$sql = htmlspecialchars($sql);

	return mysqli_query($link, $sql);
}

function get_friend_detail($friend_id) {
	global $link;
	$sql = "
SELECT * , (DATEDIFF(NOW(), `last_meeting`) / `alert_day`) AS 'priority'
FROM `ichie`
WHERE id = ${friend_id}
	";
	$result = mysqli_query($link, $sql);

	$friend_detail_info = array();
	while($row = mysqli_fetch_assoc($result)) {
		$friend_detail_info = $row;
	}

	return $friend_detail_info;
}

function update_friend($friend_id, array $update_info) {
	global $link;

	$sql = "
UPDATE `ichie`
SET ";
	if (isset($update_info["last_meeting"])) { $sql .= "
`last_meeting` = '" . $update_info["last_meeting" ] . "' "; }
	if (isset($update_info["name"])) { $sql .= "
, `name` = '" . $update_info["name" ] . "' "; }
	if (isset($update_info["last_meeting"])) { $sql .= "
, `alert_day` = '" . $update_info["alert_day" ] . "' "; }
	if (isset($update_info["display_flag"])) { $sql .= "
, `display_flag` = '" . $update_info["display_flag" ] . "' "; }
	$sql .= "
WHERE id = ${friend_id}
	";

	$result = mysqli_query($link, $sql);
	return $result;
}
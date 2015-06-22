<?php
function listAlerts ($last_meeting, $alert_day) {
// SELECT result
//	$rows = $mysql->queryAll( "SELECT * FROM ichie" );
	$friend_name = "なぐち";
	$last_meeting = "2014-09-07";
	$alert_day = "5";
echo $friend_name;
//echo $dsn;

// non_meeting Check
	$last_meeting_ut = strtotime($last_meeting);
	$today_ut = strtotime( date('Y-m-d') );
	$non_meeting = ($today_ut - $last_meeting_ut) / (60 * 60 * 24);

	print "<ul>";
	if ($alert_day <= $non_meeting ){
		print "<li>";
		displayAlert($friend_name, $non_meeting);
		print "</li>";
	}
	print "</ul>";
	print "\n";
}

?>

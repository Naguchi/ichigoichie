<?php
include( "/var/www/ichigoichie/php/db.php" );
include( "/var/www/ichigoichie/php/function.php" );

$get_non_meeting_alert_list = get_non_meeting_alert_list();

if (!empty($get_non_meeting_alert_list)) {
	$mail_to = "lucrerakuri@gmail.com";
	$subject = "【ほこほい】一期一会アラート";
	$message = "";

	foreach($get_non_meeting_alert_list as $alert_info) {
	  $message .= $alert_info["name"] . "さんと" . $alert_info["alert_day"] . "日間 会っていません。\n";
	}

#	mail($mail_to, $subject, $message);
	mail($mail_to, $subject, "test");
}

?>

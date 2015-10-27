<?php
include( "./db.php" );
include( "./function.php" );

$mail_to = "lucrerakuri@gmail.com";
$subject = "【ほこほい】一期一会アラート";
$message = "";


foreach(get_non_meeting_alert_list() as $alert_info) {
  $message .= $alert_info["name"] . "さんと" . $alert_info["alert_day"] . "日間 会っていません。\n";
}

mail($mail_to, $subject, $message);





?>

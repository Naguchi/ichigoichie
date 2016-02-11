
<?php
include( "./../function.php" );
include( "./../db.php" );

$friend = $_POST;
$result = add_friend($friend["user_id"], $friend["name"], $friend["last_meeting"], $friend["alert_day"]);

<?php
include( "./function.php" );
include( "./db.php" );

$friend = $_POST;
$result = add_friend($friend["name"], $friend["last_meeting"], $friend["alert_day"]);

<?php
include( "./function.php" );

echo "sad";
$friend = $_POST;
$result = add_friend($friend["name"], $friend["last_meeting"], $friend["alert_day"]);

return $result;
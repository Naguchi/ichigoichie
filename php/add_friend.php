asd
<?php
include( "./function.php" );

$friend = $_POST;
echo json_encode($friend);
/*
$result = add_friend($friend["name"], $friend["last_meeting"], $friend["alert_day"])

echo $result;
*/
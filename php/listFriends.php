<?php

$rows = $mysql->queryAll("SELECT * FROM ichie");

print "<TABLE border='1' class='tableCenter'>";
print "<TR>";
print "<TH>Name</TH> <TH>Last Meeting</TH><th>Non Meeting</th>";
print "</TR>";
foreach ($rows as $row) {
	$last_meeting_ut = strtotime($row[2]);
	$today_ut = strtotime( date('Y-m-d') );
	$non_meeting = ($today_ut - $last_meeting_ut) / (60 * 60 * 24);

	print "<TR>";
	print "<TD>$row[0]</TD>";
	print "<TD>$row[2]</TD>";
	print "<td>". $non_meeting ." Days"."</td>";
	print "</TR>";
}
print "</TABLE>";

?>

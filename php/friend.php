<div class="posCenter"><h4>■ともだち■</h4></div>
<table>
	<tr>
		<th>名前</th>
		<th>最後に会った日</th>
		<th>アラート</th>
	</tr>
<?php foreach(get_friend_list() as $alert_info) { ?>
	<tr class="posCenter">
		<td><?php echo $alert_info["name"]; ?></td>
		<td><?php echo $alert_info["last_meeting"]; ?></td>
		<td><?php echo $alert_info["alert_day"]; ?>日間</td>
	</tr>
<?php } ?>
</table>
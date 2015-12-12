<div class="posCenter"><h4>■ともだちリスト■</h4></div>
<table>
	<tr>
		<th>名前</th>
		<th>最後に会った日</th>
		<th>不通期間</th>
	</tr>
<?php foreach(get_friend_list() as $alert_info) { ?>
	<tr class="posCenter">
		<td><a href="friend_detail.php?id=<?php echo $alert_info["id"]; ?>"><?php echo $alert_info["name"]; ?></td>
		<td><?php echo $alert_info["last_meeting"]; ?></td>
		<td><?php echo day_diff($alert_info["last_meeting"], date("Y-m-d")); ?>日目</td>
	</tr>
<?php } ?>
</table>

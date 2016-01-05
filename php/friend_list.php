<div class="posCenter"><h4>■ともだちリスト■</h4></div>
<table>
	<tr>
		<th>更新</th>
		<th>名前</th>
		<th>最後に会った日</th>
		<th>不通期間</th>
	</tr>
<?php foreach(get_friend_list() as $friend_info) { ?>
	<tr class="posCenter">
		<td><input type="button" id="<?php echo $friend_info["id"]; ?>" class="btn_last_mettig_update_friend" value="☆"></td>
		<td><a href="friend_detail.php?id=<?php echo $friend_info["id"]; ?>"><?php echo $friend_info["name"]; ?></td>
		<td><?php echo $friend_info["last_meeting"]; ?></td>
		<td><?php echo day_diff($friend_info["last_meeting"], date("Y-m-d")); ?>日目</td>
	</tr>
<?php } ?>
</table>

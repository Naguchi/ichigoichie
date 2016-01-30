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
		<td><input type="button" id="<?php echo $friend_info["id"]; ?>" class="btn_last_meeting_update_friend lenauto" value="☆"></td>
		<td><span class="len9"><a href="./?id=<?php echo $friend_info["id"]; ?>"><?php echo $friend_info["name"]; ?></a></td>
		<td><span><?php echo $friend_info["last_meeting"]; ?></span></td>
		<td><span><?php echo day_diff($friend_info["last_meeting"], date("Y-m-d")); ?>日目</span></td>
	</tr>
<?php } ?>
</table>

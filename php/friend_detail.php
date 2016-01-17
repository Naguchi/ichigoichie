<?php
if (empty($_GET)) exit;
$get = $_GET;
$friend_id = $get["id"];
$friend_detail_info = get_friend_detail($friend_id);
?>
<div class="posCenter"><h4>■ともだち詳細■</h4></div>

<form>
<table>
	<tr class="posCenter">
		<th>更新</th>
		<th>ID</th>
		<th>名前</th>
		<th>最後に会った日</th>
		<th>不通期間</th>
		<th>アラート</th>
		<th>優先度</th>
		<th>表示</th>
	</tr>
	<tr class="posCenter">
		<td><input type="button" id="detail_update_friend" class="btn_detail_update_friend" value="☆"></td>
		<td><input type="text" id="friend_id" class="len10" value="<?php echo $friend_detail_info["id"]; ?>" ></input></td>
		<td><input type="text" id="friend_name" class="len10" value="<?php echo $friend_detail_info["name"]; ?>" ></input></td>
		<td><input type="date" id="friend_last_meeting" class="len10" value="<?php echo $friend_detail_info["last_meeting"]; ?>" ></input></td>
		<td><?php echo day_diff($friend_detail_info["last_meeting"], date("Y-m-d")); ?>日目</td>
		<td><select id="friend_alert_day" class="len8">
			<option value="30" <?php if ($friend_detail_info["alert_day"] == 30) echo "selected"; ?>>１ヶ月間</option>
	 		<option value="60" <?php if ($friend_detail_info["alert_day"] == 60) echo "selected"; ?>>２ヶ月間</option>
	 		<option value="90" <?php if ($friend_detail_info["alert_day"] == 90) echo "selected"; ?>>３ヶ月間</option>
			<option value="180" <?php if ($friend_detail_info["alert_day"] == 180) echo "selected"; ?>>半年</option>
			<option value="365" <?php if ($friend_detail_info["alert_day"] == 365) echo "selected"; ?>>１年</option>
		</select></td>
		<td><?php echo ($friend_detail_info["priority"]) * 100; ?>％</td>
		<td><select id="friend_display_flag" class="len8">
			<option value="1" <?php if ($friend_detail_info["display_flag"] == 1) echo "selected"; ?>>表示</option>
			<option value="0" <?php if ($friend_detail_info["display_flag"] == 0) echo "selected"; ?>>非表示</option>
		</select></td>
	</tr>
</table>
</form>
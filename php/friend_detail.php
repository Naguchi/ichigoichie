<?php
if (empty($_GET)) exit;
$get = $_GET;
$friend_id = $get["id"];
$friend_detail_info = get_friend_detail($friend_id);
?>
<div class="posCenter"><h4>■ともだち詳細■</h4></div>

<?php if (isPhone()) { ?>
<form>
<table>
	<tr>
		<th>ID</th>
		<td><span class="lenauto"><?php echo $friend_detail_info["id"]; ?></span></td>
		<input type="hidden" id="friend_id" value="<?php echo $friend_detail_info["id"]; ?>">
	</tr>
	<tr>
		<th>名前</th>
		<td><input type="text" id="friend_name" class="len9" value="<?php echo $friend_detail_info["name"]; ?>" ></input></td>
	</tr>
	<tr>
		<th>最後に会った日</th>
		<td><input type="date" id="friend_last_meeting" class="len9" value="<?php echo $friend_detail_info["last_meeting"]; ?>" ></input></td>
	</tr>
	<tr>
		<th>不通期間</th>
		<td><span class="lenauto"><?php echo day_diff($friend_detail_info["last_meeting"], date("Y-m-d")); ?>日目</span></td>
	</tr>
	<tr>
		<th>アラート</th>
		<td><select id="friend_alert_day" class="len9">
			<option value="30" <?php if ($friend_detail_info["alert_day"] == 30) echo "selected"; ?>>１ヶ月間</option>
			<option value="60" <?php if ($friend_detail_info["alert_day"] == 60) echo "selected"; ?>>２ヶ月間</option>
			<option value="90" <?php if ($friend_detail_info["alert_day"] == 90) echo "selected"; ?>>３ヶ月間</option>
			<option value="180" <?php if ($friend_detail_info["alert_day"] == 180) echo "selected"; ?>>半年</option>
			<option value="365" <?php if ($friend_detail_info["alert_day"] == 365) echo "selected"; ?>>１年</option>
		</select></td>
	</tr>
	<tr>
		<th>優先度</th>
		<td><span><?php echo ($friend_detail_info["priority"]) * 100; ?>％</span></td>
	</tr>
	<tr>
		<th>表示</th>
		<td><select id="friend_display_flag" class="len9">
			<option value="1" <?php if ($friend_detail_info["display_flag"] == 1) echo "selected"; ?>>表示</option>
			<option value="0" <?php if ($friend_detail_info["display_flag"] == 0) echo "selected"; ?>>非表示</option>
		</select></td>
	</tr>
	<tr>
		<th>更新</th>
		<td><input type="button" id="detail_update_friend" class="btn_detail_update_friend len9" value="☆"></td>
	</tr>
</table>
</form>

<?php } else { ?>

<form>
<table>
	<tr class="posCenter">
		<th>ID</th>
		<th>名前</th>
		<th>最後に会った日</th>
		<th>不通期間</th>
		<th>アラート</th>
		<th>優先度</th>
		<th>表示</th>
		<th>更新</th>
	</tr>
	<tr class="posCenter">
		<td><span><?php echo $friend_detail_info["id"]; ?></span></td>
		<input type="hidden" id="friend_id" value="<?php echo $friend_detail_info["id"]; ?>">
		<td><input type="text" id="friend_name" class="len9" value="<?php echo $friend_detail_info["name"]; ?>" ></input></td>
		<td><input type="date" id="friend_last_meeting" class="len9" value="<?php echo $friend_detail_info["last_meeting"]; ?>" ></input></td>
		<td><span><?php echo day_diff($friend_detail_info["last_meeting"], date("Y-m-d")); ?>日目</span></td>
		<td><select id="friend_alert_day" class="len9">
			<option value="30" <?php if ($friend_detail_info["alert_day"] == 30) echo "selected"; ?>>１ヶ月間</option>
			<option value="60" <?php if ($friend_detail_info["alert_day"] == 60) echo "selected"; ?>>２ヶ月間</option>
			<option value="90" <?php if ($friend_detail_info["alert_day"] == 90) echo "selected"; ?>>３ヶ月間</option>
			<option value="180" <?php if ($friend_detail_info["alert_day"] == 180) echo "selected"; ?>>半年</option>
			<option value="365" <?php if ($friend_detail_info["alert_day"] == 365) echo "selected"; ?>>１年</option>
		</select></td>
		<td><span><?php echo ($friend_detail_info["priority"]) * 100; ?>％</span></td>
		<td><select id="friend_display_flag" class="len6">
			<option value="1" <?php if ($friend_detail_info["display_flag"] == 1) echo "selected"; ?>>表示</option>
			<option value="0" <?php if ($friend_detail_info["display_flag"] == 0) echo "selected"; ?>>非表示</option>
		</select></td>
		<td><input type="button" id="detail_update_friend" class="btn_detail_update_friend len3" value="☆"></td>
	</tr>
</table>
</form>

<?php } ?>
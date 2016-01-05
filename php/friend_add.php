<div class="posCenter"><h4>■ともだち追加■</h4></div>

<?php if (preg_match('/Android/', $_SERVER['HTTP_USER_AGENT'])) { ?>

<form>
<table>
	<tr>
		<th>名前</th><td><input autofocus type="text" id="friend_name" class="len10" value="" ></input></td>
  </tr>
	<tr>
		<th>最後に会った日</th><td><input type="date" id="friend_last_meeting" class="len10" value="<?php echo date('Y-m-d'); ?>"></td>
  </tr>
	<tr>
		<th>アラート</th><td><select id="friend_alert_day" class="len10">
                      			<option value="30">１ヶ月間</option>
                      			<option value="60">２ヶ月間</option>
                      			<option value="180">３ヶ月間</option>
                      			<option value="365">１年</option>
                     </select></td>
  </tr>
	<tr>
		<th>登録</th><td><input type="button" id="btn_add_friend" class="len10" value="よろしく！！"></td>
	</tr>
</table>
</form>

<?php } else { ?>

<form>
<table>
	<tr>
		<th>名前</th>
		<th>最後に会った日</th>
		<th>アラート</th>
		<th>登録</th>
	</tr>
	<tr class="posCenter">
		<td><input type="text" id="friend_name" class="len10" value="" autofocus></input></td>
		<td><input type="date" id="friend_last_meeting" class="len10" value="<?php echo date('Y-m-d'); ?>"></td>
		<td><select id="friend_alert_day" class="len8">
			<option value="30">１ヶ月間</option>
			<option value="60">２ヶ月間</option>
			<option value="180">３ヶ月間</option>
			<option value="7">１週間</option>
			<option value="14">２週間</option>
			<option value="21">３週間</option>
		</select></td>
		<td><input type="button" id="btn_add_friend" class="len10" value="よろしく！！"></td>
	</tr>
</table>
</form>

<?php } ?>

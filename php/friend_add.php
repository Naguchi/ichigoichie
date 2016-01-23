<div class="posCenter"><h4>■ともだち追加■</h4></div>

<?php if (isPhone()) { ?>

<form>
<table>
	<tr>
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
		<td><input type="text" id="friend_name" class="len9" value="" autofocus></input></td>
		<td><input type="date" id="friend_last_meeting" class="len9" value="<?php echo date('Y-m-d'); ?>"></td>
		<td><select id="friend_alert_day" class="len9">
			<option value="30">１ヶ月間</option>
			<option value="60">２ヶ月間</option>
	 			<option value="90">３ヶ月間</option>
			<option value="180">半年</option>
			<option value="365">１年</option>
		</select></td>
		<td><input type="button" id="btn_add_friend" class="len9" value="よろしく！！"></td>
	</tr>
</table>
</form>

<?php } ?>

<script type="text/javascript">
$(function() {
	$("#btn_add_friend").click(function() {
		if ($("#friend_name").val().length) {
			$.ajax({
			    url: 'php/add_friend.php',
			    type: 'post',
			    data: {
					name: $("#friend_name").val(),
					last_meeting: $("#friend_last_meeting").val(),
					alert_day: $("#friend_alert_day").val()
				},
			    success: function () {
			        console.dir("success");
			        location.reload();
			    },
			    error: function () {
			    	console.dir("error");
			    }
			});
		}
	});
});
</script>

<div class="posCenter"><h4>■追加■</h4></div>
<form>
<table>
	<tr>
		<th>名前</th>
		<th>最後に会った日</th>
		<th>アラート</th>
		<th>登録</th>
	</tr>
	<tr class="posCenter">
		<td><input type="text" id="friend_name" class="len10" value=""></input></td>
		<td><input type="text" id="friend_last_meeting" class="len10" value="<?php echo date('Y-m-d'); ?>"></td>
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

<div class="posCenter"><h4>■ともだち■</h4></div>
<table>
	<tr>
		<th>名前</th>
		<th>最後に会った日</th>
		<th>不通期間</th>
		<th>アラート</th>
	</tr>
<?php foreach(get_friend_list() as $alert_info) { ?>
	<tr class="posCenter">
		<td><?php echo $alert_info["name"]; ?></td>
		<td><?php echo $alert_info["last_meeting"]; ?></td>
		<td><?php echo day_diff($alert_info["last_meeting"], date("Y-m-d")); ?>日目</td>
		<td><?php echo $alert_info["alert_day"]; ?>日</td>
	</tr>
<?php } ?>
</table>
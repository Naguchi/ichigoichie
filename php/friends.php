<script type="text/javascript">
$(function() {
	$("#btn_add_friend").click(function() {
		$.ajax({
		    url: 'php/add_friend.php',
		    type: 'post',
		    dataType: 'html',
		    data: {
				name: $("#friend_name").val(),
				last_meeting: $("#friend_last_meeting").val(),
				alert_day: $("#friend_alert_day").val()
			},
		    success: function (responce) {
		        console.dir(responce);
//		        location.reload();
		    },
		    error: function (responce) {
		    	console.dir("error");
		        console.dir(responce);
		    }
		});
	});
});
/*
$(function() {
	$("#btn_add_friend").click(function() {
		$.ajax({
			url: "php/add_friend.php",
			type: "post",
			dataType: "json",
			data: {
				name: $("#friend_name").val(),
				last_meeting: $("#friend_last_meeting").val(),
				alert_day: $("#friend_alert_day").val()
			}
		})
		.done(function(responce) {
alert(responce.data);
		})
		.fail(function(responce){
alert(responce.data);
		});
	});
});
*/
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
		<td><input type="text" id="friend_name" value="<?php echo date('Y-m-d'); ?>" ></input></td>
		<td><input type="text" id="friend_last_meeting" value="<?php echo date('Y-m-d'); ?>"></td>
		<td><input type="text" id="friend_alert_day" value="30">日間</td>
		<td><input type="button" id="btn_add_friend" value="よろしく！！"></td>
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
		<td><?php echo day_diff($alert_info["last_meeting"], date("Y-m-d")); ?>日間</td>
		<td><?php echo $alert_info["alert_day"]; ?>日間</td>
	</tr>
<?php } ?>
</table>
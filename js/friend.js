$(function() {
	$("#btn_add_friend").click(function() {
		var friend_name = $("#friend_name").val();
		if (friend_name.length && confirm(friend_name + 'さんを登録しますか？')) {
			$.ajax({
				url: 'php/ajax/friend_add.php',
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
					console.dir("error: friend add error");
				}
			});
		}
	});

	$(".btn_last_meeting_update_friend").click(function() {
		var friend_name = $(this).closest("tr").children("td")[1].children.item(0).text;
		if (confirm(friend_name + 'さんを更新しますか？')) {
			var friend_id = $(this).attr("id");
			var now = new Date();
			var last_meeting = (now.getFullYear())+"-"+("0"+(now.getMonth()+1)).slice(-2)+"-"+("0"+(now.getDate())).slice(-2);
			$.ajax({
				url: 'php/ajax/friend_last_meeting_update.php',
				type: 'post',
				data: {
					id: friend_id,
					last_meeting: last_meeting,
				},
				success: function () {
					console.dir("success");
					location.reload();
				},
				error: function (msg) {
					console.dir("error: last metting update error");
					console.dir(msg);
				}
			});
		}
	});

	$("#detail_update_friend").click(function() {
		var name = $("#friend_name").val();
		if (confirm(name + "さんの情報を更新します。")) {
			var id = $("#friend_id").val();
			var name = $("#friend_name").val();
			var last_meeting = $("#friend_last_meeting").val();
			var alert_day = $("#friend_alert_day").val();
			var display_flag = $("#friend_display_flag").val();
			$.ajax({
				url: 'php/ajax/friend_detail_update.php',
				type: 'post',
				data: {
					id: id,
					name: name,
					last_meeting: last_meeting,
					alert_day: alert_day,
					display_flag: display_flag
				},
				success: function (msg) {
//					console.dir("success");
					console.dir(msg);
					location.reload();
				},
				error: function (msg) {
					console.dir("error: friend detail update error");
					console.dir(msg);
				}
			});
		}
	});
});
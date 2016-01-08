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

	$(".btn_last_mettig_update_friend").click(function() {
		var friend_name = $(this).closest("tr").children("td")[1].children.item(0).text;
		if (confirm(friend_name + 'さんを更新しますか？')) {
			var friend_id = $(this).attr("id");
			var now = new Date();
			var last_mettig = (now.getFullYear())+"-"+("0"+(now.getMonth()+1)).slice(-2)+"-"+("0"+(now.getDate())).slice(-2);
			$.ajax({
				url: 'php/ajax/friend_last_mettig_update.php',
				type: 'post',
				data: {
					id: friend_id,
					last_meeting: last_mettig,
				},
				success: function () {
					console.dir("success");
					location.reload();
				},
				error: function (msg) {
					console.dir("error: friend add error");
					console.dir(msg);
				}
			});
		}
	});
});
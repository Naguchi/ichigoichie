<?php
if (empty($_GET)) exit;
$get = $_GET;
$friend_id = $get["id"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<base href="./">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title>一期一会</title>
	<link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" />
	<script src="./js/jquery-2.1.4.js"></script>
	<script src="./js/webStrage.js"></script>
	<script src="./js/modernizr.min.js"></script>
</head>

<body>
<?php
	include( "./php/db.php" );
	include( "./php/function.php" );
?>


<div id="wrap">
<header id="head"><span class="title">一期一会</span></header>

<div class="posCenter"><h4>■ともだち詳細■</h4></div>
<table>
	<tr class="posCenter">
		<th>ID</th>
		<th>名前</th>
		<th>最後に会った日</th>
		<th>不通期間</th>
		<th>アラート</th>
		<th>表示</th>
	</tr>
<?php $friend_detail_info = get_friend_detail($friend_id);
?>
	<tr class="posCenter">
		<td><?php echo $friend_detail_info["id"]; ?></td>
		<td><?php echo $friend_detail_info["name"]; ?></td>
		<td><?php echo $friend_detail_info["last_meeting"]; ?></td>
		<td><?php echo day_diff($friend_detail_info["last_meeting"], date("Y-m-d")); ?>日目</td>
		<td><?php echo $friend_detail_info["alert_day"]; ?>日</td>
		<td><?php echo ($friend_detail_info["display_flag"]) ? "表示" : "非表示"; ?></td>
	</tr>
</table>

<footer id="foot"><a href="./">indexの最後まで読み込んだよ!!!</a></footer>

</div><!-- wrap -->

</body>
</html>

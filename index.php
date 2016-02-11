<?php
	include( "./php/ini.php" );
	include( "./php/db.php" );
	include( "./php/function.php" );
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
	<script src="./js/friend.js"></script>
</head>

<body>
<div id="wrap">

<header id="head">
	<a href="/ichigoichie/"><span class="title">一期一会</span></a>
</header>

<section id="login">
<?php include( "./php/login.php" ); ?>
</section>

<?php if (get_non_meeting_alert_count($user_id)) { ?>
<section id="alert">
	<?php include( "./php/friend_alerts.php" ); ?>
</section>
<?php } ?>

<!--
<aside id="modernizr">
	<div class="posCenter"> <h4>■HTML5機能■</h4> </div>
	<script type="text/javascript" src="./js/modernizr.js" ></script>
	<?	//include("./php/listCalledClass.php"); ?>
</aside>
-->

<?php if (empty($get["id"])) { ?>
<section class="friends">
	<?php include( "./php/friend_add.php" ); ?>
</section>
<?php } else { ?>
<section class="friends">
	<?php include( "./php/friend_detail.php" ); ?>
</section>
<?php } ?>

<section class="friends">
	<?php include( "./php/friend_list.php" ); ?>
</section>


<section class="friends">
<?php if (empty($get["display"])) { ?>
	<a href="./?display=1">全友達</a>
<?php } else { ?>
	<?php include( "./php/friend_display.php" ); ?>
<?php } ?>
</section>

<footer id="foot"><a href="./">indexの最後まで読み込んだよ!!!</a></footer>

</div><!-- wrap -->

<input id="user_id" type="hidden" value="<?php echo $user_id; ?>">
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
	<base href="./">
	<meta charset="UTF-8">
	<META HTTP-EQUIV="Refresh" CONTENT="5">
	<title>一期一会</title>
	<link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" />
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script src="./js/webStrage.js"></script>
	<script src="./js/modernizr.min.js"></script>
</head>

<body>
<?php
	include_once 'MDB2.php';
	include( "./php/db.php" );
	include( "./php/alert.php" );
	include( "./php/displayList.php" );

	$user = "なぐち";


?>


<div id="wrap">

<header id="head">
	<span class="title">一期一会</span>
	<div class="posRight">ようこそ <? print $user; ?>さん</div>
</header>
	

<section id="alert">
	<div class="posCenter"> <h4>■アラート■</h4> </div>
	<?php listAlerts( "dummy", "dummy"); ?>
</section>


<aside id="modernizr">
	<div class="posCenter"> <h4>■HTML5機能■</h4> </div>
	<script type="text/javascript" src="./js/modernizr.js" ></script>
	<?  include("./php/listCalledClass.php"); ?>
</aside>

<section id="friends">
	<div class="posCenter"> <h4>■ToMoDaChi!!!■</h4> </div>
	<?php include_once './php/listFriends.php'; ?>
</section>


<footer id="foot"><a href="./">indexの最後まで読み込んだよ!!!</a></footer>

</div><!-- wrap --> </body>

</html>

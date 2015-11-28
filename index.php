<!DOCTYPE html>
<html lang="ja">
<head>
	<base href="./">
	<meta charset="UTF-8">
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

<section id="alert">
	<?php include( "./php/alert.php" ); ?>
</section>

<!--
<aside id="modernizr">
	<div class="posCenter"> <h4>■HTML5機能■</h4> </div>
	<script type="text/javascript" src="./js/modernizr.js" ></script>
	<?  //include("./php/listCalledClass.php"); ?>
</aside>
-->

<section id="friends">
	<?php //include( "./php/add_friend.php" ); ?>
	<?php include( "./php/friends.php" ); ?>
</section>


<footer id="foot"><a href="./">indexの最後まで読み込んだよ!!!</a></footer>

</div><!-- wrap -->

</body>
</html>

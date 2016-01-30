<div class="posCenter"><h4>■登録済みともだち■</h4></div>
<table>
	<tr>
<?php for ($i=0; $i<3; $i++) { ?>
	<th class="len6">名前</th><th class="len3">表示</th>
<?php } ?>
	</tr>
<?php
$friend_list = get_friend_list(true);
$list = 0;
while ($list <= count($friend_list)) { ?>
	<tr>
<?php for ($i=0; $i<3; $i++, $list++) { if (isset($friend_list[$list])) { ?>
		<th><span class="len6"><a href="./?id=<?php echo $friend_list[$list]["id"]; ?>"><?php echo $friend_list[$list]["name"]; ?></a></span></th>
		<th><span class="len3"><?php echo ($friend_list[$list]["display_flag"]) ? "表示" : "非表示"; ?></span></th>
<?php } } ?>
	</tr>
<?php } ?>
</table>
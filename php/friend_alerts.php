<div class="posCenter"><h4>■アラート■</h4></div>
<ul>
<?php foreach(get_non_meeting_alert_list($user_id) as $alert_info) { ?>
	<li><?php echo $alert_info["name"]; ?>さんと <?php echo day_diff($alert_info["last_meeting"], date("Y-m-d")); ?>日間 会っていません。</li>
<?php } ?>
</ul>

<div class="posCenter"><h4>■アラート■</h4></div>
<ul>
<?php foreach(get_non_meeting_alert_list() as $alert_info) { ?>
	<li><?php echo $alert_info["name"]; ?>さんと <?php echo $alert_info["alert_day"]; ?>日間 会っていません。</li>
<?php } ?>
</ul>

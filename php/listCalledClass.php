<?php
echo "<ul>";
if (class_exists('MDB2')) {
	echo "<li>";
	echo "MDB2 is found";
	echo "</li>";
} else {
	echo "<li>";
	echo "MDB2 is not found...";
	echo "</li>";
}
echo "</ul>";
?>

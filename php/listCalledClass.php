<?php
print "<ul>";
if (class_exists('MDB2')) {
	print "<li>";
	print "MDB2 is found";
	print "</li>";
} else {
	print "<li>";
	print "MDB2 is not found...";
	print "</li>";
}
print "</ul>";
?>

<?php
session_start();
if(isset($_GET['logout'])) {
include "1.php";
}
?>
<meta charset="UTF-8"> 
<?php
if (isset($_SESSION['admin'])) {
	echo "hallo, ".$_SESSION['admin'];
	echo '<p><a href="admin.php/?logout=true">del</a></p>';
}
?>
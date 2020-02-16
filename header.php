<?php
session_start();
 $_SESSION['admin']='lizavetka';	 
header('Location: admin/admin.php');
exit;
?>
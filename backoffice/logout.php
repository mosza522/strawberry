<?php
require 'backoffice/init.php';
$db->update(DB_PREFIX.'admin', 'admin_lastlogout="'.date('Y-m-d H:i:s').'"', 'admin_id='.$_SESSION['userid']);
session_destroy();
header("Location: login.php"); 
?>
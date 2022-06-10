<?php 
//ini_set('display_errors',0);
require 'admin_views/header.php';
$load = $func->show_member();
require 'admin_views/member_load.php';
require 'admin_views/footer.php';
?>
<?php

require 'admin_views/header.php';

$load = $func->show_danhmucdichvu();

if(isset($_POST) && $_POST) {
    
    $name = $_POST['name_cate'];
    $status = $_POST['status'];
    
    $query = $func->add_cate_service($name,$status);
    header('location: ./service.html');
}

require 'admin_views/service.php';
require 'admin_views/footer.php';
?>
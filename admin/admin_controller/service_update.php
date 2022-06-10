<?php

require 'admin_views/header.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $load = $func-> get_id_cate_service($id);
}



if(isset($_POST) && $_POST) {
    
    $name = $_POST['name_cate'];
    $status = $_POST['status'];
    
    $query = $func->update_cate_service($name,$status,$id);
    header('location: ./service.html');
}

require 'admin_views/service_update.php';
require 'admin_views/footer.php';
?>
<?php

require 'admin_views/header.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $load = $func->get_id_cate_product($id);
}



if(isset($_POST) && $_POST) {
    
    $name = $_POST['name_cate'];
    $slug = $func->to_slug($name);
    $status = $_POST['status'];
    
    $query = $func->update_cate_product($name,$slug,$status,$id);
    header('location: ./danhmucsanpham.html');
}

require 'admin_views/cate_product_edit.php';
require 'admin_views/footer.php';
?>
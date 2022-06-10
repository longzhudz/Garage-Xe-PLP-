<?php

require 'admin_views/header.php';

$load = $func->show_danhmucsanpham();

if(isset($_POST) && $_POST) {
    
    $name = $_POST['name_cate'];
    $slug = $func->to_slug($name);
    $status = $_POST['status'];
    
    $query = $func->add_cate_product($name,$slug,$status);
    header('location: ./danhmucsanpham.html');
}

require 'admin_views/cate_product.php';
require 'admin_views/footer.php';
?>
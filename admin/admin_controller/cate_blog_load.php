<?php

require 'admin_views/header.php';

$load = $func->show_danhmucbaviet();

if(isset($_POST) && $_POST) {
    $name = $_POST['name_cate'];
    
    $status = $_POST['status'];
  
    $query = $func->add_cate_blog($name,$status);
    header('location: ./danhmucbaiviet.html');
}

require 'admin_views/cate_blog_load.php';
require 'admin_views/footer.php';
?>
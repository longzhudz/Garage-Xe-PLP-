<?php

require 'admin_views/header.php';

$load = $func->show_danhmucbaviet();
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_cate_blog($id);

}
if(isset($_POST) && $_POST) {
    $name = $_POST['name_cate'];
    
    $status = $_POST['status'];
    
    $query = $func->update_cate_blog($name,$status,$id);
   
    header('location: ./danhmucbaiviet.html');
}

require 'admin_views/cate_blog_edit.php';
require 'admin_views/footer.php';
?>
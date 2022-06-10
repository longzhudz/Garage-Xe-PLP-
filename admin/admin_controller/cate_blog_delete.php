<?php 


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_cate_blog($id);
    $func->delete_cate_blog($id);
    header('location: ./danhmucbaiviet.html');
}

?>
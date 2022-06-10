<?php 


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $func->delete_cate_product($id);
    header('location: ./danhmucsanpham.html');
}

?>
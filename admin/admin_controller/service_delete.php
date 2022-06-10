<?php 


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $func->delete_cate_service($id);
    header('location: ./service.html');
}

?>
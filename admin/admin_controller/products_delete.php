<?php

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $func->delete_products($id);
    header('location: ./quanlysanpham.html');
}
?>
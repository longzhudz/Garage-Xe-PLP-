<?php 

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_blog($id);
    $query = $func->delete_blog($id);
    header('location: ./blog_load.html');
}
?>
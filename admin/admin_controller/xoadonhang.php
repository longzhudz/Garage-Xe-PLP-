<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
  

  $delete = $func->delete_id_cart($id);
  header('location: ./donhang.html');
}
?>
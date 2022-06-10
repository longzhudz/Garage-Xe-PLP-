<?php
require './admin_views/header.php';


if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
$sql = "SELECT `chitiethoadon`.*,hoadon.status from `chitiethoadon` join `hoadon` on `chitiethoadon`.`id_hoadon` = `hoadon`.`id` where `chitiethoadon`.`id_hoadon` = $id";
$result = mysqli_query($conn,$sql);
$get_id = mysqli_fetch_assoc($result);


if(isset($_POST) && $_POST)
{
    $status = htmlspecialchars(trim($_POST['status']));
  
    $update = $func->update_status_cart($status,$id);\
   
    header('location: ./donhang.html');
  
}


    require './admin_views/chitietdonhang.php';
    require './admin_views/footer.php';
?>
<?php
require './admin_views/header.php';


if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
$sql = "SELECT chitietbook.*,user.Fullname,user.img as img_user, service.name as name_service from chitietbook join user on chitietbook.id_user = user.UserID JOIN service on service.id = chitietbook.id_service where id_book = $id";
$result = mysqli_query($conn,$sql);
$get_id = mysqli_fetch_assoc($result);


if(isset($_POST) && $_POST)
{
    $status = htmlspecialchars(trim($_POST['status']));
  
    $update = $func->update_status_cart($status,$id);\
   
    header('location: ./donhang.html');
  
}


    require './admin_views/chitietbook.php';
    require './admin_views/footer.php';
?>
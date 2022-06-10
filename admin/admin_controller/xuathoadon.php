<?php

if(isset($_GET['id']))
{
    $id = $_GET['id'];   
}
$sql = "SELECT hoadon.*,user.Fullname,user.Address,user.Email,user.Phone,chitiethoadon.name as name_pro, chitiethoadon.quantity as quantity_tungsp, chitiethoadon.price from hoadon join user on hoadon.id_user = user.UserID join chitiethoadon on chitiethoadon.id_hoadon = hoadon.id where hoadon.id = $id";
$result = mysqli_query($conn,$sql);
$in = mysqli_fetch_assoc($result);


$sqltongsoluong = "SELECT SUM(`quantity`) FROM `chitiethoadon` WHERE `id_hoadon` = $id";
$result2 = mysqli_query($conn,$sqltongsoluong);
$tongso = mysqli_fetch_assoc($result2);
$tongsoluongsp  = implode(" ",$tongso);
require 'admin_views/xuathoadon.php';

?>
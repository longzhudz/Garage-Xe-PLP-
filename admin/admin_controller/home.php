<?php 
//ini_set('display_errors',0);
require '../modules/dbconfig.php';
require '../modules/product.php';
require 'admin_views/header.php';


$result = new classProducts();
//Load số lượng user
 $loaduser = $func->loadUser();
 //Load số lượng sản phẩm
 $loadproducts =$func->loadProductsAdmin();
 //Load tổng doanh thu
 $loadtongtien = $func->loadTongTien();
 //Load số lượng ng mua
 $loadorderTong = $func->loadOrderTong();
 $loadorder = $func->loadOrder();
 $loaddondaxuli = $func->loadDaXuLi();
 $loaddondahuy = $func->loadDaHuy();
 //Doanh thu ngày
 $doanhthungay = $func->TongTien('day',date('Y-m-d',time()));
 //Doanh thu theo tháng
 //doanh thu thang
 $doanhthuthang = $func->TongTien('month',date('m',time()));
 $thang = date('m',time());
 $thangtruoc = date('m',time()) - 1;

 $sql = 'SELECT SUM(`tongtien`) FROM `hoadon` where MONTH(`ngaydat`) = '. $thang.' and `status` = 1';
 $re = mysqli_query($conn,$sql);
 $doanhthuthangnow1 = mysqli_fetch_assoc($re);
 $doanhthuthangnow = implode(" ",$doanhthuthangnow1);

 // Doanh thu tháng trước 
 $sql = 'SELECT SUM(`tongtien`) FROM `hoadon` where MONTH(`ngaydat`) = '. $thangtruoc.' and `status` = 1';
 $re = mysqli_query($conn,$sql);
 $doanhthuthangtruoc = mysqli_fetch_assoc($re);
 $doanhthuthangtrc = implode(" ",$doanhthuthangtruoc);

$bienphantram = (($doanhthuthangnow - $doanhthuthangtrc)/$doanhthuthangtrc * 100);

$in =  (string)$bienphantram;
 //Thanh toán bằng tiền mặt

 $thanhtoanbangtienmat = $func->ThanhToanBy('1',date('Y-m-d',time()));
 
 
 $pro = $result->listHotPro();

 require 'admin_views/home.php';
 require 'admin_views/footer.php';
?>
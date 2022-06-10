<?php 

require 'modules/product.php';
// Khởi tạo biến class 

$sql = "SELECT DISTINCT(`brand`) FROM `products` WHERE status = 0 ORDER BY `id` DESC";
$result = mysqli_query($conn,$sql);

$sql = "SELECT DISTINCT `products`.`id_cate`,`categories_products`.`name` from `products` join `categories_products` on `products`.`id_cate` = `categories_products`.`id` where `products`.`status` = 0";
$re = mysqli_query($conn,$sql);

mysqli_close($conn);
require 'views/shop.php';
?>
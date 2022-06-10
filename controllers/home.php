<?php 
require 'modules/home.php';
$service = new classHome();
$load1 = $service->service1();
$load2 = $service->service2();
$load3 = $service->service3();
$load4 = $service->service4();
$load5 = $service->service5();
$load6 = $service->service6();

$sql = "SELECT `products`.*, `categories_products`.`name` FROM `products` JOIN `categories_products` ON `products`.`id_cate` = `categories_products`.`id` ORDER BY `id` DESC ";
$result = mysqli_query($conn,$sql);


$sql2 = "SELECT `products`.*, `categories_products`.`name` FROM `products` JOIN `categories_products` ON `products`.`id_cate` = `categories_products`.id ORDER BY `vote` DESC";
$hot = mysqli_query($conn,$sql2);


require 'views/home.php';
?>
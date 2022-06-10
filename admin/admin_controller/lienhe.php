<?php 
require './admin_views/header.php';


$sql ="SELECT * FROM `contact`";
$result = mysqli_query($conn,$sql);


require './admin_views/lienhe.php';
require './admin_views/footer.php';
?>
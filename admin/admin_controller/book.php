<?php 
require './admin_views/header.php';


    $sql ="SELECT * FROM `book`";
    $result = mysqli_query($conn,$sql);
    

require './admin_views/book.php';
require './admin_views/footer.php';
?>
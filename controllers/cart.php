<?php 

if(isset($_SESSION['UserID']))
{
    if(isset($_SESSION['giohang']))
    {
        $id = $_SESSION['UserID'];
        $sql = "SELECT * FROM `user` WHERE `UserID` = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result );

     require 'views/cart.php';
    }else{
     require 'views/error.php'; 
    }
}else
{
    require 'views/error.php'; 
}
   
mysqli_close($conn);
        
   
   
?>
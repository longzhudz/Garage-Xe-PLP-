<?php 
if(isset($_SESSION['UserID']))
{
    require 'views/profile.php';
}
else
{
    require 'views/error.php';
}

?>
<?php 
if (!isset($_SESSION['UserID'])) {
	require 'views/register.php';
}else{
    header('location: /home.html');
}
?>
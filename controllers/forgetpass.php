<?php 

if (!isset($_SESSION['UserID'])) {
	require 'handling/vendor/autoload.php';
	require 'modules/login.php';
	$login = new classLogin();
	
	$authUrl = $login->createUrlGoogle();
	require 'views/forgetpass.php';
}else{
    header('location: /home.html');
}

?>

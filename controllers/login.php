<?php 

if (!isset($_SESSION['UserID'])) {
    require 'handling/vendor/autoload.php';
    require 'handling/Facebook/autoload.php';

    require 'modules/login.php';
    $login = new classLogin();
    //Đăng nhập facebook
    $fb = new Facebook\Facebook([
        'app_id' => '{392561536022587}',
        'app_secret' => '{b606c406df7b5ac95d5ccee190de1fdd}',
        'default_graph_version' => 'v13.0',
        ]);
      $helper = $fb->getRedirectLoginHelper();
      $permissions = ['email']; // Optional permissions
      $loginUrl = $helper->getLoginUrl('http://localhost:8080/handling/login_facebook.php', $permissions);
	//Đăng nhập google
	$authUrl = $login->createUrlGoogle();
    require 'views/login.php';
}else{
    header('location: /home.html');
}

?>

<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
// require database
require '../modules/database.php';
require '../modules/dbconfig.php';

// file function sử dụng chung
require '../modules/function.php';

$func = new classFunc();

if(isset($_SESSION['UserID']))
{
	$info = $func->get_info($_SESSION['UserID']);
  
    if($info['Level'] != 1)
    {
        header('location: /home.html');
    }
}else
{
    header('location: /home.html');
}



// xử lý trung tâm
if(isset($_GET['ctrl'])){

// biến ctrl
$ctrl = $_GET['ctrl'];

    $file = 'admin_controller/'.$ctrl.'.php';

        if ( file_exists($file)) {
            include $file;
        }else{
            include 'admin_controller/home.php';
        }

}else{
	include 'admin_controller/home.php';
}

$conn->close();

?>
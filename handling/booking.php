<?php 
session_start();
require '../modules/database.php';
require '../modules/booking.php';
require '../modules/login.php';


if(isset($_POST) && $_POST)
{
    //$ngaydat = $_POST['ngay_dat'];
    //$ngaydat = date('Y-m-d', strtotime($_POST['ngay_dat']));
    //$giodat = $_POST['gio_dat'];
    $ngaydat = date('Y-m-d', strtotime($_POST['ngay_dat']));
    $giodat = date('H:i:s', strtotime($_POST['gio_dat']));
    $dichvu = htmlspecialchars(trim($_POST['dichvu']));
    
    
    $load = new classBooking();

    if(!isset($_SESSION['UserID']))
    {
        $erro = 'Bạn vui lòng đăng nhập';
    }else{
        if(empty($ngaydat)|| empty($giodat)|| empty($dichvu))
        {
            $erro = 'Vui lòng nhập đầy đủ thông tin';
        }else{
            $id = $_SESSION['UserID'];
            $a = $load->add_book($ngaydat,$giodat,$dichvu,$id);
            $erro = 'Cám ơn bạn đã đặt lịch';
        }
    }

}else{
    $erro = '404 Not Find';
}
if(isset($erro))
{
    echo $erro;
}


?>
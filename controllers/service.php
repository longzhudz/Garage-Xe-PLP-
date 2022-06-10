<?php 
require 'modules/booking.php';

$data = new classBooking();
$load = $data->listservice();

$id_user = $_SESSION['UserID'];

if(isset($_SESSION['UserID']))
{
    if(isset($_POST) && $_POST)
    {
        $ngaydat = date('Y-m-d', strtotime($_POST['ngay_dat']));
        $giodat = date('H:i:s', strtotime($_POST['gio_dat']));
        $dichvu = $_POST['dichvu'];
        $fname = $_POST['fname'];
        $sqlbook = "INSERT INTO `book` (`name`) VALUES('.$fname.')";
        $querybook = mysqli_query($conn,$sqlbook);

        $book = $func->last_id_book();
        
        $idbook = $book['id'];
        
        if(empty($ngaydat)|| empty($giodat)|| empty($dichvu))
        {
            $_SESSION['alert'] = 
            '<script type="text/javascript">
            swal({
                title: "Thông báo!",
                text: "Vui lòng không bỏ trống thông tin!",
                icon: "error",
              });
            </script>';
            header('location: service.html');
        }else{
            foreach($dichvu as $key => $a)
            {
                $sql = "INSERT INTO  `chitietbook`(`ngay_dat`,`gio_dat`,`id_service`,`id_user`,`id_book`) VALUES('$ngaydat','$giodat','$a','$id_user','$idbook')";
                $query = mysqli_query($conn,$sql);
             //   $conn -> close();
               // $in = $data->add_book($ngaydat,$giodat,$a,$id_user);  
            } 

            if($query)
            {
                $_SESSION['alert'] = 
                '<script type="text/javascript">
                swal({
                    title: "Thông báo!",
                    text: "Bạn đã đặt lịch thành công!",
                    icon: "success",
                  });
                </script>';
                header('location: service.html');
                unset($_SESSION['alert']);
            }
            else{
                 $_SESSION['alert'] = "Đặt lịch không thành công";
                 header('location: service.html');
            }
        }
    }
}else{
    $_SESSION['alert'] = "Vui lòng đăng nhập trước khi đặt lịch";
}
mysqli_close($conn);
require 'views/service.php';
?>
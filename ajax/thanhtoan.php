<?php 
session_start();
require '../modules/database.php';
require '../modules/dbconfig.php';
//include gửi mail
include '../modules/class.phpmailer.php';
include '../modules/class.smtp.php';
   
require '../modules/function.php';
require '../modules/product.php';
$products = new classProducts();
$function = new classFunc();

if(isset($_POST) && $_POST)
{
    $name_user = htmlspecialchars(trim($_POST['name']));
    $number = htmlspecialchars(trim($_POST['number']));
    $address = htmlspecialchars(trim($_POST['address']));
    $city = htmlspecialchars(trim($_POST['city']));
    $hinhthuc = htmlspecialchars(trim($_POST['hinhthuc']));

    
    if(empty($name_user) || empty($number)|| empty($address)|| empty($city)|| empty($hinhthuc))
    {
        $error = "Không bỏ trống thông tin";
    }else
    {   
        
        $giohang = $_SESSION['giohang'];
        $coin = $function->tong_bill($giohang,1);
        $soluong = $function->tong_bill($giohang,2);
        $userbuy = $_SESSION['UserID'];
        $info = $function->get_info($userbuy);
      
        $date_time = date('Y-m-d',time());
     
       
        $products->add_giohang($name_user,$number,$address,$city,$hinhthuc,$soluong,$coin,$date_time,$userbuy,$date_time);
       
       $last_id = $products->get_last_id_giohang();
     
      

      foreach($_SESSION['giohang'] as $key => $value)
       {
         $products->add_chitiethd($value['name'],$value['soluong'],$value['price'] ,$value['img'],$last_id['id']);    
       }
       

    $title = 'Garage PLP - CN Vĩnh Long thông báo đơn hàng:  #'.$last_id['id'].' đã đặt thành công';
    

    $content = '
    <div style="width:100%; background-color: #7367F0;";>
        <h1 style="padding:2rem;">Đơn hàng số #'.$last_id['id'].' đã đặt hàng thành công</h1s>
    </div>
    <section style="padding: 0rem 6rem">
        <label for="">Bạn có một phản hồi xác nhận đơn hàng đã đặt ở Garage xe PLP</label>
        <h2 style="color: #7367F0">Hóa đơn số #'.$last_id['id'].'</h2>
        <table  style="width:100%;border: 1px solid #ccc;">
            <tr>
                <th style="border: black solid 1px; line-height: 50px; font-size: 20px; text-align: left; padding: 1.2rem;">Tổng sản phẩm</th>
                <td style="border: black solid 1px; line-height: 50px; font-size: 20px; text-align: left; padding: 1.2rem;"><strong>' .$soluong.'</strong></td>
            </tr>
            <tr>
                <th style="border: black solid 1px; line-height: 50px; font-size: 20px; text-align: left; padding: 1.2rem;">Giá</th>
                <td style="border: black solid 1px; line-height: 50px; font-size: 20px; text-align: left; padding: 1.2rem;"><strong>'.number_format($coin).' VNĐ</strong></td>
            </tr> 
            <tr>
                <th style="border: black solid 1px; line-height: 50px; font-size: 20px; text-align: left; padding: 1.2rem;">Giao nhận hàng</th>
                <td style="border: black solid 1px; line-height: 50px; font-size: 20px; text-align: left; padding: 1.2rem;">Giao hàng miễn phí</td>
            </tr>
            <tr>
                <th style="border: black solid 1px; line-height: 50px; font-size: 20px; text-align: left; padding: 1.2rem;">Phương thức thanh toán</th>
                <td style="border: black solid 1px; line-height: 50px; font-size: 20px; text-align: left; padding: 1.2rem;">Trả tiền mặt khi nhận hàng</td>
            </tr>
        </table>
        <p>Cám ơn <strong> '.$info['Fullname'].' </strong> đã đặt hàng, Sản phẩm của bạn sẽ sớm đến thôi, hãy đợi chúng tôi nhé. !</p>
        <p>Mọi chi tiết vui lòng liên hệ: 0945 119 242 hoặc <a href="https://www.facebook.com/longzhudz">fb.com/longzhudz</a></p>
        <p style="font: weight 700">Xin cám ơn !</p>
    </section>
    ';



    $test = $function->sendMail($title, $content, $info['Fullname'], $info['Email'],'');
 
     
       if($test == 1)
       {
        $error = 'done';
       }
       else
       {
           $error = 'Vui lòng kiểm tra lại email của bạn';
       }
    
    }
    
}
if(isset($error))
{
    print_r($error);
}

?>
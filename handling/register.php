<?php 
session_start();
require '../modules/database.php';
require '../modules/register.php';

if(isset($_POST) && $_POST)
{
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $email = htmlspecialchars(trim($_POST['email']));
    $confirm = htmlspecialchars(trim($_POST['confirm']));
    $fullname = htmlspecialchars(trim($_POST['fullname']));

  
    $register = new classUser();
    $info = $register->check_user($username);
    $checkmail = $register->check_user($email);


  //  $hashpass = password_hash($password, PASSWORD_BCRYPT);
    // $checkpass = password_verify($password, $info['password']);
    if($info)
    {
        $erro = 'Tài khoản của bạn đã tồn tại. Vui lòng đăng ký tài khoản khác';
    }else{
        if(empty($username) || empty($password) || empty($email) || empty($confirm)|| empty($fullname))
        {
            $erro = 'Vui lòng nhập đầy đủ thông tin';
        }else if(strlen($username) < 5 || strlen($password) > 16)
        {
            $erro = 'Tài khoản phải là 5 - 16 kí tự';
            
        }
        else if($checkmail)
        {
            $erro = 'Email đã được sử dụng';
            
        }else if($password != $confirm)
        {
            $erro = 'Mật khẩu xác nhận không chính xác';
        }
        else if(strlen($password) < 5 || strlen($password) > 16)
        {
            $erro = 'Mật khẩu phải là 5 - 16 kí tự';
            
        }
        else{
            $hashpass = password_hash($password, PASSWORD_BCRYPT);
            $token = bin2hex(random_bytes(16));
            $register->add_user($fullname,$username,$hashpass,$email,$token);
            $info_last = $register->check_user($username);
            $_SESSION['UserID'] = $info_last['UserID'];
            $erro = 'Đăng ký thành công';
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
<?php 
session_start();
require '../modules/database.php';
require '../modules/function.php';

$func = new classFunc();

if(isset($_POST) && $_POST)
{
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    
    if($name == '' || $email ==''|| $phone == ''|| $comment == '')
    {   
        $erro = 'Không bỏ trống thông tin'; 
    }
    else{
           
            $func->add_contact($name,$email,$phone,$comment);
            $erro = 'Cám ơn bạn đã liên hệ với chúng tôi';
    }
    


}else{
    $erro = '404 Not Find';
}
if(isset($erro))
{
    echo $erro;
}


?>
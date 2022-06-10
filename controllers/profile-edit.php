<?php 

if(isset($_SESSION['UserID']))
{
    $id = $_SESSION['UserID'];
    
    if(isset($_POST) && $_POST)
    {
        $address = htmlspecialchars(trim($_POST['address']));
        $fullname = htmlspecialchars(trim($_POST['fullname']));
        $phone = htmlspecialchars(trim($_POST['phone']));
       
        if(isset($_FILES['img_acc']))
        {
            $file = $_FILES['img_acc'];
            $file_name = $file['name'];
            $load_img = '../uploads/img/'.$file_name;
            
            if(empty($file_name))
            {
                $load_img = $info['img'];
            }else
            {
                move_uploaded_file($file['tmp_name'],$load_img);
            }
        }
       
        $query = $func->update_member($fullname,$address,$phone,$load_img,$id);
        header('location: /profile.html');
    }
    
    require 'views/profile-edit.php';
}
else{
    require 'views/error.php';
}



?>
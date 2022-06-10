<?php 
//ini_set('display_errors',0);
 require 'admin_views/header.php'; 
 
 if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_member($id);
}
 if(isset($_POST) && $_POST) {
    $rules = htmlspecialchars(trim($_POST['level']));
    $status = htmlspecialchars(trim($_POST['status']));
    $update = $func->update_user_admin($status,$rules,$id); 
    
    
    
    header('location: ./quanlymember.html');
        
}

 require 'admin_views/member_update.php';

 require 'admin_views/footer.php';
?>


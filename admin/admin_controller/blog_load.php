<?php 
//ini_set('display_errors',0);
require 'admin_views/header.php';

$blog = mysqli_query($conn,"SELECT * from categogies_blog");
$result = mysqli_query($conn,"SELECT blog.*,user.Fullname, categogies_blog.name_cate from blog join user on blog.id_user = user.UserID JOIN categogies_blog on categogies_blog.id_cate = blog.id_cate");

$id_user = $_SESSION['UserID'];


if(isset($_POST) && $_POST)
{
    $title = htmlspecialchars(trim($_POST['title']));
    $slug = $func->to_slug($title);
    $id_cate = htmlspecialchars(trim($_POST['id_cate']));
    $content = $_POST['content'];
    
    if(isset($_FILES['img_blog']))
    {
        $file = $_FILES['img_blog'];
        $file_name = $file['name'];
        $load_img = '../uploads/img/'.$file_name;
        move_uploaded_file($file['tmp_name'],$load_img);   
    }
 
    $insert = $func->add_blog($title,$slug,$id_user,$id_cate,$content,$load_img);
    header('location: ./blog_load.html');

}


 require 'admin_views/blog_load.php';
 require 'admin_views/footer.php';
?>
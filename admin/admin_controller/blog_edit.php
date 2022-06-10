<?php 
    require './admin_views/header.php'; 
    
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    $blog = mysqli_query($conn,"SELECT * from categogies_blog");
    $result = mysqli_query($conn,"SELECT blog.*,user.Fullname,user.img as img_user, categogies_blog.name_cate from blog join user on blog.id_user = user.UserID JOIN categogies_blog on categogies_blog.id_cate = blog.id_cate where id = $id");
    
    $row=mysqli_fetch_assoc($result);
    $date = date('d/m/Y');

    if(isset($_POST) && $_POST)
    {
        $title = htmlspecialchars(trim($_POST['title']));
        $cate = htmlspecialchars(trim($_POST['cate_blog']));
        $slug = $func->to_slug($title);
        $status = htmlspecialchars(trim($_POST['status']));
        $text = $_POST['content'];
        
        if(isset($_FILES['image_blog']))
        {
            $file = $_FILES['image_blog'];
            $file_name = $file['name'];
            $load_img = '../uploads/img/'.$file_name;
            
            if(empty($file_name))
            {
                $load_img = $row['img'];
            }else
            {
                move_uploaded_file($file['tmp_name'],$load_img);
            }
        }
        
       
        $query = $func->update_blog_admin($title,$slug,$cate,$text,$load_img,$status,$id);
      
        header('location: ./blog_load.html');
    }
    

    mysqli_close($conn);
    require './admin_views/blog_edit.php';
    require './admin_views/footer.php';
?>
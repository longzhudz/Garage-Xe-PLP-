<?php 
require 'modules/blog.php';
$callClass = new ClassBlog();

if(isset($_GET['slugblog']) )
{
    $info = $callClass->details($_GET['slugblog']);
    $id = $info['id'];
    $id_cate = $info['id_cate'];
    if($info)
    {
        
       // $sql = "SELECT blog.*,user.Fullname,user.img from blog join user on blog.id_user = user.UserID  where id ='$id' ";
        $sql ="SELECT blog.*,user.Fullname,user.img,categogies_blog.name_cate from blog join user on blog.id_user = user.UserID join categogies_blog on blog.id_cate = categogies_blog.id_cate where id ='$id' ";
        $result = mysqli_query($conn,$sql);
        $row = $result -> fetch_assoc();
      
        $sql = "SELECT blog.*,user.Fullname from blog join user on blog.id_user = user.UserID  where id_cate ='$id_cate' limit 5 ";
        $resu = mysqli_query($conn,$sql);
        
        
        $sql2 = "SELECT * from blog where status = '0' ORDER BY `id` DESC LIMIT 4" ;
        $result2 = mysqli_query($conn,$sql2);
        
        $info['time'] = date("F j, Y, g:i a");   
        
        require 'views/blog_details.php';
        $conn -> close();
    }
    else
    {
        header('location: /home.html');
    }
}
else
{
    header('location: /home.html');
}
    


?>
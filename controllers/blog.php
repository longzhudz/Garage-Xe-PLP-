<?php 
require 'modules/blog.php';
$data = new ClassBlog();
$load = $data->load_blog();


$result = mysqli_query($conn,"SELECT blog.*,user.Fullname,user.img as img_user,categogies_blog.name_cate from blog join user on blog.id_user = user.UserID JOIN categogies_blog on blog.id_cate = categogies_blog.id_cate");

$sql2 = "SELECT * from blog where status = '0' ORDER BY `id` DESC LIMIT 4" ;
$result2 = mysqli_query($conn,$sql2);
$conn -> close();
require 'views/blog.php';
?>

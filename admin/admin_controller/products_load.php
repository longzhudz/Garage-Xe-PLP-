<?php 
require './admin_views/header.php';

$cate_pro = mysqli_query($conn,"SELECT * FROM `categories_products`");
$result = mysqli_query($conn,"SELECT products.*,categories_products.name from products join categories_products on products.id_cate = categories_products.id");


if(isset($_POST) && $_POST)
{
    $name_pro = htmlspecialchars(trim($_POST['name_products']));
    $name_brand = htmlspecialchars(trim($_POST['name_brand']));
    $slug = $func->to_slug($name_pro);
    $id_cate = $_POST['id_cate'];
    $price = htmlspecialchars(trim($_POST['price']));
    $quantity = htmlspecialchars(trim($_POST['quantity']));
    $content = $_POST['content'];
    if(isset($_FILES['img_pro']))
    {
        $file = $_FILES['img_pro'];
        $file_name = $file['name'];
        $load_img = '../uploads/img/'.$file_name;
        move_uploaded_file($file['tmp_name'],$load_img);  
    }
    $in = $func->add_products($name_pro,$slug,$load_img,$price,$content,$quantity,$name_brand,$id_cate);
    header('location: ./quanlysanpham.html');

}

require './admin_views/products_load.php';
require './admin_views/footer.php';

?>
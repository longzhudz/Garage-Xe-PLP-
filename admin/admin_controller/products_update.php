<?php 
require './admin_views/header.php';


if(isset($_GET['id']))
{
    $id = $_GET['id'];
}

$cate_pro = mysqli_query($conn,"SELECT * FROM `categories_products`");
$sql = "SELECT products.*,categories_products.name from products join categories_products on products.id_cate = categories_products.id where products.id = $id";
$result = mysqli_query($conn,$sql);

$result1 = mysqli_fetch_assoc($result);


if(isset($_POST) && $_POST)
{
    $name_pro = htmlspecialchars(trim($_POST['name_products']));
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
        if(empty($file_name))
        {
            $load_img = $result1['img'];
        }else
        {
            move_uploaded_file($file['tmp_name'],$load_img);
        }
    }
    $in = $func->update_product($name_pro,$slug,$load_img,$price,$content,$quantity,$id_cate,$id);
    header('location: ./quanlysanpham.html');

}

require './admin_views/products_update.php';
require './admin_views/footer.php';

?>
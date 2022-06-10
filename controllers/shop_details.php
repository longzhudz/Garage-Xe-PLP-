<?php 
require 'modules/shop_details.php';
$callSlug = new ClassDetails();


if(isset($_GET['slugproducts']))
{
    $info_products = $callSlug->details($_GET['slugproducts']);
    $id_cate = $info_products['id_cate'];
    if($info_products)
    {
        $sql = "SELECT products.*,categories_products.name,categories_products.slug from products join categories_products on products.id_cate = categories_products.id where products.status = 0 and id_cate = '$id_cate' ";
        $re = mysqli_query($conn,$sql);
        $a = mysqli_fetch_assoc($re);
        $conn ->close();
        $callSlug->updateVote($info_products['id']);
        require 'views/shop_details.php';
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
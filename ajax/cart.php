<?php 
session_start();
require '../modules/database.php';
require '../modules/product.php';
$pro = new classProducts();

if(isset($_POST) && $_POST)
{
    $id = htmlspecialchars($_POST['id']);
    $soluong = htmlspecialchars($_POST['soluong']);
   
   // $sql = "SELECT products.*,categories_products.name from products join categories_products on products.id_cate = categories_products.id where products.id = '$id'";
  // $a = mysqli_query($conn,$sql);
   // $info = mysqli_fetch_assoc($a);
    $info = $pro->productsById($id);
    $img = $info['img'];
    $item = array(  
            'id' => $id,
            'name' => $info['name_product'],
            'img' => $img,
            'price' => $info['price_product'],
            'quantity' => $info['quantity'],
         //   'name_cate' => $info['name'],
            'soluong' => $soluong,
    );

        if(isset($_SESSION['giohang'][$id])){

            $_SESSION['giohang'][$id]['soluong'] += $soluong;

        }else{
            $_SESSION['giohang'][$id] = $item;
        }
        $makeojb = array(
            'messages' => 'done',
            'soluong' => count($_SESSION['giohang']),
            'data' => $_SESSION['giohang'],
        );
        $erro = json_encode($makeojb);
    
}else{
    $erro = '404 Not Find';
}
if(isset($erro))
{
    echo $erro;
}

?>
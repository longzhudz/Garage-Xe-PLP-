<?php 
require '../modules/database.php';
require '../modules/dbconfig.php';

if(isset($_POST['action']))
{

  $sql = "SELECT products.*,categories_products.name from products join categories_products on products.id_cate = categories_products.id where products.status = 0 ";
   
        if(isset($_POST['brandne']))
        {
            $brand_filter = implode("','",$_POST['brandne']);
            $sql .= "AND `brand` IN ('".$brand_filter."')";
        }
        if(isset($_POST['cate']))
        {
            $cate = implode("','",$_POST['cate']);
            $sql .= "AND `id_cate` IN ('".$cate."')";
        }
        if(isset($_POST['price']))
        {
            $price = implode("-",$_POST['price']);
            $pri = explode( "-" , $price);
            $min = $pri[0];
            $max = $pri[1];
            $sql .= "AND `price_product` BETWEEN '".$min."' AND '".$max."'";
        }
        if(isset($_POST['timkiem']))
        {
          $timkiem = $_POST['timkiem'];
          $sql .= "AND `name_product` LIKE '%$timkiem%' OR `brand` LIKE '%$timkiem%' OR `price_product` LIKE '%$timkiem%' OR `name` LIKE '%$timkiem%'";
        }
    








    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
   
    
    $rowcount=mysqli_num_rows($result);
  
    $output = '';
        if($rowcount > 0)
        {
            foreach($rows as $key =>$value)
            {
                
                $output .= ' 
               
  
                
                <div class="card ecommerce-card">
                <div class=" text-center">
                  <a href="/shop_details/'.$value['slug_product'].'.html">
                    <img
                    style="max-height: 180px;"
                      class="img-fluid card-img-top"
                      src="'.$value['img'].'"
                      alt="img-placeholder"
                  /></a>
                </div>
                <div style="max-height: 140px;" class="card-body">
                  <div class="item-wrapper">
                    <div class="py-15">
                    <a href="#">
                      <span  class="badge rounded-pill badge-light-info me-50">'.$value['brand'].'</span>
                    </a>
                    <a href="#">
                      <span class="badge rounded-pill badge-light-primary">'.$value['name'].'</span>
                    </a>
                  </div>
                    <div>
                      <h6 class="item-price"> '. number_format($value['price_product']) .' VNĐ</h6>
                    </div>
                  </div>
                     
                  <h5 class="item-name">
                    <a class="text-body" href="/shop_details/'.$value['slug_product'].'.html">'.$value['name_product'].'</a>
                  </h5>
                 
                  <p class="card-text item-description">
                    '.$value['text'].'
                  </p>
                </div>
                <div class="item-options text-center">
                  <a href="/shop_details/'.$value['slug_product'].'.html" class="btn btn-primary btn-cart">
                    <i data-feather="shopping-cart"></i>
                    <span class="add-to-cart">Xem chi tiết</span>
                  </a>
                </div>
              </div>
              
                ';
            }
        }else{
          $output = '<h4>Không tìm thấy sản phẩm phù hợp</h4>';
       }
       
      echo $output;
}

mysqli_close($conn);
?>
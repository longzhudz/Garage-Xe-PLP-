 <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Checkout</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                    </li>
                    <li class="breadcrumb-item active">Checkout
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><div class="bs-stepper checkout-tab-steps">
  <!-- Wizard starts -->
  <div class="bs-stepper-header">
    <div class="step" data-target="#step-cart" role="tab" id="step-cart-trigger">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-box">
          <i data-feather="shopping-cart" class="font-medium-3"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Cart</span>
          <span class="bs-stepper-subtitle">Your Cart Items</span>
        </span>
      </button>
    </div>
    <div class="line">
      <i data-feather="chevron-right" class="font-medium-2"></i>
    </div>
    <div class="step" data-target="#step-address" role="tab" id="step-address-trigger">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-box">
          <i data-feather="home" class="font-medium-3"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Address</span>
          <span class="bs-stepper-subtitle">Enter Your Address</span>
        </span>
      </button>
    </div>
    <div class="line">
      <i data-feather="chevron-right" class="font-medium-2"></i>
    </div>
    <div class="step" data-target="#step-payment" role="tab" id="step-payment-trigger">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-box">
          <i data-feather="credit-card" class="font-medium-3"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Payment</span>
          <span class="bs-stepper-subtitle">Select Payment Method</span>
        </span>
      </button>
    </div>
  </div>
  <!-- Wizard ends -->

  <div class="bs-stepper-content">
    <!-- Checkout Place order starts -->
    <div id="step-cart" class="content" role="tabpanel" aria-labelledby="step-cart-trigger">
        <div id="place-order" class="list-view product-checkout">
            <!-- Checkout Place Order Left starts -->
            
          
            <div class="checkout-items" id="gio-hang-ajax">
              <?php foreach($_SESSION['giohang'] as $key => $value ) { ?>
              <div class="card ecommerce-card">
                  <div class="item-img">
                  <a href="app-ecommerce-details.html">
                      <img src="<?=$value['img']?>" alt="Hình ảnh sản phẩm" />
                  </a>
                  </div>
                  <div class="card-body">
                  <div class="item-name">
                      <h6 class="mb-0"><a href="app-ecommerce-details.html" class="text-body"><?=$value['name']?></a></h6>
                      <span class="item-company">By <a href="#" class="company-name">Apple</a></span>
                      <div class="item-rating">
                      <ul class="unstyled-list list-inline">
                          <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                          <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                          <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                          <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                          <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                      </ul>
                      </div>
                  </div>

                  <?php if($value['quantity']!=0) { ?> 
                  <span class="text-success mb-1">Còn hàng</span>
                  <?php }elseif($value['quantity']==0){ ?>
                    <span class="text-danger mb-1">Hết hàng</span>
                    <?php } ?>

                  <div class="item-quantity">
                      <span class="quantity-title">Số lượng</span>
                      <div class="quantity-counter-wrapper">
                      <div class="input-group">
                      <div class="input-group">
                        <button  class="btn-cart-formcart btn btn-danger text-light congtru" data-id='<?= $value['id']?>' data-rule='1'>-</button>
                        <input id="soluong-<?= $value['id']?>"  class="form-control" type="number" value="<?= $value['soluong']?>">
                        <button  class="btn-cart-formcart btn btn-success text-light congtru" data-id='<?= $value['id']?>' data-rule='2'>+</button>
                    </div>
                      </div>
                      </div>
                  </div>
                  <span class="delivery-date text-muted">Sản phẩm sẽ được giao sớm</span>
                  <span class="text-success">Giảm 15% khi mua 4 món</span>
                  </div>
                  <div class="item-options text-center">
                  <div class="item-wrapper">
                      <div class="item-cost">
                      <h4 class="item-price text-danger"><?=number_format($value['price'])?> VNĐ</h4>
                      <p class="card-text shipping">
                          <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                      </p>
                      </div>
                  </div>
                  <button type="button" class="btn btn-light mt-1  btn-update-cart" data-id='<?= $value['id']?>'>
                      <i data-feather="plus" class="align-middle me-25"></i>
                      <span>Cập nhật</span>
                  </button>
                  <button type="button" class="btn btn-light mt-1  btn-delete-cart" data-id='<?= $value['id']?>' >
                      <i data-feather="x" class="align-middle me-25"></i>
                      <span>Xóa hàng</span>
                  </button>
                  
                  </div>
              </div>
              <?php }?>
            
            </div>
            
            <!-- Checkout Place Order Left ends -->

            <!-- Checkout Place Order Right starts -->
            <div class="checkout-options">
                <div class="card">
                    <div class="card-body">
                    <label class="section-label form-label mb-1">Options</label>
                    <div class="coupons input-group input-group-merge">
                        <input
                        type="text"
                        class="form-control"
                        placeholder="Nhập mã giảm giá"
                        aria-label="Coupons"
                        aria-describedby="input-coupons"
                        />
                        <span class="input-group-text text-primary ps-1" id="input-coupons">Nhập</span>
                    </div>
                    <hr />
                    <div class="price-details">
                        <h6 class="price-title">Chi tiết hóa đơn</h6>
                        <ul class="list-unstyled">
                        <li class="price-detail">
                            <div class="detail-title ">Loại sản phẩm</div>
                            <div class="detail-amt"> <?php echo count($_SESSION['giohang'])?>  </div>
                        </li>
                        <li class="price-detail">
                            <div class="detail-title">Số lượng sản phẩm</div>
                            <div class="detail-amt discount-amt " id='tong-so-luong'>
                            <?= number_format($func->tong_bill($_SESSION['giohang'],2))?> 
                            </div>
                        </li>
                        <li class="price-detail">
                            <div class="detail-title">Giảm giá</div>
                            <div class="detail-amt">0</div>
                        </li>
        
                        <li class="price-detail">
                            <div class="detail-title">Thuế VAT</div>
                            <div class="detail-amt discount-amt text-success">Free</div>
                        </li>
                        </ul>
                        <hr />
                        <ul class="list-unstyled">
                        <li class="price-detail">
                            <div class="detail-title detail-total">Tổng tiền: </div>
                            <div class="detail-amt fw-bolder text-danger fw-bolder" id='tong-gia-tien'><?= number_format($func->tong_bill($_SESSION['giohang'],1))?> VNĐ</div>
                        </li>
                        </ul>
                        <button type="button" class="btn btn-primary w-100 btn-next place-order">Kế tiếp</button>
                    </div>
            </div>
        </div>
          <!-- Checkout Place Order Right ends -->
        </div>
      </div>
      <!-- Checkout Place order Ends -->
    </div>
    <!-- Checkout Customer Address Starts -->
    <div id="step-address" class="content" role="tabpanel" aria-labelledby="step-address-trigger">
      <form id="checkout-address" class="list-view product-checkout">
        <!-- Checkout Customer Address Left starts -->
        <div class="card">
          <div class="card-header flex-column align-items-start">
            <h4 class="card-title">Địa chỉ nhận hàng</h4>
            <p class="card-text text-muted mt-25">Nhập thông tin địa chỉ người nhận hàng</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="mb-2">
                  <label class="form-label" cfor="checkout-name">Họ và tên:</label>
                  <input type="text" id="checkout-name" class="form-control" name="fname" placeholder="Điền tên của người nhận" />
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="mb-2">
                  <label class="form-label" cfor="checkout-number">Số điện thoại:</label>
                  <input
                    type="number"
                    id="checkout-number"
                    class="form-control"
                    name="mnumber"
                    placeholder="0123456789"
                  />
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="mb-2">
                  <label class="form-label" cfor="checkout-apt-number">Địa chỉ</label>
                  <input
                    type="text"
                    id="checkout-apt-number"
                    class="form-control"
                    name="apt-number"
                    placeholder="Nhập địa chỉ cụ thể"
                  />
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="mb-2">
                  <label class="form-label" cfor="checkout-city">Quận/Huyện:</label>
                  <input type="text" id="checkout-city" class="form-control" name="city" placeholder="Cần Thơ" />
                </div>
              </div>
          
              <div class="col-12">
                <button type="button" class="btn btn-primary btn-next delivery-address">Save And Deliver Here</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Checkout Customer Address Left ends -->

        <!-- Checkout Customer Address Right starts -->
        <div class="customer-card">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Họ tên: <?=$row['Fullname']?></h4>
            </div>
            <div class="card-body actions">
              <p class="card-text mb-0">Địa chỉ: <?=$row['Address']?></p>
              <p class="card-text">Email: <?=$row['Email']?></p>
              <p class="card-text">Số điện thoại: <?=$row['Phone']?></p>
            <!--  <button type="button" class="btn btn-primary w-100 btn-next delivery-address mt-2">
                Deliver To This Address
              </button>
                -->
            </div>
          </div>
        </div>
        <!-- Checkout Customer Address Right ends -->
      </form>
    </div>
    <!-- Checkout Customer Address Ends -->
    <!-- Checkout Payment Starts -->
    <div id="step-payment" class="content" role="tabpanel" aria-labelledby="step-payment-trigger">
        <form id="checkout-payment" class="list-view product-checkout" >
            <div class="payment-type">
                <div class="card">
                    <div class="card-header flex-column align-items-start">
                        <h4 class="card-title">Lựa chọn thanh toán</h4>
                        <p class="card-text text-muted mt-25">Hiện tại shop chỉ nhận thanh toán SHIPCOD</p>
                    </div>
                    <div class="card-body">
                  
                            <div class="customer-cvv mt-1 row row-cols-lg-auto">
                            
                            </div>
                                <hr class="my-2" />
                                <ul class="other-payment-options list-unstyled">
                                    <li class="py-50">
                                    <div class="form-check">
                                        <input type="radio" value="1" id="customColorRadio2" name="paymentOptions" class="form-check-input" checked />
                                        <label class="form-check-label" for="customColorRadio2"> Thanh toán trực tiếp SHIPCOD </label>
                                    </div>
                                    </li>
                                    <li class="py-50">
                                    <div class="form-check">
                                        <input type="radio" value="2" id="customColorRadio3" name="paymentOptions" class="form-check-input" />
                                        <label class="form-check-label" for="customColorRadio3"> Thanh toán bằng Momo </label>
                                    </div>
                                    </li>
                                    <li class="py-50">
                                    <div class="form-check">
                                        <input type="radio" value="3" id="customColorRadio4" name="paymentOptions" class="form-check-input" />
                                        <label class="form-check-label" for="customColorRadio4"> Thanh toán bằng Shoppe Pay </label>
                                    </div>
                                    </li>
                                    <li class="py-50">
                                    <div class="form-check">
                                        <input type="radio" value="4" id="customColorRadio5" name="paymentOptions" class="form-check-input" />
                                        <label class="form-check-label" for="customColorRadio5"> Thanh toán bằng thẻ ATM </label>
                                    </div>
                                    </li>
                                </ul>
                                <hr class="my-2" />
                              
                                </div>
                            </div>
                            </div>
                            <div class="amount-payable checkout-options">
                            <div class="card">
                                <div class="card-header">
                                <h4 class="card-title">Phiếu thanh toán</h4>
                                </div>
                                <div class="card-body">
                                <ul class="list-unstyled price-details">
                                    <li class="price-detail">
                                    <div class="details-title " >Giá của <span id='tong-san-pham'><?= number_format($func->tong_bill($_SESSION['giohang'],2))?></span> sản phẩm</div>
                                    <div class="detail-amt" id='tong-tien-chua-thue'>
                                        <strong><?= number_format($func->tong_bill($_SESSION['giohang'],1))?> VNĐ</strong>
                                    </div>
                                    </li>
                                    <li class="price-detail">
                                    <div class="details-title">Phí ship</div>
                                    <div class="detail-amt discount-amt text-success">Miễn phí</div>
                                    </li>
                                </ul>
                                <hr />
                                <ul class="list-unstyled price-details">
                                    <li class="price-detail">
                                    <div class="details-title">Tổng tiền thanh toán</div>
                                    <div class="detail-amt text-danger fw-bolder " id='tong-tien'><?= number_format($func->tong_bill($_SESSION['giohang'],1))?> VNĐ</div>
                                    </li>
                                </ul>
                                <button type="submit" id="thanh-toan" class="btn btn-primary w-100">Đặt hàng</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
    <!-- Checkout Payment Ends -->
    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        //cộng trừ button
        $("#gio-hang-ajax").on('click', '.congtru',function(e) { 
            var id = $(this).data('id');
            var rule = $(this).data('rule');
            var soluong = $("#soluong-"+id);
            
            var dk = 0;
            if(rule == 1)
            {
              if(soluong.val() > 0)
                dk = -1;
            }
            else
            {
                dk = 1;
            }
            var tinhtoan = +soluong.val() + dk;
           
            soluong.val(tinhtoan);
            
        });
        //update cart
        $("#gio-hang-ajax").on('click','.btn-update-cart',function (e) { 
            var id = $(this).data('id');
            var soluong = $("#soluong-"+id).val();
           
            $.ajax({
                url: "./ajax/update_cart.php",
                type: "POST",
                method: "POST",
                data: {id: id, soluong: soluong, rule: 0},
            })
            .done(function(result){
                swal("Thông báo","Cập nhật thành công","success");
                var obj = JSON.parse(result);
                $('#tong-gia-tien').html(obj.tong+ 'VNĐ');
                $('#tong-so-luong').html(obj.soluong);
                $('#tong-tien').html(obj.tong+ 'VNĐ');
                $('#tong-san-pham').html(obj.soluong);
                $('#tong-tien-chua-thue').html(obj.tong+ 'VNĐ');

            })
            .fail(function(result){
                console.log("error");
            })
            
        });
        //delete cart
        $("#gio-hang-ajax").on('click','.btn-delete-cart',function(e)
        {
            var id = $(this).data('id');
            swal("Thông báo","Bạn có muốn xóa nó.","warning")
            .then((value) => {
                if(value)
                {
                    $.ajax({
                    url: "./ajax/update_cart.php",
                    type: "POST",
                    method: "POST",
                    data: {id: id, rule: 1},
                    })
                    .done(function(){
                        swal("Thông báo","Xóa thành công","success").then( (vl)=>{
                            location.reload();
                        } );
                       

                    })
                    .fail(function(result){
                        console.log("error");
                    })
                }
            });
        });
        // thanh toán
        $(document).ready(function () {
        $('#thanh-toan').click(function (e) { 
          e.preventDefault();
            var name = $('input[name="fname"]').val();
            var number = $('input[name="mnumber"]').val();
            var address = $('input[name="apt-number"]').val();
            var city = $('input[name="city"]').val();
            var hinhthuc = $('input[name="paymentOptions"]:checked').val();
            
            $.ajax({
                url: '/ajax/thanhtoan.php',
                type: 'POST',
                method: 'POST',
                data: {name: name, number: number, address: address, city: city, hinhthuc: hinhthuc},
            })
            .done(function(result)
            {
                if(result == 'done')
                {
                    alert('Đặt hàng thành công !');
                   
                }
                else
                {
                   console.log(result);
                }
               
              
            })
            .fail(function(){
                console.log("error");
            });
        });
    });

        });

</script>
    <!-- END: Content-->
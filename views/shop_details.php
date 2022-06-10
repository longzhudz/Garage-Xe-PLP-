<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Product Details</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                    </li>
                    <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a>
                    </li>
                    <li class="breadcrumb-item active">Details
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
        <div class="content-body">
          <!-- app e-commerce details start -->
        <section class="app-ecommerce-details">
          <div class="card">
            <!-- Product Details starts -->
            <div class="card-body">
              <div class="row my-2">
                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                  <div class="d-flex align-items-center justify-content-center">
                    <img
                      src="<?=$info_products['img']?>"
                      class="img-fluid product-img"
                      alt="product image"
                      style="height: 300px; width:100%"
                      
                    />
                  </div>
                </div>
                <div class="col-12 col-md-7">
                  <h4><?=$info_products['name_product']?></h4>
                  <div class="row">
                  <span class="card-text item-company">Danh mục:  <a href="#" class="company-name"><?=$a['name']?></a></span>
                  <span class="card-text item-company">Thương hiệu:  <a href="#" class="company-name"><?=$a['brand']?></a></span>
                  </div>
                  <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                    <h4 class="item-price me-1"><?=number_format($info_products['price_product'])?> VNĐ</h4>
                    <ul class="unstyled-list list-inline ps-1 border-start">
                      <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                      <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                      <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                      <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                      <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                    </ul>
                  </div>
                  <p class="card-text">Trạng thái -
                    
                  <?php if($info_products['quantity'] != 0) { ?> 
                    <span class="text-success">Còn hàng</span></p>
                    <?php }elseif($info_products['quantity'] == 0){ ?>
                      <span class="text-danger">Hết hàng</span></p>
                      <?php } ?> 
                    
                  <p class="card-text">
                    
                  <?=$info_products['text']?>
                  </p>
                  <ul class="product-features list-unstyled">
                    <li><i data-feather="shopping-cart"></i> <span>Free Shipping</span></li>
                    <li>
                      <i data-feather="dollar-sign"></i>
                      <span>EMI options available</span>
                    </li>
                  </ul>
                  <hr />
                  <!--
                  <div class="product-color-options">
                    <h6>Colors</h6>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block selected">
                        <div class="color-option b-primary">
                          <div class="filloption bg-primary"></div>
                        </div>
                      </li>
                      <li class="d-inline-block">
                        <div class="color-option b-success">
                          <div class="filloption bg-success"></div>
                        </div>
                      </li>
                      <li class="d-inline-block">
                        <div class="color-option b-danger">
                          <div class="filloption bg-danger"></div>
                        </div>
                      </li>
                      <li class="d-inline-block">
                        <div class="color-option b-warning">
                          <div class="filloption bg-warning"></div>
                        </div>
                      </li>
                      <li class="d-inline-block">
                        <div class="color-option b-info">
                          <div class="filloption bg-info"></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                    -->
                  <hr />
                  <div class="d-flex flex-column flex-sm-row pt-1">
                  <a href='' data-id= <?=$info_products['id'] ?> class="add-to-cards btn btn-primary btn-cart">
                    <i data-feather="shopping-cart"></i>
                    <span>Add to cart</span>
                  </a>
                    <a href="#" class="btn btn-outline-secondary btn-wishlist me-0 me-sm-1 mb-1 mb-sm-0">
                      <i data-feather="heart" class="me-50"></i>
                      <span>Wishlist</span>
                    </a>
                    <div class="btn-group dropdown-icon-wrapper btn-share">
                      <button
                        type="button"
                        class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i data-feather="share-2"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">
                          <i data-feather="facebook"></i>
                        </a>
                        <a href="#" class="dropdown-item">
                          <i data-feather="twitter"></i>
                        </a>
                        <a href="#" class="dropdown-item">
                          <i data-feather="youtube"></i>
                        </a>
                        <a href="#" class="dropdown-item">
                          <i data-feather="instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product Details ends -->

            <!-- Item features starts -->
            <div class="item-features">
              <div class="row text-center">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                  <div class="w-75 mx-auto">
                    <i data-feather="award"></i>
                    <h4 class="mt-2 mb-1">100% Original</h4>
                    <p class="card-text">Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                  </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                  <div class="w-75 mx-auto">
                    <i data-feather="clock"></i>
                    <h4 class="mt-2 mb-1">10 Day Replacement</h4>
                    <p class="card-text">Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.</p>
                  </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                  <div class="w-75 mx-auto">
                    <i data-feather="shield"></i>
                    <h4 class="mt-2 mb-1">1 Year Warranty</h4>
                    <p class="card-text">Cotton candy gingerbread cake I love sugar plum I love sweet croissant.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Item features ends -->

            <!-- Related Products starts -->
            <div class="card-body">
              <div class="mt-4 mb-2 text-center">
                <h4>Sản phẩm cùng loại</h4>
                <p class="card-text">Có thể bạn quan tâm</p>
              </div>
              <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                <div class="swiper-wrapper">
                  <?php foreach($re as $key =>$value){ ?>
                  <div class="swiper-slide">
                    <a href="/shop_details/<?= $value['slug_product']?>.html">
                      <div class="item-heading">
                        <h5 class="text-truncate mb-0"><?=$value['name_product']?></h5>
                        <div class="row">
                        <small class="text-body">Danh mục: <?=$value['name']?></small>
                        <small class="text-body">Thương hiệu: <?=$value['brand']?></small>
                        </div>
                      </div>
                      <div class="img-container ">
                        <img src="<?=$value['img']?>" class="img-fluid" alt="image" style="width: 200px; height 200px; object-fit:cover" />
                      </div>
                      <div class="item-meta">
                        <ul class="unstyled-list list-inline mb-25">
                          <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                          <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                          <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                          <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                          <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                        </ul>
                        <p class="card-text text-primary mb-0"><?=number_format($value['price_product'])?> VNĐ</p>
                      </div>
                    </a>
                  </div>
                  <?php }?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
            <!-- Related Products ends -->
          </div>
        </section>
<!-- app e-commerce details end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->
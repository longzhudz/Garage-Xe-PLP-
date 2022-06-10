 <!-- BEGIN: Content-->
 <div class="app-content content ecommerce-application">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Shop</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                    </li>
                    <li class="breadcrumb-item active">Shop
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
        <div class="content-detached content-right">
          <div class="content-body"><!-- E-commerce Content Section Starts -->
<section id="ecommerce-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="ecommerce-header-items">
        <div class="result-toggler">
          <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
          </button>
          <div class="search-results">16285 results found</div>
        </div>
        <div class="view-options d-flex">
          <div class="btn-group dropdown-sort">
            <button
              type="button"
              class="btn btn-outline-primary dropdown-toggle me-1"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span class="active-sorting">Featured</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Featured</a>
              <a class="dropdown-item" href="#">Lowest</a>
              <a class="dropdown-item" href="#">Highest</a>
            </div>
          </div>
          <div class="btn-group" role="group">
            <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked />
            <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn" for="radio_option1"
              ><i data-feather="grid" class="font-medium-3"></i
            ></label>
            <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" />
            <label class="btn btn-icon btn-outline-primary view-btn list-view-btn" for="radio_option2"
              ><i data-feather="list" class="font-medium-3"></i
            ></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Content Section Starts -->

<!-- background Overlay when sidebar is shown  starts-->
<div class="body-content-overlay"></div>
<!-- background Overlay when sidebar is shown  ends-->

<!-- E-commerce Search Bar Starts -->
<section id="ecommerce-searchbar" class="ecommerce-searchbar">
  <div class="row mt-1">
    <div class="col-sm-12">
      <div class="input-group input-group-merge">
        <input
          type="text"
          class="form-control search_product"
          name="search-product"
          id="shop-search"
          placeholder="Search Product"
          aria-label="Search..."
          aria-describedby="shop-search"
        />
        <button id="btn-timkiem" type="submit"><span class="input-group-text"><i data-feather="search" class="text-muted"></i></span></button>
        
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Search Bar Ends -->

<!-- E-commerce Products Starts -->


    
<h4 class="mt-3">Tất cả sản phẩm</h4>


<section id="ecommerce-products"  class="grid-view filter_data">

  
 

</section>

<!-- E-commerce Products Ends -->

<!-- E-commerce Pagination Starts -->
<section id="ecommerce-pagination">
  <div class="row">
    <div class="col-sm-12">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-2">
          <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item next-item"><a class="page-link" href="#"></a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>
<!-- E-commerce Pagination Ends -->

          </div>
        </div>
        <div class="sidebar-detached sidebar-left">
          <div class="sidebar">
              <!-- Ecommerce Sidebar Starts -->
                <div class="sidebar-shop">
                    <div class="row">
                        <div class="col-sm-12">
                        <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                        </div>
                    </div>
                <div class="card">
                    <div class="card-body">
                    <!-- Price Filter starts -->
                    <form id="myForm" action="">
                        <div class="multi-range-price">
                            <h6 class="filter-title mt-0">Giá</h6>
                            <ul class="list-unstyled price-range" id="price-range">
                            <li>
                                <div class="form-check">
                                <input type="radio" id="priceAll" name="price-range" class="form-check-input" checked  />
                                <label class="form-check-label" for="priceAll">All</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                <input type="radio" id="priceRange1" value="1-100000" name="price-range" class="common_selector price_check form-check-input price-range " />
                                <label class="form-check-label" for="priceRange1">&lt;= <?=number_format(100000)?> VNĐ</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                <input type="radio" id="priceRange2" value="100000-200000" name="price-range" class="common_selector price_check form-check-input price-range" />
                                <label class="form-check-label" for="priceRange2"><?=number_format(100000)?> - <?=number_format(200000)?> VNĐ</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                <input type="radio" id="priceARange3" value="200000-500000" name="price-range" class="common_selector price_check form-check-input price-range" />
                                <label class="form-check-label" for="priceARange3"><?=number_format(200000)?> - <?=number_format(500000)?> VNĐ</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                <input type="radio" id="priceRange4" value="500000-9000000000" name="price-range" class="common_selector price_check form-check-input price-range" />
                                <label class="form-check-label" for="priceRange4">&gt;= <?=number_format(500000)?> VNĐ</label>
                                </div>
                            </li>
                            </ul>
                        </div>
                      </form>
                    <!-- Price Filter ends -->

                    <!-- Price Slider starts -->
                    <div class="">
                        <h6 class="">Khoảng giá</h6>
                        <div class="">
                            <input type="hidden" id="hidden_minimum_price" value="0">
                            <input type="hidden" id="hidden_maximum_price" value="100000000">
                            <p id="price_show"> Từ: 50k - 50tr</p>
                            <div id="price_range">
                            
                            </div>
                        </div>
                    </div>
                    <!-- Price Range ends -->

                    <!-- Categories Starts -->
                    <div id="product-categories" class="categogries">
                        <h6 class="filter-title">Categories</h6>
                        <ul class="list-unstyled categories-list">
                        <?php foreach($re as $key =>$value){?>
                        <li>
                            <div class="form-check">
                            <input type="checkbox" value="<?=$value['id_cate']?>"  name="category-filter" class="common_selector catego form-check-input" /><?=$value['name']?>
                            
                            </div>
                        </li>
                        <?php }?>
                        </ul>
                    </div>
                    <!-- Categories Ends -->

                    <!-- Brands starts -->
                    <div class="brands">
                        <h6 class="filter-title">Brands</h6>
                        <ul class="list-unstyled brand-list">

                          <?php foreach($result as $key =>$value){ ?>
                          <li>
                              <div class="form-check">
                              <input type="checkbox" class="common_selector brandne form-check-input"  value="<?=$value['brand']?>" /><?=$value['brand']?>
                              </div>
                          </li>
                        <?php }?>
                        </ul>
                    </div>
                    <!-- Brand ends -->

                    <!-- Rating starts -->
                    <div id="ratings">
                        <h6 class="filter-title">Ratings</h6>
                        <div class="ratings-list">
                        <a href="#">
                            <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li>& up</li>
                            </ul>
                        </a>
                        <div class="stars-received">160</div>
                        </div>
                        <div class="ratings-list">
                        <a href="#">
                            <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li>& up</li>
                            </ul>
                        </a>
                        <div class="stars-received">176</div>
                        </div>
                        <div class="ratings-list">
                        <a href="#">
                            <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li>& up</li>
                            </ul>
                        </a>
                        <div class="stars-received">291</div>
                        </div>
                        <div class="ratings-list">
                        <a href="#">
                            <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li>& up</li>
                            </ul>
                        </a>
                        <div class="stars-received">190</div>
                        </div>
                    </div>
                    <!-- Rating ends -->

                    <!-- Clear Filters Starts -->
                    <div id="clear-filters">
                        <button type="button" class="btn w-100 btn-primary">Clear All Filters</button>
                    </div>
                    <!-- Clear Filters Ends -->
                    </div>
                </div>
                </div>
<!-- Ecommerce Sidebar Ends -->

          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        filter_data();
        function filter_data(){
          var action = 'get_data';
          var minimum_price = $('#hidden_minimum_price').val();
          var maximum_price = $('#hidden_maximum_price').val();
          var price  = get_filter('price_check');
          var brandne = get_filter('brandne');
          var cate = get_filter('catego');
         


          $.ajax({
            url: '/ajax/products.php',
            type: 'POST',
            method: 'POST',
            data: {action:action, minimum_price:minimum_price ,maximum_price:maximum_price , brandne:brandne ,cate:cate,price:price},
            success: function (data) {
             
              $('.filter_data').html(data);
              
            }
          });
        }
        $('.search_product').keyup(function (e) { 
        
          var action = 'get_data';
          var timkiem = $('.search_product').val();
         
          $.ajax({
            url: '/ajax/products.php',
            type: 'POST',
            method: 'POST',
            data: {action:action, timkiem:timkiem},
            success: function (data) {
             
              $('.filter_data').html(data);
              
            }
          });
        });
       
        
        function get_filter(class_name)
        {
          var filter = [];
          $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
          }); 
          return filter;
        }
        $('.common_selector').click(function() { 
            filter_data();
        });
      });
    </script>
    <!-- END: Content-->
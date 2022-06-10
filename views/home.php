  <!-- BEGIN: Content-->
  <div  class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <!-- *********************************-->
    <div style="display: block;" class="content-body1">
    <!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
          <section class="home1" id="home">

            <h3 data-speed="-2" class="home-parallax1">Phuc Lam Phuong Garage</h3>
        
            <img data-speed="5" class="home-parallax1" src="./app-assets/images/home-img.png" alt="">
        
            <a data-speed="7" href="#" class="btn home-parallax1">explore cars</a>
        
          </section>
        
          <section class="icons-container1">

            <div class="icons1">
                <i class="fas fa-home"></i>
                <div style="margin-left: 0px;" class="content1">
                    <h3>150+</h3>
                    <p>branches</p>
                </div>
            </div>
        
            <div class="icons1">
                <i class="fas fa-car"></i>
                <div style="margin-left: 0px;" class="content1">
                    <h3>4770+</h3>
                    <p>cars sold</p>
                </div>
            </div>
        
            <div class="icons1">
                <i class="fas fa-users"></i>
                <div style="margin-left: 0px;" class="content1">
                    <h3>320+</h3>
                    <p>happy clients</p>
                </div>
            </div>
        
            <div class="icons1">
                <i class="fas fa-car"></i>
                <div style="margin-left: 0px;" class="content1">
                    <h3>1500+</h3>
                    <p>news cars</p>
                </div>
            </div>
        
          </section>
        
          <!-- BEGIN: Content-->
   <div style="margin-left:0px;padding-top: 0px" class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div style="display: flex; flex-direction: column; align-items: center;" class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="heading1"> Sản phẩm <span>mới</span> </h1>
            </div>
          </div>
        </div>
      </div>
      <div style="display: block;" class="content-body">
      <!-- Wishlist Starts -->
      <section id="wishlist" class="grid-view wishlist-items">
        <?php foreach($result as $key =>$value){?>
        <div class="card ecommerce-card">
          <div class="item-img text-center" >
            <a href="/shop_details/<?= $value['slug_product']?>.html">
              <img src="<?=$value['img']?>" class="img-fluid" alt="img-placeholder" style="height: 210px;"/>
            </a>
          </div>
          <div style="max-height: 140px;" class="card-body">
            <div class="item-wrapper">
              <div class="item-rating">
                <ul class="unstyled-list list-inline">
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                </ul>
              </div>
              <div class="item-cost">
                <h6 class="item-price"><?=number_format($value['price_product'])?> VNĐ</h6>
              </div>
            </div>
            <div class="py-15">
            <a href="#">
              <span  class="badge rounded-pill badge-light-info me-50"><?=$value['brand']?></span>
            </a>
            <a href="#">
              <span class="badge rounded-pill badge-light-primary"><?=$value['name']?></span>
            </a>
          </div>
            <div class="item-name">
              <a href="/shop_details/<?= $value['slug_product']?>.html"><?=$value['name_product']?> </a>
            </div>
            <p class="card-text item-description">
             <?=$value['text']?>
            </p>
          </div>
          <div class="item-options text-center">
            <a href='' data-id= <?=$value['id'] ?> class="add-to-cards btn btn-primary btn-cart">
              <i data-feather="shopping-cart"></i>
              <span>Add to cart</span>
            </a>
          </div>
        </div>
        <?php }?>
      </section>
      <!-- Wishlist Ends -->

      </div>
    </div>
   </div>
  <!-- END: Content-->
         <!--ĐÁNH DẤU KẾT THÚCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCc-->
  </section>
        <!-- Dashboard Ecommerce ends -->
        
    </div>
<section class="services1" id="services">

    <h1 class="heading1"> Dịch <span>vụ</span> </h1>

    <div class="box-container1">
  <?php { ?>
        <div style="max-height: 200px;
          overflow: hidden;
          text-overflow: ellipsis;" class="box1">
            <i class="fas fa-car"></i>
            <a href="/blog_details/<?=$load1['slug']?>.html"><h3><?=$load1['title']?></h3></a>
            <p><?=$load1['text']?></p>
            <a href="/blog_details/<?=$load1['slug']?>.html" class="btn"> read more</a>
        </div>
  <?php } ?>
  <?php { ?>
    <div style="max-height: 200px;
          overflow: hidden;
          text-overflow: ellipsis;" class="box1">
            <i class="fas fa-car"></i>
            <a href="/blog_details/<?=$load2['slug']?>.html"><h3><?=$load2['title']?></h3></a>
            <p><?=$load2['text']?></p>
            <a href="/blog_details/<?=$load2['slug']?>.html" class="btn"> read more</a>
        </div>
  <?php } ?>
  <?php { ?>
    <div style="max-height: 200px;
          overflow: hidden;
          text-overflow: ellipsis;" class="box1">
            <i class="fas fa-car"></i>
            <a href="/blog_details/<?=$load3['slug']?>.html"><h3><?=$load3['title']?></h3></a>
            <p><?=$load3['text']?></p>
            <a href="/blog_details/<?=$load3['slug']?>.html" class="btn"> read more</a>
        </div>
  <?php } ?>
  <?php { ?>
    <div style="max-height: 200px;
          overflow: hidden;
          text-overflow: ellipsis;" class="box1">
            <i class="fas fa-car"></i>
            <a href="/blog_details/<?=$load4['slug']?>.html"><h3><?=$load4['title']?></h3></a>
            <p><?=$load4['text']?></p>
            <a href="/blog_details/<?=$load4['slug']?>.html" class="btn"> read more</a>
        </div>
  <?php } ?>
  <?php { ?>
    <div style="max-height: 200px;
          overflow: hidden;
          text-overflow: ellipsis;" class="box1">
            <i class="fas fa-car"></i>
            <a href="/blog_details/<?=$load6['slug']?>.html"><h3><?=$load6['title']?></h3></a>
            <p><?=$load6['text']?></p>
            <a href="/blog_details/<?=$load6['slug']?>.html" class="btn"> read more</a>
        </div>
  <?php } ?>
  <?php { ?>
    <div style="max-height: 200px;
          overflow: hidden;
          text-overflow: ellipsis;" class="box1">
            <i class="fas fa-car"></i>
            <a href="/blog_details/<?=$load5['slug']?>.html"><h3><?=$load5['title']?></h3></a>
            <p><?=$load5['text']?></p>
            <a href="/blog_details/<?=$load5['slug']?>.html" class="btn"> read more</a>
        </div>
  <?php } ?>

    </div>

</section>

   <!-- BEGIN: Content-->
   <div style="margin-left:0px;" class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div style="display: flex; flex-direction: column; align-items: center;" class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="heading1"> Sản phẩm <span>nổi bật</span> </h1>
            </div>
          </div>
        </div>
        
      </div>
      <div style="display: block;" class="content-body">
      <!-- Wishlist Starts -->
      <section id="wishlist" class="grid-view wishlist-items">
        <?php foreach($hot as $key =>$value2){?>
          <div class="card ecommerce-card">
          <div class="item-img text-center" >
            <a href="/shop_details/<?= $value2['slug_product']?>.html">
              <img src="<?=$value2['img']?>" class="img-fluid" alt="img-placeholder" style="height: 210px;"/>
            </a>
          </div>
          <div style="max-height: 140px;" class="card-body">
            <div class="item-wrapper">
              <div class="item-rating">
                <ul class="unstyled-list list-inline">
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                </ul>
              </div>
              <div class="item-cost">
                <h6 class="item-price"><?=number_format($value2['price_product'])?> VNĐ</h6>
              </div>
            </div>
            <div class="py-15">
            <a href="#">
              <span  class="badge rounded-pill badge-light-info me-50"><?=$value2['brand']?></span>
            </a>
            <a href="#">
              <span class="badge rounded-pill badge-light-primary"><?=$value2['name']?></span>
            </a>
          </div>
            <div class="item-name">
              <a href="/shop_details/<?= $value['slug_product']?>.html"><?=$value2['name_product']?> </a>
            </div>
            <p class="card-text item-description">
             <?=$value2['text']?>
            </p>
          </div>
          <div class="item-options text-center">
            <a href='' data-id= <?=$value2['id'] ?> class="add-to-cards btn btn-primary btn-cart">
              <i data-feather="shopping-cart"></i>
              <span>Add to cart</span>
            </a>
          </div>
        </div>
        <?php }?>
      </section>
      <!-- Wishlist Ends -->

      </div>
    </div>
   </div>
  <!-- END: Content-->


<section class="newsletter1">
    
    <h3>Subscribe for latest updates</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>

   <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
   </form>

</section>


<section id="basic-horizontal-layouts">
  <div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bản đồ</h4>
        </div>
        <div class="card-body">
          <!--đánh-->
          <div style="overflow: hidden;">
            <iframe style="overflow: hidden;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62858.50711545915!2d105.71183457910156!3d10.045161799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1649232870475!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div style="min-height: 540px;" class="card">
        <div class="card-header">
          <h4 class="card-title">Liên hệ với chúng tôi</h4>
        </div>
        <div class="card-body">
          <form id="contact" class="form form-horizontal">
            <div class="row">
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="fname-icon">First Name</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i data-feather="user"></i></span>
                      <input
                        type="text"
                        id="fname-icon"
                        class="form-control"
                        name="name_lienhe"
                        placeholder="First Name"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="email-icon">Email</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i data-feather="mail"></i></span>
                      <input
                        type="email"
                        id="email-icon"
                        class="form-control"
                        name="email_lienhe"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="contact-icon">Mobile</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i data-feather="smartphone"></i></span>
                      <input
                        type="number"
                        id="contact-icon"
                        class="form-control"
                        name="phone_lienhe"
                        placeholder="Mobile"
                      />
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="pass-icon">Comment</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a comment here"
                        id="floatingTextarea2"
                        style="height: 100px"
                        name = "comment_lienhe"
                      ></textarea>
                      <label for="floatingTextarea2">Comments</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <button type="submit" id="lienhe_button" class="btn btn-primary me-1">Submit</button>
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

    </div>
    <script>
                    	$(document).ready(function() {
                         $('#contact').submit( function(event){
                            event.preventDefault();
                            var name = $(this).find('input[name="name_lienhe"]').val();
                            var email = $(this).find('input[name="email_lienhe"]').val();
                            var phone = $(this).find('input[name="phone_lienhe"]').val();
                            var comment = $(this).find('textarea[name="comment_lienhe"]').val();


                            var flag = 0;
                            if(name == '' || email == ''|| phone == ''|| comment == ''){
                                flag =1;
                                error = 'Không bỏ trống thông tin';
                            }
                            if(flag == 1){
                               swal({   
                                title: "Thông báo",
                                html: true,
                                text: error,   
                                showConfirmButton:true

                            })
                           }else{
                            $.ajax({
                                url: '../ajax/contact.php',
                                type: 'POST',
                                method: 'POST',
                                data: {name: name,email: email, phone: phone, comment:comment},
                                beforeSend: function(){
                                    $('#lienhe_button').attr('disabled', 'true');
                             }
                           })
                            .done(function(result) {
                                $('#lienhe_button').removeAttr('disabled');
                                if(result == 'done')
                                {
                                   header('location: /home.html');
                                }
                                else
                                {
                                    swal({   
                                    title: "Thông báo",
                                    html: true,
                                    text: result,   
                                    showConfirmButton:true
                                    })
                                }
                            })
                            .fail(function() {
                                $('#lienhe_button').removeAttr('disabled');

                                swal({   
                                title: "Thông báo",
                                html: true,
                                text: 'Kiểm tra đường truyền mạng',
                                showConfirmButton:true

                            })
                            });
                        }       
                    } )   
                     });
        </script> 
    <!-- END: Content-->
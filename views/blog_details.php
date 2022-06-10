 <!-- BEGIN: Content-->
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Blog Detail</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Blog</a>
                    </li>
                    <li class="breadcrumb-item active">Detail
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
        <div class="content-detached content-left">
          <div class="content-body">
            <!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <?php {?>
    <!-- Blog -->
    <div class="col-12">
      <div class="card">
        <img
          style="object-fit: cover;height: 400px;"
          src="<?=$info['img']?>"
          class="img-fluid card-img-top"
          alt="Blog Detail Pic"
        />
        <div class="card-body">
          <h4 class="card-title"><?=$info['title']?></h4>
          <div class="d-flex">
            <div class="avatar me-50">
              <img src="<?=$row['img']?>" alt="Avatar" width="24" height="24" />
            </div>
            <div class="author-info">
              <small class="text-muted me-25">by</small>
              <small><a href="#" class="text-body"><?=$row['Fullname']?></a></small>
              <span class="text-muted ms-50 me-25">|</span>
              <small class="text-muted"><?=$info['time']?></small>
            </div>
          </div>
          <div class="my-1 py-25">
            <a href="#">
              <span class="badge rounded-pill badge-light-danger me-50"><?=$row['name_cate']?></span>
            </a>
          </div>
          <p class="card-text mb-2">
           <?=$row['text']?>
          </p>
        
        
        </div>
      </div>
    </div>
    <!--/ Blog -->
      <?php } ?>
    <!-- Blog Comment -->
    <div class="col-12 mt-1" id="blogComment">
      <h6 class="section-label mt-25">Comment</h6>
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="avatar me-75">
              <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar" />
            </div>
            <div class="author-info">
              <h6 class="fw-bolder mb-25">Chad Alexander</h6>
              <p class="card-text">May 24, 2020</p>
              <p class="card-text">
                A variation on the question technique above, the multiple-choice question great way to engage your
                reader.
              </p>
              <a href="#">
                <div class="d-inline-flex align-items-center">
                  <i data-feather="corner-up-left" class="font-medium-3 me-50"></i>
                  <span>Reply</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
    <div class="col-12 mt-1">
      <h6 class="section-label mt-25">Leave a Comment</h6>
      <div class="card">
        <div class="card-body">
          <form action="javascript:void(0)" class="form">
            <div class="row">
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" placeholder="Name" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="email" class="form-control" placeholder="Email" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="url" class="form-control" placeholder="Website" />
                </div>
              </div>
              <div class="col-12">
                <textarea class="form-control mb-2" rows="4" placeholder="Comment"></textarea>
              </div>
              <div class="col-12">
                <div class="form-check mb-2">
                  <input type="checkbox" class="form-check-input" id="blogCheckbox" />
                  <label class="form-check-label" for="blogCheckbox"
                    >Save my name, email, and website in this browser for the next time I comment.</label
                  >
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Post Comment</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Leave a Blog Comment -->
  </div>
</div>
<!--/ Blog Detail -->
          </div>
        </div>
        <div class="sidebar-detached sidebar-right">
          <div class="sidebar"><div class="blog-sidebar my-2 my-lg-0">
  <!-- Search bar -->
  <div class="blog-search">
    <div class="input-group input-group-merge">
      <input type="text" class="form-control" placeholder="Search here" />
      <span class="input-group-text cursor-pointer">
        <i data-feather="search"></i>
      </span>
    </div>
  </div>
  <!--/ Search bar -->

  <!-- Recent Posts -->
  <div class="blog-recent-posts mt-3">
    <h6 class="section-label">Bài viết mới</h6>
    <div class="mt-75">
      <?php foreach ($result2 as $key => $value) {?>
      <div class="d-flex mb-2">
        <a href="/blog_details/<?=$value['slug']?>.html" class="me-2">
          <img
            class="rounded"
            src="<?=$value['img']?>"
            width="100"
            height="70"
            alt="Recent Post Pic"
          />
        </a>
        <div class="blog-info">
          <h6 class="blog-recent-post-title">
            <a href="/blog_details/<?=$value['slug']?>.html" class="text-body-heading"><?=$value['title']?></a>
          </h6>
          <div class="text-muted mb-0"><?=$value['time']?></div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
  <!--/ Recent Posts -->
  <!-- Recent Posts -->
    <div class="blog-recent-posts mt-3">
    <h6 class="section-label">Bài viết liên quan</h6>
    <div class="mt-75">
      <?php foreach ($resu as $key => $value2) {?>
      <div class="d-flex mb-2">
        <a href="/blog_details/<?=$value2['slug']?>.html" class="me-2">
          <img
            class="rounded"
            src="<?=$value2['img']?>"
            width="100"
            height="70"
            alt="Recent Post Pic"
          />
        </a>
        <div class="blog-info">
          <h6 class="blog-recent-post-title">
            <a href="/blog_details/<?=$value2['slug']?>.html" class="text-body-heading"><?=$value2['title']?></a>
          </h6>
          <div class="text-muted mb-0"><?=$value2['time']?></div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
  <!--/ Recent Posts -->    
  <!-- Categories -->
  <div class="blog-categories mt-3">
    <h6 class="section-label">Categories</h6>
    <div class="mt-1">
      <div class="d-flex justify-content-start align-items-center mb-75">
        <a href="#" class="me-75">
          <div class="avatar bg-light-primary rounded">
            <div class="avatar-content">
              <i data-feather="watch" class="avatar-icon font-medium-1"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="blog-category-title text-body">Fashion</div>
        </a>
      </div>
      <div class="d-flex justify-content-start align-items-center mb-75">
        <a href="#" class="me-75">
          <div class="avatar bg-light-success rounded">
            <div class="avatar-content">
              <i data-feather="shopping-cart" class="avatar-icon font-medium-1"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="blog-category-title text-body">Food</div>
        </a>
      </div>
      <div class="d-flex justify-content-start align-items-center mb-75">
        <a href="#" class="me-75">
          <div class="avatar bg-light-danger rounded">
            <div class="avatar-content">
              <i data-feather="command" class="avatar-icon font-medium-1"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="blog-category-title text-body">Gaming</div>
        </a>
      </div>
      <div class="d-flex justify-content-start align-items-center mb-75">
        <a href="#" class="me-75">
          <div class="avatar bg-light-info rounded">
            <div class="avatar-content">
              <i data-feather="hash" class="avatar-icon font-medium-1"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="blog-category-title text-body">Quote</div>
        </a>
      </div>
      <div class="d-flex justify-content-start align-items-center">
        <a href="#" class="me-75">
          <div class="avatar bg-light-warning rounded">
            <div class="avatar-content">
              <i data-feather="video" class="avatar-icon font-medium-1"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="blog-category-title text-body">Video</div>
        </a>
      </div>
    </div>
  </div>
  <!--/ Categories -->
</div>

          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->
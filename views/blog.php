   <!-- BEGIN: Content-->
   <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Blog List</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Blog</a>
                    </li>
                    <li class="breadcrumb-item active">List
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
          <div class="content-body"><!-- Blog List -->
<div class="blog-list-wrapper">
  <!-- Blog List Items -->
  <div class="row">
  <?php foreach($result as $key => $value) { 

    ?>
    <div class="col-md-6 col-12">
      <div class="card">
        <a href="/blog_details/<?=$value['slug']?>.html">
          <img style="height: 320px;object-fit: cover;" class="card-img-top img-fluid" src="<?=$value['img']?>" alt="Blog Post pic" />
        </a>
        <div class="card-body " style="
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 20px;
    -webkit-line-clamp: 5;
    display: -webkit-box;
    -webkit-box-orient: vertical;">
          <h4 class="card-title">
            <a href="/blog_details/<?=$value['slug']?>.html" class="blog-title-truncate text-body-heading"
              ><?=$value['title']?></a
            >
          </h4>
          <div class="d-flex">
            <div class="avatar me-50">
              <img src="<?=$value['img_user']?>" alt="Avatar" width="24" height="24" />
            </div>
            
            <div class="author-info">
              <small class="text-muted me-25">by</small>
              <small><a href="/profile.html" class="text-body"><?=$value['Fullname']?></a></small>
              <span class="text-muted ms-50 me-25">|</span>
              <small class="text-muted"><?=$value['time'] ?></small>
            </div>

          </div>
          <div class="my-1 py-25">
            <a href="#">
              <span  class="badge rounded-pill badge-light-info me-50"><?=$value['name_cate']?></span>
            </a>
            <a href="#">
              <span class="badge rounded-pill badge-light-primary">Fashion</span>
            </a>
          </div>
          <p class="card-text blog-content-truncate">
           <?=$value['text']?>
          </p>
          <hr />
          <div class="d-flex justify-content-between align-items-center">
            <a href="page-blog-detail.html#blogComment">
              <div class="d-flex align-items-center">
                <i data-feather="message-square" class="font-medium-1 text-body me-50"></i>
                <span class="text-body fw-bold">76 Comments</span>
              </div>
            </a>
            <a href="/blog_details/<?=$value['slug']?>.html" class="fw-bold">Read More</a>
          </div>
        </div>
      </div>
    </div>
  <?php }?> 
  </div>
  <!--/ Blog List Items -->

  <!-- Pagination -->
  <div class="row">
    <div class="col-12">
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-2">
          <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item active" aria-current="page"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item next-item"><a class="page-link" href="#"></a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!--/ Pagination -->
</div>
<!--/ Blog List -->

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
    <h6 class="section-label">Recent Posts</h6>
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
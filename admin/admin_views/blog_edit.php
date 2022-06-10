 <!-- BEGIN: Content-->
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Blog Edit</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Blog</a>
                    </li>
                    <li class="breadcrumb-item active">Edit
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
        <div class="content-body"><!-- Blog Edit -->
<div class="blog-edit-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="avatar me-75">
              <img src="<?=$row['img_user']?>" width="38" height="38" alt="Avatar" />
            </div>
            <div class="author-info">
              <h6 class="mb-25"><?=$row['Fullname']?></h6>
              <p class="card-text"><?=$row['time']?></p>
            </div>
          </div>
          <!-- Form -->
          <form class="form_edit_blog" action="" method="POST" enctype="multipart/form-data" class="mt-2">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="mb-2">
                  <label class="form-label"   for="blog-edit-title">Title</label>
                  <input
                    onkeyup="ChangeToSlug();"
                    type="text"
                    id="blog_title"
                    name="title"
                    class="form-control"
                    value="<?=$row['title']?>"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-2">
                  <label class="form-label" for="blog-edit-category">Category</label>
                  <select name="cate_blog"  id="input" class="form-control" required="required" >
                    <?php foreach($blog as $key => $value){ ?>
                    <option value=<?=$value['id_cate']?>  
                      <?= (($value['id_cate'] == $row['id_cate']) ? 'selected' : ''  ) ?>
                    >
                    <?=$value['name_cate']?>
                  </option>
                    <?php }?>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-2">
                  <label class="form-label" for="blog-edit-slug">Slug</label>
                  <input
                    type="text"
                    id="slug"
                    name="slug"
                    disabled=""
                    class="form-control"
                    value="<?=$row['slug']?>"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-2">
                  <label class="form-label" for="blog-edit-status">Status</label>
                  <select name="status" class="form-select" id="blog-edit-status">
                    
                    <option value="0" 
                    <?= (($row['status'] == 0) ? 'selected' : '') ?> 
                    >Công khai</option>
                    <option value="1"
                    <?= (($row['status'] == 1) ? 'selected' : '') ?> 
                    >Chỉ mình tôi</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-2">
                  <label class="form-label" for="blog-edit-title">Content</label>
                  <div class="col-md-12">
                    <textarea class="form-control tinymce" name="content"  id="myTextarea" >
                     <?= $row['text']?>
                    </textarea>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="border rounded p-2">
                  <h4 class="mb-1">Hình ảnh</h4>
                  <div class="d-flex flex-column flex-md-row">
                    <img
                      src="<?=$row['img']?>"
                      id="blog-feature-image"
                      class="rounded me-2 mb-1 mb-md-0"
                      width="170"
                      height="110"
                      alt="Blog Featured Image"
                    />
                    <div class="featured-info">
                      <small class="text-muted">Kích thước hình ảnh 800x400 là đẹp nhất, dung lượng tối đa 10mb.</small>
    
                      <div class="d-inline-block">
                        <input class="form-control" name="image_blog" type="file" id="blogCustomFile"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-50">
                <button onclick="return UpdateA()" type="submit" class="btn btn-primary me-1">Save Changes</button>
              </div>
            </div>
          </form>
          <!--/ Form -->
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Blog Edit -->

        </div>
      </div>
<script>
    function UpdateA()
    {
        return alert('Đã cập nhật thành công');
    }
    function ChangeToSlug()
    {
    var title, slug;
 
    //Lấy text từ thẻ input title 
    title = document.getElementById("blog_title").value;
 
    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
 
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
    }
</script>
    </div>
    <!-- END: Content-->
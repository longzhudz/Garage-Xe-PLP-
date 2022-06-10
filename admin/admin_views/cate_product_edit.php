<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý Danh mục sản phẩm</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./danhmucsanpham.html">Quản lý Danh mục sản phẩm</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
    <section id="context-menu">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sửa danh mục sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                
                            </p>
                            <div class="row">
                                <form id="form-add-blog" action="" method="POST"  >
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Tên danh mục</label>
                                            <input name="name_cate" value="<?=$load['name']?>" type="text" onkeyup="ChangeToSlug();" id="name_cate" class="form-control" placeholder="Tên danh mục">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Đường dẫn tĩnh</label>
                                            <input name="slug" type="text" class="form-control" value="<?=$load['slug']?>" id="slug" disabled="" placeholder="Đường dẫn tĩnh">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                            <label class="form-label" for="blog-edit-status">Status</label>
                                            <select name="status" class="form-select" id="blog-edit-status">
                                                
                                                <option value="0" 
                                                <?= (($load['status'] == 0) ? 'selected' : '') ?> 
                                                >Công khai</option>
                                                <option value="1"
                                                <?= (($load['status'] == 1) ? 'selected' : '') ?> 
                                                >Chỉ mình tôi</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-12 mb-2">
                                            <button type="submit" onclick="return Updat()" class="btn btn-outline-primary" id="save-cate-list"><i data-feather="save"></i>Uploads</button>
                                        </div>
                                    </div>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</div>

<script>
    
    function Updat()
    {
        return alert('Cập nhật thành công');
    }
    function ChangeToSlug()
    {
    var title, slug;
 
    //Lấy text từ thẻ input title 
    title = document.getElementById("name_cate").value;
 
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


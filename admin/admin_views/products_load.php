<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý Sản phẩm</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./quanlysanpham.html">Quản lý Sản phẩm</a>
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
                            <h4 class="card-title">Thêm Sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                
                            </p>
                            <div class="row">
                                <form id="form-add-pro" action="" method="POST" enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Tên sản phẩm</label>
                                            <input name="name_products" type="text" id="name-cate" onkeyup="ChangeToSlug();" class="form-control" placeholder="Tên danh mục">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Đường dẫn tĩnh</label>
                                            <input name="slug" type="text" class="form-control" id="slug" disabled="" placeholder="https://longdeptrai.com/Đường dẫn tĩnh">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Danh mục bài viết</label>
                                            <select name="id_cate" id="input" class="form-control" required="required">
                                                <?php   foreach($cate_pro as $key => $val) { ?>
                                               <option value="<?=$val['id']?>"><?=$val['name']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Tên thương hiệu</label>
                                            <input name="name_brand" type="text" id="name_brand"  class="form-control" placeholder="Tên thương hiệu">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Giá</label>
                                            <input name="price" type="text" id="price" class="form-control" placeholder="Tên danh mục">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Số lượng</label>
                                            <input name="quantity" type="number" class="form-control" placeholder="Nhập số lượng">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Hình ảnh</label>
                                            <input  type="file"  name="img_pro" id="img_pro" class="form-control" placeholder="Link hình ảnh ở quản lý hình ảnh">
                                        </div>
                                        <div class="col-sm-12 col-lg-12 mb-2">
                                            <label for="">Mô tả</label>
                                            <textarea  class="form-control tinymce" name="content" id="" cols="30" rows="10"></textarea>
                                        
                                        </div> 
                                        <div class="col-sm-12 col-lg-12 mb-2">
                                            <button type="submit" onclick="return Add()" class="btn btn-outline-primary" id="save-cate-list"><i data-feather="save"></i>Uploads</button>
                                        </div>
                                    </div>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="context-menu">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sản phẩm hiện có </h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đường dẫn tĩnh</th>
                                    <th>Giá</th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Danh mục sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Trạng thái</th>
                                    <th>Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($result as $key => $value) {?>
                                    <tr>
                                        <td><?=$value['id']?></td>
                                        
                                        <td><?=$value['name_product']?></td>
                                        <td><?=$value['slug_product']?></td>
                                        <td><?=$value['price_product']?></td>
                                        <td>
                                            <img style="width: 60px;" src="<?=$value['img']?>" alt="">
                                        </td>
                                        <td><?=$value['name']?></td>
                                        <td><?=$value['quantity']?></td>

                                        <?php if($value['status']==0){?>
                                        <td class="fw-bolder text-success">Hoạt động</td>     
                                        <?php }elseif($value['status']== 1) {?>    
                                        <td class="fw-bolder text-danger">Bị khóa</td>
                                        <?php }?>                            
                                        <td>
                                            <div class="d-flex align-items-center ">
                                               <!-- <button class="btn btn-outline-success btn-sm "><a href="./index.php?ctrl=products_update&id=<?=$value['id']?>"><i data-feather="edit"></i></a></button> -->
                                               
                                              <a class="btn btn-success me-1" href="./index.php?ctrl=products_update&id=<?=$value['id']?>"><i data-feather="edit"></i></a>
                                               <a class="btn btn-danger" onclick="return Del('<?= $value['name_product']?>')" href="./index.php?ctrl=products_delete&id=<?=$value['id']?>"><i  data-feather="delete"></i></a>
                                            </div>  
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    function Del(name)
    {
        return confirm('Bạn có muốn xóa bài viết '+ name + "?");
    }
    function Add()
    {
        return alert('Thêm mới thành công');
    }
    
    function ChangeToSlug()
    {
    var title, slug;
 
    //Lấy text từ thẻ input title 
    title = document.getElementById("name-cate").value;
 
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


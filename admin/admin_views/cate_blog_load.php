<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý Danh mục bài viết</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./danhmucbaiviet.html">Quản lý Danh mục bài viết</a>
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
                            <h4 class="card-title">Thêm danh mục bài viết</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                
                            </p>
                            <div class="row">
                                <form id="form-add-blog" action="" method="POST"  >
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Tên danh mục</label>
                                            <input name="name_cate" type="text" id="name_cate" class="form-control" placeholder="Tên danh mục">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                            <label class="form-label" for="blog-edit-status">Status</label>
                                            <select name="status" class="form-select" id="status">
                                                <option value="0">Hoạt động</option>
                                                <option value="1">Bảo trì</option>
                                            </select>
                                            </div>
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
                            <h4 class="card-title">Danh mục bài viết hiện có </h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>Trạng thái</th>
                                    <th>Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($load as $key => $value) {?>
                                    <tr>
                                        <td><?=$value['id_cate']?></td>
                                        
                                        <td><?=$value['name_cate']?></td>
                                    
                                        <?php if($value['status']==0){?>
                                        <td class="fw-bolder text-success">Hoạt động</td>     
                                        <?php }elseif($value['status']== 1) {?>    
                                        <td class="fw-bolder text-danger">Bị khóa</td>
                                        <?php }?>                            
                                        <td>
                                            <div class="d-flex align-items-center ">
                                                <a class="btn btn-success me-1"href="./index.php?ctrl=cate_blog_edit&id=<?=$value['id_cate']?>"><i data-feather="edit"></i></a>
                                                <a class="btn btn-danger" onclick="return Del('<?= $value['name_cate']?>')" href="./index.php?ctrl=cate_blog_delete&id=<?=$value['id_cate']?>"><i  data-feather="delete"></i></a>
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
    
    
</script>


<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý Danh mục Dịch vụ</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./service.html">Quản lý Danh mục dịch vụ</a>
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
                            <h4 class="card-title">Sửa danh mục dịch vụ</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                
                            </p>
                            <div class="row">
                                <form id="form-add-blog" action="" method="POST"  >
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6 mb-2">
                                            <label for="">Tên danh mục</label>
                                            <input name="name_cate" value="<?=$load['name']?>" type="text"  id="name_cate" class="form-control" placeholder="Tên danh mục">
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
  
</script>


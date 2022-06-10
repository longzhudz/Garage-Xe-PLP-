<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý Booking</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./service.html">Quản lý Booking</a>
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
                            <h4 class="card-title">Danh mục dịch vụ hiện có </h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Tên khách hàng</th>
                              
                                    <th>Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($result as $key => $value) {?>
                                    <tr>
                                        <td><?=$value['id']?></td>
                                        <td><?=$value['name']?></td>    
                                                            
                                        <td>
                                            <div class="d-flex align-items-center ">
                                                <a class="btn btn-success me-1"href="./index.php?ctrl=chitietbook&id=<?=$value['id']?>"><i data-feather="edit"></i></a>
                                                <a class="btn btn-danger" onclick="return Del('<?= $value['id']?>')" href="./index.php?ctrl=service_delete&id=<?=$value['id']?>"><i  data-feather="delete"></i></a>
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
        return confirm('Bạn có muốn xóa danh mục '+ name + "?");
    }
    function Add()
    {
        return alert('Thêm mới thành công');
    }
</script>


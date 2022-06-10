<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý Đơn hàng</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./donhang.html">Quản lý Đơn hàng</a>
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
                            <h4 class="card-title">Đơn hàng hiện có </h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Tên người mua</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Tỉnh thành</th>
                                        <th>Hình thức</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Ngày đặt</th> 
                                        <th>Trạng thái</th>
                                        <th>Chỉnh sửa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($load as $key => $value) {?>
                                        <tr>
                                            <td><?=$value['id']?></td>
                                            <td><?=$value['name']?></td>
                                            <td><?=$value['phone']?></td>
                                            <td><?=$value['address']?></td>
                                            <td><?=$value['city']?></td>
                                            <td><?=$value['hinhthuc']?></td>
                                            <td><?=$value['quantity']?></td>
                                            <td class="text-danger"><?=number_format($value['tongtien'])?> VNĐ</td>
                                            <td><?=$value['date_time']?></td>

                                            <?php if($value['status']==0){?>
                                            <td class="fw-bolder text-warning">Chưa xử lý</td>     
                                            <?php }elseif($value['status']== 1){?>       
                                            <td class="fw-bolder text-success">Đã giao</td>
                                            <?php }elseif($value['status']== 2){?>    
                                            <td class="fw-bolder text-danger">Đã hủy</td>
                                            <?php }?>
                                            
                                            <td>
                                                <div class="d-flex align-items-center ">
                                                <!-- <button class="btn btn-outline-success btn-sm "><a href="./index.php?ctrl=products_update&id=<?=$value['id']?>"><i data-feather="edit"></i></a></button> -->
                                                
                                                <a class="btn btn-success me-1" href="./index.php?ctrl=chitietdonhang&id=<?=$value['id']?>"><i data-feather="edit"></i></a>
                                                <a class="btn btn-danger" onclick="return Del('<?= $value['id']?>')" href="./index.php?ctrl=xoadonhang&id=<?=$value['id']?>"><i  data-feather="delete"></i></a>
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
        return confirm('Bạn có muốn xóa hóa đơn số  '+ name + "?");
    }
 
</script>


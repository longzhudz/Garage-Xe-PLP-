<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý tài khoản</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./quanlydanhmuc.html">Quản lý tài khoản</a>
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
                            <h4 class="card-title">Tài khoản hiện có</h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Tên tài khoản</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Trạng thái</th>
                                    <th>Quyền</th>
                                    <th>Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($load as $key => $value) {?>
                                    <tr>
                                        <td><?=$value['UserID']?></td>
                                        <td><?=$value['LoginName']?></td>
                                        <td><?=$value['Fullname']?></td>
                                        <td><?=$value['Email']?></td>

                                        <?php if(empty($value['Phone'] == TRUE)) { ?>
                                            <td>Trống</td>
                                        <?php }elseif(empty($value['Phone'] == FALSE)){ ?> 
                                            <td><?=$value['Phone']?></td> 
                                        <?php }?>

                                       
                                        <td><?=$value['Address']?></td>
                                        
                                        
                                        <?php if($value['Status']== 0) { ?>
                                            <td class="text-success fw-bolder" >Hoạt động</td>
                                            <?php }elseif($value['Status']== 1){ ?> 
                                            <td class="text-danger fw-bolder">Khóa</td>       
                                        <?php }?>
                                        <?php if($value['Level']== 0) { ?>
                                            <td class="text-dark fw-bolder" >Khách hàng</td>
                                            <?php }elseif($value['Level']== 1){ ?> 
                                            <td class="text-info fw-bolder">ADMIN</td>       
                                        <?php }?>  
                                       
                                        <?php ?>
                                        <td>
                                            <div class="d-flex align-items-center ">
                                                <a class="btn btn-success me-1" href="./index.php?ctrl=member_update&id=<?=$value['UserID']?>"><i data-feather="edit"></i></a>
                                               <a class="btn btn-danger" onclick="return Del('<?= $value['LoginName']?>')" href="./index.php?ctrl=member_delete&id=<?=$value['UserID']?>"><i  data-feather="delete"></i></a>
                                            </div>  
                                        </td>
                                        <?php ?>
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
        return confirm('Bạn có muốn xóa tài khoản '+ name + "?");
    }
</script>


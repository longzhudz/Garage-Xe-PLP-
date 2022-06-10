<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Booking<?=$id?></h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./booking.html">Quản lý booking</a>
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
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Thông tin chi tiết</h4>
                    </div>
                    <div class="card">
                        <div class="row">
                            <div class="col-4 ">
                            <a href="#" class="me-25 ms-3">
                            <img
                                src="<?=$get_id['img_user']?>";
                                id="account-upload-img"
                                class="uploadedAvatar rounded me-50"
                                alt="profile image"
                                height="100"
                                width="100"
                                />
                                </a>
                            </div>
                            <div class="col-8">
                                <div class="card">
                                    <div class="col-12">
                                        <div class="row">
                                           <div class="col-2">Họ tên</div>
                                           <div class="col-10 fw-bolder"><?=$get_id['Fullname']?></div>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                           <div class="col-2">Ngày đặt lịch</div>
                                           <div class="col-10 fw-bolder" ><?=$get_id['ngay_dat']?></div>

                                        </div>
                                    </div> <div class="col-12">
                                        <div class="row">
                                           <div class="col-2">Giờ đặt</div>
                                           <div class="col-10 fw-bolder"><?=$get_id['gio_dat']?></div>
                                        </div>
                                     </div> 
                                    <?php foreach($result as $key =>$value){ ?>
                                   <div class="col-12">
                                        <div class="row">
                                           <div class="col-2">Dịch vụ</div>
                                           <div class="col-10 fw-bolder"><?=$value['name_service']?></div>

                                        </div>
                                    </div>
                                    <?php }?>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                    </div>
                </div>
            </div>
        </section>
       
    </div>
 
<script>
    function Upl()
    {
        return alert('Bạn đã cập nhật thành công ');
    }
</script>
</div>



